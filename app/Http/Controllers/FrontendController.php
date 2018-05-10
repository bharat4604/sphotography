<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {

        return view('main');
    }
    public function blogs()
    {
        return view('frontend.blog');
    }

    public function single()
    {
        return view('frontend.single');
    }
    public function galleries()
    {
        return view('frontend.gallery');
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
