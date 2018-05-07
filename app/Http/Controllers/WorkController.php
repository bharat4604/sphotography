<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWork;
use App\Http\Requests\UpdateWork;
use App\Models\Work;
use App\SubMenu;
use Illuminate\Http\Request;
use DB;

use App\Http\Requests;

class WorkController extends Controller
{
    public function index()
    {
        $works = Work::latest()->get([ 'slug', 'title', 'is_published' ]);
        return view('backend.work.index', compact('works'));
    }
    public function create()
    {
        return view('backend.work.create');
    }

    public function store(StoreWork $request)
    {
        DB::transaction(function () use ($request) {

            $data = $request->data();

            $work = Work::create($data);

            $this->uploadRequestImage($request, $work);
        });
        return redirect()->route('work.index')->withSuccess(trans('messages.create_success', [ 'entity' => 'Work' ]));
    }

    /**
     * @param UpdateWork $request
     * @param Work $work
     * @return mixed
     */
    public function update(UpdateWork $request, Work $work)
    {
        DB::transaction(function () use ($request, $work)
        {
            $work->update($request->data());

            if ($request->image)
            {
                $this->uploadRequestImage($request, $work);
            }
        });

        return redirect()->route('work.index')->withSuccess(trans('messages.update_success', [ 'entity' => 'Work' ]));
    }

    /**
     * @param Work $work
     * @return mixed
     */
    public function destroy(Work $work)
    {
        $work->delete();

        return back()->withSuccess(trans('message.delete_success', [ 'entity' => 'Work' ]));
    }

    public function edit(Work $work)
    {
        return view('backend.work.edit', compact('work'));
    }
    public function show(Work $work)
    {
        return view('frontend.partials.showwork',compact('work'));
    }

}
