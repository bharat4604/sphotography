@extends('skeleton')
@section('content')

    <body>
    {{--<div class="bar">--}}
        {{--<button type="button" class="navbar-toggle" data-toggle="offcanvas" data-recalc="false" data-target=".navmenu" data-canvas=".canvas">--}}
            {{--<span class="icon-bar"></span>--}}
            {{--<span class="icon-bar"></span>--}}
            {{--<span class="icon-bar"></span>--}}
        {{--</button>--}}
    {{--</div>--}}
    {{--<div class="navmenu navmenu-default navmenu-fixed-left">--}}
        {{--<ul class="nav navmenu-nav">--}}
            {{--<li><a href="index-2.html">Home</a></li>--}}
            {{--<li><a href="works.html">Works</a></li>--}}
            {{--<li><a href="gallery.html">Gallery</a></li>--}}
            {{--<li><a href="blog.html">Blog</a></li>--}}
            {{--<li><a href="contact.html">Contact</a></li>--}}
        {{--</ul>--}}
        {{--<a class="navmenu-brand" href="#"><img src="img/logo.png" width="160"></a>--}}
        {{--<div class="social">--}}
            {{--<a href="#"><i class="fa fa-twitter"></i></a>--}}
            {{--<a href="#"><i class="fa fa-facebook"></i></a>--}}
            {{--<a href="#"><i class="fa fa-instagram"></i></a>--}}
            {{--<a href="#"><i class="fa fa-pinterest-p"></i></a>--}}
            {{--<a href="#"><i class="fa fa-google-plus"></i></a>--}}
            {{--<a href="#"><i class="fa fa-skype"></i></a>--}}
        {{--</div>--}}
        {{--<div class="copyright-text">©Copyright <a href="https://themewagon.com/"> ThemeWagon</a> 2015 </div>--}}
    {{--</div>--}}

    <div class="canvas gallery"><br>
        <h1 class="blog-post-title text-center">Gallery of Images</h1>
        <span class="title-divider"></span>
        </section>
        <section id="photostack-3" class="photostack">
            <div>
                @foreach($galleries as $gallery)
                <figure>
                    <a href="{{$gallery->image->path}}"  data-lightbox="studio2" class="photostack-img"><img src="{{$gallery->image->path}}" alt="sphotography" style="height: 240px; width: 240px;"/></a>
                    <figcaption>
                        <h2 class="photostack-title">{{$gallery->title}}</h2>
                        <div class="photostack-back">
                            <p>{{$gallery->description}} <span>the</span> </p>
                        </div>
                    </figcaption>
                </figure>
                @endforeach
                {{--<figure>--}}
                    {{--<a href="img/b.jpg"  data-lightbox="studio2" class="photostack-img"><img src="img/b1.jpg" alt="img02"/></a>--}}
                    {{--<figcaption>--}}
                        {{--<h2 class="photostack-title">Happy Days</h2>--}}
                        {{--<div class="photostack-back">--}}
                            {{--<p>These Happy Days are yours and mine Happy Days. It's a beautiful day in this neighborhood a beautiful day for a neighbor. Would you be mine?</p>--}}
                        {{--</div>--}}
                    {{--</figcaption>--}}
                {{--</figure>--}}
                {{--<figure>--}}
                    {{--<a href="img/c.jpg"  data-lightbox="studio2" class="photostack-img"><img src="img/c1.jpg" alt="img03"/></a>--}}
                    {{--<figcaption>--}}
                        {{--<h2 class="photostack-title">Beautywood</h2>--}}
                        {{--<div class="photostack-back">--}}
                            {{--<p>It's a neighborly day in this beautywood a neighborly day for a beauty. Would you be mine? Could you be mine. Now the world don't move to the beat of just one drum.</p>--}}
                        {{--</div>--}}
                    {{--</figcaption>--}}
                {{--</figure>--}}
                {{--<figure>--}}
                    {{--<a href="img/d.jpg"  data-lightbox="studio2" class="photostack-img"><img src="img/d1.jpg" alt="img01"/></a>--}}
                    {{--<figcaption>--}}
                        {{--<h2 class="photostack-title">Serenity Beach</h2>--}}
                        {{--<div class="photostack-back">--}}
                            {{--<p>I have never been to a place so serene in my entire life before. Swimming in clear waters opened my mind to nature and reminded me of my and <span>eveybody</span> everybody else's mortality.</p>--}}
                        {{--</div>--}}
                    {{--</figcaption>--}}
                {{--</figure>--}}
                {{--<figure>--}}
                    {{--<a href="img/e.jpg"  data-lightbox="studio2" class="photostack-img"><img src="img/e1.jpg" alt="img04"/></a>--}}
                    {{--<figcaption>--}}
                        {{--<h2 class="photostack-title">Heaven of time</h2>--}}
                        {{--<div class="photostack-back">--}}
                            {{--<p>What might be right for you may not be right for some. And we know Flipper lives in a world full of wonder flying there-under under the sea.</p>--}}
                        {{--</div>--}}
                    {{--</figcaption>--}}
                {{--</figure>--}}
                {{--<figure>--}}
                    {{--<a href="img/f.jpg"  data-lightbox="studio2" class="photostack-img"><img src="img/f1.jpg" alt="img06"/></a>--}}
                    {{--<figcaption>--}}
                        {{--<h2 class="photostack-title">Forever this</h2>--}}
                        {{--<div class="photostack-back">--}}
                            {{--<p>Fish don't fry in the kitchen and beans don't burn on the grill. Took a whole lotta tryin' just to get up that hill. Baby if you've ever wondered - wondered whatever became of me. </p>--}}
                        {{--</div>--}}
                    {{--</figcaption>--}}
                {{--</figure>--}}
                <figure data-dummy>
                    <a href="#" class="photostack-img"><img src="img/7.jpg" alt="img07"/></a>
                    <figcaption>
                        <h2 class="photostack-title">Lovely Green</h2>
                    </figcaption>
                </figure>
                <figure data-dummy>
                    <a href="#" class="photostack-img"><img src="img/8.jpg" alt="img08"/></a>
                    <figcaption>
                        <h2 class="photostack-title">Wonderful</h2>
                    </figcaption>
                </figure>
                <figure data-dummy>
                    <a href="#" class="photostack-img"><img src="img/9.jpg" alt="img09"/></a>
                    <figcaption>
                        <h2 class="photostack-title">Love Addict</h2>
                    </figcaption>
                </figure>
                <figure data-dummy>
                    <a href="#" class="photostack-img"><img src="img/10.jpg" alt="img10"/></a>
                    <figcaption>
                        <h2 class="photostack-title">Friendship</h2>
                    </figcaption>
                </figure>
                <figure data-dummy>
                    <a href="#" class="photostack-img"><img src="img/11.jpg" alt="img11"/></a>
                    <figcaption>
                        <h2 class="photostack-title">White Nights</h2>
                    </figcaption>
                </figure>
                <figure data-dummy>
                    <a href="#" class="photostack-img"><img src="img/12.jpg" alt="img12"/></a>
                    <figcaption>
                        <h2 class="photostack-title">Serendipity</h2>
                    </figcaption>
                </figure>
                <figure data-dummy>
                    <a href="#" class="photostack-img"><img src="img/13.jpg" alt="img13"/></a>
                    <figcaption>
                        <h2 class="photostack-title">Pure Soul</h2>
                    </figcaption>
                </figure>
                <figure data-dummy>
                    <a href="#" class="photostack-img"><img src="img/14.jpg" alt="img14"/></a>
                    <figcaption>
                        <h2 class="photostack-title">Winds of Peace</h2>
                    </figcaption>
                </figure>
                <figure data-dummy>
                    <a href="#" class="photostack-img"><img src="img/15.jpg" alt="img15"/></a>
                    <figcaption>
                        <h2 class="photostack-title">Shades of blue</h2>
                    </figcaption>
                </figure>
                <figure data-dummy>
                    <a href="#" class="photostack-img"><img src="img/16.jpg" alt="img16"/></a>
                    <figcaption>
                        <h2 class="photostack-title">Lightness</h2>
                    </figcaption>
                </figure>
            </div>
        </section>
    </div>


@endsection