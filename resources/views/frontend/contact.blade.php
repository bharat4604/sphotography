@extends('skeleton')
@section('content')

    <body class="contact-page">
    <div class="canvas contact-page">
        <div class="contact-bg col-md-8 col-sm-12">
            <img src="img/dolon.jpg" alt="" width="100%">
        </div>
        <div class="col-md-4 col-sm-12 contact-bar">
            <script>
                function loadMap() {

                    var mapOptions = {
                        center:new google.maps.LatLng(27.695531, 85.309458),
                        zoom:15
                    }

                    var map = new google.maps.Map(document.getElementById("sample"),mapOptions);

                    var marker = new google.maps.Marker({
                        position: new google.maps.LatLng(35.817616, 139.677887),
                        map: map,
                        draggable:true,
                        icon:'/scripts/img/logo-footer.png'
                    });

                    marker.setMap(map);

                    var infowindow = new google.maps.InfoWindow({
                        content:"<b style='font-family:\"Comic Sans MS\", cursive, sans-serif;'>Saitama, Tokyo Based, Japan..</b><br>" +
//                        "<span>Tripureshwor,Teku Road,Kathmandu Nepal</span><br>"+
//                        "<b class=\"fa fa-phone\">:+977 1426160 |Sunday-Friday|10am-6pm</b><br>"+
                        "<span>Email:sphotography.com</span>"

                    });

                    infowindow.open(map,marker);
                }
            </script>
            <body onload = "loadMap()">
            <div id = "sample" style="border:0; width:100%; height:250px;" allowfullscreen></div>
            </body>
            <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD19cqU2rIzBHOPL_t8GhJJ9cmi-HNpULg&callback=initialize"></script>
            <h3 class="interest-text text-center"> Thanks for your Interest </h3>
            <br>
            <div class="col-md-6 add-text">
               Saitama, Tokyo Based,
               Japan..
            </div>
            <div class="col-md-6 add-text">
               Kathmandu, Nepal Based..
            </div>
            <br>
            <div class="col-sm-12 col-md-12">
                <form method="post" action="http://technext.github.io/photography/contact.php">
                    <div class="controls controls-row">
                        <div class="">
                            <input id="name" name="name" type="text" class="form-control" placeholder="Name">
                        </div>
                        <div class="">
                            <input id="email" name="email" type="email" class="col-md-6 form-control" placeholder="Email address">
                        </div>
                    </div>
                    <div class="controls">
                        <textarea id="message" name="message" class="col-md-12" placeholder="Your Message" rows="5"></textarea>
                    </div>

                    <div class="controls btn-full">
                        <button id="contact-submit" name="submit" value="Submit" type="submit" class="btn btn-primary">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection