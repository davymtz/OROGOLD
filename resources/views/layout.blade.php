<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OROGOLD | Test</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.css') }}">
    <!--link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.css') }}"-->
</head>
<body>
    <nav class="navbar navbar-expand-lg" style="padding: 1em 10%; background: black;">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('assets/images/cropped-orogold-logo-dgold.png') }}" width="150" height="auto" class="d-inline-block align-top" alt="image">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li>
                    <span class="navbar-text orogold-text">
                        orogoldspa@orogold.com
                    </span>
                </li>
            </ul>
            <!--form class="form-inline my-2 my-lg-0"-->
            <button class="btn btn-outline-orogold my-2 my-sm-0" style="margin-left: 2.5em;" type="submit">Reserva ahora</button>
            <!--/form-->
        </div>
    </nav>

    @yield('content')

    <nav class="navbar nav_footer" style="padding: 1em 10%; background: #000;">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('assets/images/cropped-orogold-logo-dgold.png') }}" width="150" height="auto" class="d-inline-block align-top" alt="image">
        </a>
        <div class="row">
            <span class="navbar-text orogold-text">
                <img width="20" height="auto" src="{{ asset('assets/icon/mail.png') }}" alt=""> orogoldspa@orogold.com
            </span>
            <span class="navbar-text orogold-text">
                <img width="20" height="auto" src="{{ asset('assets/icon/telephone.png') }}" alt=""> + 52 5502630032
            </span>
        </div>
    </nav>

</body>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="{{asset('assets/js/owl.carousel.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCKGEgHdBqgn9xE6IFPwpbbjUlBgO2mDFI&callback=initMap" async defer></script>
<script>
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        autoHeight:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    });
    // Mapas
    var map;
    function initMap(){
        map =  new google.maps.Map(document.getElementById('map'), {
            center: {lat: 19.425687, lng: -99.162341},
            zoom: 13
        });
        var marker;
        marker = new google.maps.Marker({
            position: {lat: 19.425687, lng: -99.162341},
            map: map,
            title: "Test de prueba"
        });
    }
</script>
</html>