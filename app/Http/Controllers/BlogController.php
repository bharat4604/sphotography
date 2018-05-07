<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBlog;
use App\Http\Requests\UpdateBlog;
use App\Models\Blog;
use App\SubMenu;
use Illuminate\Http\Request;
use DB;

use App\Http\Requests;


class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::latest()->get([ 'slug', 'title', 'is_published' ]);
        return view('backend.blog.index', compact('blogs'));
    }
    public function create()
    {
        return view('backend.blog.create');
    }

    public function store(StoreBlog $request)
    {
        DB::transaction(function () use ($request) {

            $data = $request->data();

            $blog = Blog::create($data);

            $this->uploadRequestImage($request, $blog);
        });
        return redirect()->route('blog.index')->withSuccess(trans('messages.create_success', [ 'entity' => 'Blog' ]));
    }

    /**
     * @param UpdateBlog $request
     * @param Blog $blog
     * @return mixed
     */
    public function update(UpdateBlog $request, Blog $blog)
    {
        DB::transaction(function () use ($request, $blog)
        {
            $blog->update($request->data());

            if ($request->image)
            {
                $this->uploadRequestImage($request, $blog);
            }
        });

        return redirect()->route('blog.index')->withSuccess(trans('messages.update_success', [ 'entity' => 'Blog' ]));
    }

    /**
     * @param Blog $blog
     * @return mixed
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();

        return back()->withSuccess(trans('message.delete_success', [ 'entity' => 'Blog' ]));
    }

    public function edit(Blog $blog)
    {
        return view('backend.blog.edit', compact('blog'));
    }
    public function show(Blog $blog)
    {
        return view('frontend.partials.showblog',compact('blog'));
    }

}
