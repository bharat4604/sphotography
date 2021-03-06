@extends('skeleton')
@section('content')

    <div class="canvas col-md-12">
        <div class=" col-md-3 col-sm-12 col-xs-12 page-container sidebar visible-md visible-lg">
            <div class="home-page-header">
                <div class="post-category">
                    <h4 class="sidebar-title"><a href="{{url('/blogs')}}">Back TO Blog</a></h4>
                    {{--<ul class="categories-link">--}}
                        {{--<li class="category-item"><i class="fa fa-angle-right"></i><a href="#">Sports</a></li>--}}
                        {{--<li class="category-item"><i class="fa fa-angle-right"></i><a href="#">Nature</a> </li>--}}
                        {{--<li class="category-item"><i class="fa fa-angle-right"></i><a href="#">Wild</a> </li>--}}
                        {{--<li class="category-item"><i class="fa fa-angle-right"></i><a href="#">Travel</a> </li>--}}
                        {{--<li class="category-item"><i class="fa fa-angle-right"></i><a href="#">Food</a></li>--}}
                    {{--</ul>--}}
                </div>

                <div class="post-category">
                    <h4 class="sidebar-title">Recent Blog Posts</h4>
                    <ul class="categories-link">
                        <li class="category-item"><i class="fa fa-angle-right"></i><a href="#">Sports</a></li>
                        <li class="category-item"><i class="fa fa-angle-right"></i><a href="#">Nature</a> </li>
                        <li class="category-item"><i class="fa fa-angle-right"></i><a href="#">Wild</a> </li>
                        <li class="category-item"><i class="fa fa-angle-right"></i><a href="#">Travel</a> </li>
                        <li class="category-item"><i class="fa fa-angle-right"></i><a href="#">Food</a></li>
                    </ul>
                </div>

                <div class="blog-post">
                    <h4 class="left-side sidebar-title">About me</h4>
                    <p class="blog-text">
                        You know, being a test pilot isn't always the healthiest business in the world.

                    </p>
                    <img class="featured" src="img/dolon.png" width="200" align="left" alt="Background">
                </div>
            </div>

        </div><!-- /.container -->
        <div class="blog col-md-8 col-md-offset-1  col-sm-12 col-xs-12">
            <div class="blog-post-single">

                <p class="blog-post-sub-title text-center"> Nature </p>
                <h3 class="blog-post-title text-center ">FRAGMENTS OF ICELAND</h3>
                <span class="title-divider"></span>
                <img class="featured" src="img/bg1.jpg" width="96%" alt="Background">
                <br>
                <p class="blog-text-single">
                    You know, being a test pilot isn't always the healthiest business in the world.
                    That's one small step for [a] man, one giant leap for mankind.You know, being a test pilot isn't always the healthiest business in the world. You know, being a test pilot isn't always the healthiest business in the world.That's one small step for [a] man, one giant leap for mankind.That's one small step for [a] man, one giant leap for mankind. You know, being a test pilot isn't always the healthiest business in the world.
                    That's one small step for [a] man, one giant leap for mankind.You know, being a test pilot isn't always the healthiest business in the world. You know, being a test pilot isn't always the healthiest business in the world. <br />
                    <span class="prev-buttton"><i class="fa fa-arrow-left"></i> Previous</span><span class="next-buttton">Next <i class="fa fa-arrow-right"></i></span>
                    <br />
                </p>
            </div>
        </div>

        <div class=" col-md-3 col-sm-12 col-xs-12 page-container sidebar visible-xs visible-sm">
            <div class="home-page-header1">
                <div class="post-category">
                    <h4 class="sidebar-title">Categories</h4>
                    <ul class="categories-link">
                        <li class="category-item"><i class="fa fa-angle-right"></i><a href="#">Sports</a></li>
                        <li class="category-item"><i class="fa fa-angle-right"></i><a href="#">Nature</a> </li>
                        <li class="category-item"><i class="fa fa-angle-right"></i><a href="#">Wild</a> </li>
                        <li class="category-item"><i class="fa fa-angle-right"></i><a href="#">Travel</a> </li>
                        <li class="category-item"><i class="fa fa-angle-right"></i><a href="#">Food</a></li>
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

                <div class="post-category">
                    <h4 class="sidebar-title"><a href="{{url('/blog')}}">Recent Blog Posts</a></h4>
                    {{--<ul class="categories-link">--}}
                        {{--<li class="category-item"><i class="fa fa-angle-right"></i><a href="#">Sports</a></li>--}}
                        {{--<li class="category-item"><i class="fa fa-angle-right"></i><a href="#">Nature</a> </li>--}}
                        {{--<li class="category-item"><i class="fa fa-angle-right"></i><a href="#">Wild</a> </li>--}}
                        {{--<li class="category-item"><i class="fa fa-angle-right"></i><a href="#">Travel</a> </li>--}}
                        {{--<li class="category-item"><i class="fa fa-angle-right"></i><a href="#">Food</a> </li>--}}
                    {{--</ul>--}}
                </div>



            </div>

        </div><!-- /.container -->
    </div>

@endsection