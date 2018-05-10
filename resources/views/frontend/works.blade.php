@extends('skeleton')
@section('content')

    <div class="canvas gallery"><br>
        <h1 class="blog-post-title text-center">Have a look to my works</h1>
        <span class="title-divider"></span>

        <div id="container" class="container">
            <div id="gallery">
                <div id="gallery-header">
                    <div id="gallery-header-center">
                        <div id="gallery-header-center-left">
                            <!-- <div id="gallery-header-center-left-icon">
                            </div> -->
                            <div id="gallery-header-center-left-title">All Galleries</div>
                        </div>
                        <div id="gallery-header-center-right">
                            <div class="gallery-header-center-right-links" id="filter-all">All</div>
                            <div class="gallery-header-center-right-links" id="filter-studio">Studio</div>
                            <div class="gallery-header-center-right-links" id="filter-landscape">Landscapes</div>
                        </div>
                    </div>
                </div>

                <div id="gallery-content">

                    <div id="gallery-content-center">
                        @foreach($works as $work)
                            {{--{{ $work->view === "studio" ? "Hi" : "Goodbye" }}--}}
                            @if ($work->view === "studio")
                                <a href="{{$work->image->path}}" data-lightbox="studio1"><img src="{{$work->image->path}}" id="imagelightbox" class="all studio"/> </a>
                            @else
                                <a href="{{$work->image->path}}" data-lightbox="studio1"><img src="{{$work->image->path}}" class="all landscape"></a>
                            @endif
                        {{--<a href="{{$work->image->path}}" data-lightbox="studio1"><img src="{{$work->image->path}}" id="imagelightbox" class="all studio"/> </a>--}}
                        {{--<a href="assets/landscape1.jpg" data-lightbox="studio1"><img src="assets/landscape1.jpg" class="all landscape"></a>--}}
                        {{--<a href="assets/studio2.jpg" data-lightbox="studio1"><img src="assets/studio2.jpg" class="all studio"/></a>--}}
                        {{--<a href="assets/studio25.jpg" data-lightbox="studio1"><img src="assets/studio25.jpg" class="all studio"/></a>--}}
                        {{--<a href="{{$work->image->path}}" data-lightbox="studio1"><img src="{{$work->image->path}}" class="all landscape"></a>--}}
                        {{--<a href="assets/studio27.jpg" data-lightbox="studio1"><img src="assets/studio27.jpg" class="all studio"/></a>--}}
                        {{--<a href="assets/studio3.jpg" data-lightbox="studio1"><img src="assets/studio3.jpg" class="all studio"/></a>--}}
                        {{--<a href="assets/landscape3.jpg" data-lightbox="studio1"><img src="assets/landscape3.jpg" class="all landscape"></a>--}}
                        {{--<a href="assets/studio26.jpg" data-lightbox="studio1"><img src="assets/studio26.jpg" class="all studio"/></a>--}}
                        {{--<a href="assets/studio4.jpg" data-lightbox="studio1"><img src="assets/studio4.jpg" class="all studio"/></a>--}}
                        {{--<a href="assets/landscape4.jpg" data-lightbox="studio1"><img src="assets/landscape4.jpg" class="all landscape"></a>--}}
                        {{--<a href="assets/studio5.jpg" data-lightbox="studio1"><img src="assets/studio5.jpg" class="all studio"/></a>--}}
                        {{--<a href="assets/landscape5.jpg" data-lightbox="studio1"><img src="assets/landscape5.jpg" class="all landscape"></a>--}}
                        {{--<a href="assets/studio6.jpg" data-lightbox="studio1"><img src="assets/studio6.jpg" class="all studio"/></a>--}}
                        {{--<a href="assets/landscape6.jpg" data-lightbox="studio1"><img src="assets/landscape6.jpg" class="all landscape"></a>--}}
                        {{--<a href="assets/studio7.jpg" data-lightbox="studio1"><img src="assets/studio7.jpg" class="all studio"/></a>--}}
                        {{--<a href="assets/landscape7.jpg" data-lightbox="studio1"><img src="assets/landscape7.jpg" class="all landscape"></a>--}}
                        {{--<a href="assets/studio8.jpg" data-lightbox="studio1"><img src="assets/studio8.jpg" class="all studio"/>--}}
                            {{--<a href="assets/landscape8.jpg" data-lightbox="studio1"><img src="assets/landscape8.jpg" class="all landscape"></a>--}}
                            {{--<a href="assets/studio9.jpg" data-lightbox="studio1"><img src="assets/studio9.jpg" class="all studio"/></a>--}}
                            {{--<a href="assets/landscape9.jpg" data-lightbox="studio1"><img src="assets/landscape9.jpg" class="all landscape"></a>--}}
                            {{--<a href="assets/studio10.jpg" data-lightbox="studio1"><img src="assets/studio10.jpg" class="all studio"/></a>--}}
                            {{--<a href="assets/landscape10.jpg" data-lightbox="studio1"><img src="assets/landscape10.jpg" class="all landscape"></a>--}}
                            {{--<a href="assets/studio11.jpg" data-lightbox="studio1"><img src="assets/studio11.jpg" class="all studio"/></a>--}}
                            {{--<a href="assets/landscape11.jpg" data-lightbox="studio1"><img src="assets/landscape11.jpg" class="all landscape"></a>--}}
                            {{--<a href="assets/studio12.jpg" data-lightbox="studio1"><img src="assets/studio12.jpg" class="all studio"/></a>--}}
                            {{--<a href="assets/landscape12.jpg" data-lightbox="studio1"><img src="assets/landscape12.jpg" class="all landscape"></a>--}}
                            {{--<a href="assets/studio13.jpg" data-lightbox="studio1"><img src="assets/studio13.jpg" class="all studio"/></a>--}}
                            {{--<a href="assets/landscape13.jpg" data-lightbox="studio1"><img src="assets/landscape13.jpg" class="all landscape"></a>--}}
                            {{--<a href="assets/studio14.jpg" data-lightbox="studio1"><img src="assets/studio14.jpg" class="all studio"/></a>--}}
                            {{--<a href="assets/landscape14.jpg" data-lightbox="studio1"><img src="assets/landscape14.jpg" class="all landscape"></a>--}}
                            {{--<a href="assets/studio15.jpg" data-lightbox="studio1"><img src="assets/studio15.jpg" class="all studio"/></a>--}}
                            {{--<a href="assets/landscape15.jpg" data-lightbox="studio1"><img src="assets/landscape15.jpg" class="all landscape"></a>--}}
                            {{--<a href="assets/studio16.jpg" data-lightbox="studio1"><img src="assets/studio16.jpg" class="all studio"/></a>--}}
                            {{--<a href="assets/landscape16.jpg" data-lightbox="studio1"><img src="assets/landscape16.jpg" class="all landscape"></a>--}}
                            {{--<a href="assets/studio17.jpg" data-lightbox="studio1"><img src="assets/studio17.jpg" class="all studio"/></a>--}}
                            {{--<a href="assets/landscape17.jpg" data-lightbox="studio1"><img src="assets/landscape17.jpg" class="all landscape"></a>--}}
                            {{--<a href="assets/studio18.jpg" data-lightbox="studio1"><img src="assets/studio18.jpg" class="all studio"/></a>--}}
                            {{--<a href="assets/landscape18.jpg" data-lightbox="studio1"><img src="assets/landscape18.jpg" class="all landscape"></a>--}}
                            {{--<a href="assets/studio19.jpg" data-lightbox="studio1"><img src="assets/studio19.jpg" class="all studio"/></a>--}}
                            {{--<a href="assets/studio20.jpg" data-lightbox="studio1"><img src="assets/studio20.jpg" class="all studio"/></a>--}}
                            {{--<a href="assets/studio21.jpg" data-lightbox="studio1"><img src="assets/studio21.jpg" class="all studio"/></a>--}}
                            {{--<a href="assets/studio22.jpg" data-lightbox="studio1"><img src="assets/studio22.jpg" class="all studio"/></a>--}}
                            {{--<a href="assets/studio23.jpg" data-lightbox="studio1"><img src="assets/studio23.jpg" class="all studio"/></a>--}}
                        @endforeach    {{--<a href="assets/studio24.jpg" data-lightbox="studio1"><img src="assets/studio24.jpg" class="all studio"/></a>--}}
                    </div>

                </div>

            </div>
        </div>
    </div>

@endsection