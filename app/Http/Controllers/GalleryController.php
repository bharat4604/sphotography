<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGallery;
use App\Http\Requests\UpdateGallery;
use App\Models\Gallery;
use App\SubMenu;
use Illuminate\Http\Request;
use DB;

use App\Http\Requests;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::latest()->get([ 'slug', 'title', 'is_published' ]);
        return view('backend.gallery.index', compact('galleries'));
    }
    public function create()
    {
        return view('backend.gallery.create');
    }

    public function store(StoreGallery $request)
    {
        DB::transaction(function () use ($request) {

            $data = $request->data();

            $gallery = Gallery::create($data);

            $this->uploadRequestImage($request, $gallery);
        });
        return redirect()->route('gallery.index')->withSuccess(trans('messages.create_success', [ 'entity' => 'Gallery' ]));
    }

    /**
     * @param UpdateGallery $request
     * @param Gallery $gallery
     * @return mixed
     */
    public function update(UpdateGallery $request, Gallery $gallery)
    {
        DB::transaction(function () use ($request, $gallery)
        {
            $gallery->update($request->data());

            if ($request->image)
            {
                $this->uploadRequestImage($request, $gallery);
            }
        });

        return redirect()->route('gallery.index')->withSuccess(trans('messages.update_success', [ 'entity' => 'Gallery' ]));
    }

    /**
     * @param Gallery $gallery
     * @return mixed
     */
    public function destroy(Gallery $gallery)
    {
        $gallery->delete();

        return back()->withSuccess(trans('message.delete_success', [ 'entity' => 'Gallery' ]));
    }

    public function edit(Gallery $gallery)
    {
        return view('backend.gallery.edit', compact('gallery'));
    }
    public function show(Gallery $gallery)
    {
        return view('frontend.partials.showgallery',compact('gallery'));
    }

}
