@extends('skeleton')
@section('content')
    <div class="canvas col-md-12">
        <div class=" col-md-3 col-sm-12 col-xs-12 page-container sidebar visible-md visible-lg">
            <div class="home-page-header">
                {{--<div class="post-category">--}}
                    {{--<h4 class="sidebar-title">Categories</h4>--}}
                    {{--<ul class="categories-link">--}}
                        {{--<li class="category-item"><i class="fa fa-angle-right"></i><a href = "#" >Sports</a> </li>--}}
                        {{--<li class="category-item"><i class="fa fa-angle-right"></i><a href = "#" >Nature</a> </li>--}}
                        {{--<li class="category-item"><i class="fa fa-angle-right"></i><a href = "#" >Wild</a> </li>--}}
                        {{--<li class="category-item"><i class="fa fa-angle-right"></i><a href = "#" >Travel</a> </li>--}}
                        {{--<li class="category-item"><i class="fa fa-angle-right"></i><a href = "#" >Food </a></li>--}}
                    {{--</ul>--}}
                {{--</div>--}}

                <div class="post-category">
                    <h4 class="sidebar-title">Recent Blog Posts</h4>
                    <ul class="categories-link">
                        <li class="category-item"><i class="fa fa-angle-right"></i><a href = "#" >Sports </a> </li>
                        <li class="category-item"><i class="fa fa-angle-right"></i><a href = "#" >Nature</a> </li>
                        <li class="category-item"><i class="fa fa-angle-right"></i><a href = "#" >Wild</a> </li>
                        <li class="category-item"><i class="fa fa-angle-right"></i><a href = "#" >Travel</a> </li>
                        <li class="category-item"><i class="fa fa-angle-right"></i><a href = "#" >Food</a> </li>
                    </ul>
                </div>

                <div class="blog-post">
                    <h4 class="left-side sidebar-title">About me</h4>
                    <p class="blog-text">
                        You know, being a photographer isn't always the healthiest business in the world.

                    </p>
                    <img class="featured" src="img/me.jpg" width="200" align="left" alt="Background">
                </div>

            </div>

        </div><!-- /.container -->
        <div class="blog col-md-8 col-md-offset-1  col-sm-12 col-xs-12">
            @foreach($blogs as $blog)
            <div class="blog-post">
                <img class="featured" src="{{$blog->image->path}}" width="300" alt="Background">
                <p class="blog-post-sub-title text-center"> {{$blog->maintitle}} </p>
                <a href="{{url('single')}}"><h3 class="blog-post-title ">{{$blog->title}}</h3></a>
                <span class="title-divider"></span>
                <p class="blog-text">
                    {{str_limit($blog->description , 40) }}
                </p>
            </div>
            @endforeach
            <div class="blog-post">
                <img class="featured" src="img/bg2.jpg" width="300" alt="Background">
                <p class="blog-post-sub-title text-center"> Travel </p>
                <a href="{{url('single')}}"><h3 class="blog-post-title ">FRAGMENTS OF ICELAND</h3></a>
                <span class="title-divider"></span>
                <p class="blog-text">
                    You know, being a test pilot isn't always the healthiest business in the world.
                    That's one small step for [a] man, one giant leap for mankind.

                </p>
            </div>
            <div class="blog-post">
                <img class="featured" src="img/bg3.jpg" width="300" alt="Background">
                <p class="blog-post-sub-title text-center"> Sports </p>
                <a href="{{url('single')}}"><h3 class="blog-post-title ">FRAGMENTS OF ICELAND</h3></a>
                <span class="title-divider"></span>
                <p class="blog-text">
                    You know, being a test pilot isn't always the healthiest business in the world.
                    That's one small step for [a] man, one giant leap for mankind.

                </p>
            </div>
            <div class="blog-post">
                <img class="featured" src="img/bg.jpg" width="300" alt="Background">
                <p class="blog-post-sub-title text-center"> Wild </p>
                <a href="{{url('single')}}"><h3 class="blog-post-title ">FRAGMENTS OF ICELAND</h3></a>
                <span class="title-divider"></span>
                <p class="blog-text">
                    You know, being a test pilot isn't always the healthiest business in the world.
                    That's one small step for [a] man, one giant leap for mankind.

                </p>
            </div>
            <div class="blog-post">
                <img class="featured" src="img/bg.jpg" width="300" alt="Background">
                <p class="blog-post-sub-title text-center"> Nature </p>
                <a href="{{url('single')}}"><h3 class="blog-post-title ">FRAGMENTS OF ICELAND</h3></a>
                <span class="title-divider"></span>
                <p class="blog-text">
                    You know, being a test pilot isn't always the healthiest business in the world.
                    That's one small step for [a] man, one giant leap for mankind.

                </p>
            </div>
            <div class="blog-post">
                <img class="featured" src="img/bg.jpg" width="300" alt="Background">
                <p class="blog-post-sub-title text-center"> Travel </p>
                <a href="{{url('single')}}"><h3 class="blog-post-title ">FRAGMENTS OF ICELAND</h3></a>
                <span class="title-divider"></span>
                <p class="blog-text">
                    You know, being a test pilot isn't always the healthiest business in the world.
                    That's one small step for [a] man, one giant leap for mankind.
                </p>
            </div>
        </div>

        <div class=" col-md-3 col-sm-12 col-xs-12 container page-container sidebar visible-xs visible-sm">
            <div class="home-page-header1">
                <div class="post-category">
                    <h4 class="sidebar-title">Categories</h4>
                    <ul class="categories-link">
                        <li class="category-item"><i class="fa fa-angle-right"></i><a href = "#" >Sports</a> </li>
                        <li class="category-item"><i class="fa fa-angle-right"></i><a href = "#" >Nature</a> </li>
                        <li class="category-item"><i class="fa fa-angle-right"></i><a href = "#" >Wild</a> </li>
                        <li class="category-item"><i class="fa fa-angle-right"></i><a href = "#" >Travel</a> </li>
                        <li class="category-item"><i class="fa fa-angle-right"></i><a href = "#" >Food </a></li>
                    </ul>
                </div>

                <div class="post-category">
                    <h4 class="sidebar-title">Recent Blog Posts</h4>
                    <ul class="categories-link">
                        <li class="category-item"><i class="fa fa-angle-right"></i><a href = "#" >Sports</a> </li>
                        <li class="category-item"><i class="fa fa-angle-right"></i><a href = "#" >Nature</a> </li>
                        <li class="category-item"><i class="fa fa-angle-right"></i><a href = "#" >Wild</a> </li>
                        <li class="category-item"><i class="fa fa-angle-right"></i><a href = "#" >Travel</a> </li>
                        <li class="category-item"><i class="fa fa-angle-right"></i><a href = "#" >Food</a> </li>
                    </ul>
                </div>

                <div class="blog-post">
                    <h4 class="sidebar-title">About Us</h4>
                    <p class="blog-text">
                        You know, being a test pilot isn't always the healthiest business in the world.
                        That's one small step for [a] man, one giant leap for mankind.
                    </p>
                    <img class="featured" src="img/dolon.png" width="300" alt="Background">
                </div>

            </div>

        </div><!-- /.container -->
    </div>
    @endsection