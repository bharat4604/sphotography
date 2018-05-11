<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Work;
use App\Models\Gallery;
use App\Models\Blog;

class FrontendController extends Controller
{
    public function index()
    {

        return view('main');
    }
    public function blogs()
    {
        $blogs=Blog::latest()->get();
        return view('frontend.blog',compact('blogs'));
    }

    public function single()
    {
        return view('frontend.single');
    }
    public function galleries()
    {
        $galleries=Gallery::latest()->get();
        return view('frontend.gallery',compact('galleries'));
    }

    public function works()
    {
        $works = Work::latest()->get();
        return view('frontend.works',compact('works'));
    }
    public function contact()
    {
        return view('frontend.contact');
    }
}
