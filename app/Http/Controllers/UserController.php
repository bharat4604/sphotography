<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUser;
use App\Http\Requests\UpdatePassword;
use App\Http\Requests\UpdateUser;
use App\Models\User;
use App\Notifications\ActivationCodeNofity;
use Bican\Roles\Models\Role;
use Datatables;
use DB;
use Form;

class UserController extends Controller {

    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('backend.user.index');
    }

    /**
     * @return mixed
     */
    public function userList()
    {
        return Datatables::of(User::with('roles', 'image')
            ->where('username', '<>', 'super_admin')->get())
        ->editColumn('created_at', function ($user)
        {
            return $user->created_at->format(config('website.date_format'));
        })->addColumn('action', function ($user)
        {
            $buttons = '';
            if (auth()->user()->hasPermission('save.user'))
            {
                $buttons .= '<a href="' . route('user.edit', $user->username) . '" class="btn btn-primary btn-flat btn-xs">Edit</a>';
            } else
            {
                $buttons .= 'NA';
            }

            return $buttons;

            //$buttons .= '<a role="button" href="javascript:void(0);" class="btn btn-primary btn-flat btn-xs item-delete" data-url="' . route('user.destroy', $user->username) . '">Delete</a>';
        })->make(true);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $roles = Role::where('slug', '<>', 'super')->pluck('name', 'id');

        return view('backend.user.create', compact('roles'));
    }

    /**
     * @param StoreUser $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreUser $request)
    {
        DB::transaction(function () use ($request)
        {
            $data = $request->data();

            $user = User::create($data);

            $user->roles()->sync([$data['role']]);

            $this->uploadRequestImage($request, $user);

            $user->notify((new ActivationCodeNofity())->onQueue('notifications'));
        });

        return redirect()->route('user.index')->with('success', trans('messages.create_success', ['entity' => 'User']));
    }

    /**
     * @param User $user
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(User $user)
    {
        if (auth()->user()->hasPermission('read.user'))
        {
            return view('backend.user.show', compact('user'));
        } else
        {
            $user = auth()->user();
            return view('backend.user.show', compact('user'));
        }
    }
    /**
     * @param User $user
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(User $user)
    {
        $roles = Role::where('slug', '<>', 'super')->pluck('name', 'id');

        return view('backend.user.edit', compact('user', 'roles'));
    }

    /**
     * @param UpdateUser $request
     * @param User $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateUser $request, User $user)
    {
        DB::transaction(function () use ($request, $user)
        {
            $data = $request->data();

            $user->update($data);

            if (array_key_exists('role', $data))
            {
                $user->roles()->sync([$data['role']]);
            }

            $this->uploadRequestImage($request, $user);
        });

        return back()->with('success', trans('messages.update_success', ['entity' => 'User']));
    }

    /**
     * @param User $user
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(User $user)
    {
        if ($user->delete())
        {
            return response()->json([
                'Result' => 'OK'
            ]);
        }

        return response()->json([
            'Result' => 'Error'
        ], 500);
    }

    /**
     * @param User $user
     */
    public function login(User $user)
    {
        if (auth()->user()->isRole('super'))
        {
            auth()->loginUsingId($user->id);
        }

        return back();
    }
}
