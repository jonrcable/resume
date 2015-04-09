<! --- NEW --->
<!doctype html>
<html lang="en-gb" class="no-js">

<head>

    <title>
        @section('title')
        @show
    </title>

    <!-- ***** meta ***** -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=yes">
    <meta name="keywords" content="premium html template, unique premium template, multipurpose" />

    <meta name="description" content="@yield('meta-description')">
    <meta name="base_url" content="{{ URL::to('/') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- ***** Favicons ***** -->
    <link rel="shortcut icon" href="cleanlab/images/favicon.png">
    <link rel="apple-touch-icon" href="cleanlab/images/favicons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="44x72" href="cleanlab/images/favicons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="70x114" href="cleanlab/images/favicons/apple-touch-icon-114x114.png">

    <!-- ***** Google Fonts ***** -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>

    <!-- ***** Addons Stylesheet ***** -->
    <link rel="stylesheet" type="text/css" href="cleanlab/css/rev-settings.css" media="screen" />

    {{-- Queue assets --}}
    <!-- ***** Bootstrap CSS Stylesheet ***** -->
    <link rel="stylesheet" type="text/css" href="cleanlab/css/bootstrap.css" media="screen" />
    <!-- ***** Main + Responsive CSS Stylesheet ***** -->
    <link rel="stylesheet" type="text/css" href="cleanlab/css/icons-styles.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="cleanlab/css/template.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="cleanlab/css/responsive-devices.css" media="screen" />
    <!-- ***** Updates CSS Stylesheet (for future templates updates ***** -->
    <link rel="stylesheet" type="text/css" href="cleanlab/css/updates.css" media="screen" />
    <!-- ***** Custom CSS Stylesheet (where you should add your own css rules) ***** -->
    <link rel="stylesheet" type="text/css" href="cleanlab/css/custom.css" media="screen" />

    <!-- JS -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="cleanlab/js/jquery.min.js">\x3C/script>')</script>

    {{-- Call custom inline styles --}}
    @section('styles')
    @show
</head>
<body class="">

<div id="page-wrapper" class="home5">
<header id="header" class="nav-down header3">

<!-- Panel -->
@include('partials/top')

<div class="container">
<div class="row">
<div class="col-sm-12">
<div class="relative onlyh3">
<div class="logo-container hasinfocard">
    <h1 id="logo">
        <a href="/">
            <div class="logo-default">
                <img src="cleanlab/images/logo.png" alt="CleanLab HTML Template" title="Click to return to CleanLab Template's homepage" class="img-responsive">
            </div>
            <div class="logo-white">
                <img src="cleanlab/images/logo-white.png" alt="CleanLab HTML Template 2" title="Click to return to CleanLab Template's homepage 2" class="img-responsive">
            </div>
        </a>
    </h1><!-- end logo -->

    <!-- Card -->
    @include('partials/card')

</div><!-- end logo-container -->

    <!-- Navigation -->
    @include('partials/navigation')

</div>
</div>
</div>
</div>
</header>

    <!-- Crumbs -->
    @yield('crumbs')

    <!-- Tagline -->
    @yield('tagline')

    <div id="content">

            @yield('page')

    </div><!-- end content -->

    <!-- Foot Note -->
    @include('partials/footnote')

<!-- Footer -->
@include('partials/footer')

</div>
<p id="back-top">
    <a href="#top"><span class="icon-angle-up"></span></a>
</p>

{{-- Call custom inline scripts --}}
@section('scripts')
@show

<!-- ***** Core JS ***** -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="modernizr/js/modernizr.min.js"></script>
<script src="cleanlab/js/clean-js-plugins.js"></script>

<!-- CleanLab Scrips File -->
<script src="cleanlab/js/cleanlab_script.js"></script>

<!-- Custom Scrips loaded on this page -->
<script src="cleanlab/js/jquery.themepunch.plugins.min.js"></script>
<script src="cleanlab/js/jquery.themepunch.revolution.min.js"></script>
<script src="cleanlab/js/jquery.gmap.min.js"></script>
<script src="cleanlab/js/jquery.knob.js"></script>

<script type="text/javascript"> /* Revolution Slider */
    var revapi;
    jQuery(document).ready(function() {
        revapi = jQuery('.tp-banner').revolution(
            {
                delay:9000,
                startwidth:1170,
                startheight:500,
                hideThumbs:10,
                fullWidth:"on",
                forceFullWidth:"on",
            });
    });
</script>
<script type="text/javascript">/* OWL Carousel */
    $(document).ready(function() {
        $(".testimonials2-carousel").owlCarousel({

            navigation : false, // Show next and prev buttons
            autoPlay: true,
            slideSpeed : 300,
            paginationSpeed : 400,
            singleItem: true,
            pagination: false,
            transitionStyle : "fade"

            // "singleItem:true" is a shortcut for:
            // items : 1,
            // itemsDesktop : false,
            // itemsDesktopSmall : false,
            // itemsTablet: false,
            // itemsMobile : false
        });
    });
</script>
<script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
<script type="text/javascript"> /* Google Map */
    jQuery(document).ready(function() {

        /*
         Find the Latitude and Longitude of your address:
         - http://itouchmap.com/latlong.html
         - http://universimmedia.pagesperso-orange.fr/geo/loc.htm
         - http://www.findlatitudeandlongitude.com/find-address-from-latitude-and-longitude/

         Find settings explained:
         - https://github.com/marioestrada/jQuery-gMap

         */

        // Map Markers
        var mapMarkers = [{
            address: "Austin, Texas",
            latitude: 30.26715,
            longitude: -97.74306,
            icon: {
                image: "images/map_marker.png",
                iconsize: [152, 56], // w, h
                iconanchor: [21, 53] // x, y
            }
        }];

        // Map Color Scheme - more styles here http://snazzymaps.com/
        var mapStyles = [
            {
                "featureType": "water",
                "stylers": [
                    {
                        "visibility": "on"
                    },
                    {
                        "color": "#acbcc9"
                    }
                ]
            },
            {
                "featureType": "landscape",
                "stylers": [
                    {
                        "color": "#f2e5d4"
                    }
                ]
            },
            {
                "featureType": "road.highway",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#c5c6c6"
                    }
                ]
            },
            {
                "featureType": "road.arterial",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#e4d7c6"
                    }
                ]
            },
            {
                "featureType": "road.local",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#fbfaf7"
                    }
                ]
            },
            {
                "featureType": "poi.park",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#c5dac6"
                    }
                ]
            },
            {
                "featureType": "administrative",
                "stylers": [
                    {
                        "visibility": "on"
                    },
                    {
                        "lightness": 33
                    }
                ]
            },
            {
                "featureType": "road"
            },
            {
                "featureType": "poi.park",
                "elementType": "labels",
                "stylers": [
                    {
                        "visibility": "on"
                    },
                    {
                        "lightness": 20
                    }
                ]
            },
            {},
            {
                "featureType": "road",
                "stylers": [
                    {
                        "lightness": 20
                    }
                ]
            }
        ];

        // Map Initial Location
        var initLatitude = 30.26715;
        var initLongitude = -97.74306;

        // Map Extended Settings
        var map = jQuery("#map").gMap({
            controls: {
                panControl: true,
                zoomControl: true,
                mapTypeControl: true,
                scaleControl: true,
                streetViewControl: true,
                overviewMapControl: true
            },
            scrollwheel: false,
            markers: mapMarkers,
            latitude: initLatitude,
            longitude: initLongitude,
            zoom: 12,
            style: mapStyles
        });

    });
</script>
<script type="text/javascript">
    var owl;

    $(document).ready(function () {

        owl = $("#single-project");

        owl.owlCarousel({

            navigation: true, // Show next and prev buttons
            slideSpeed: 300,
            paginationSpeed: 400,
            singleItem: true,
            items: 4,
            afterInit: afterOWLinit, // do some work after OWL init
            navigationText: [
                "<i class='icon-angle-left animation'></i>",
                "<i class='icon-angle-right animation'></i>"
            ],
        });




        function afterOWLinit() {

            // adding A to div.owl-page
            $('.owl-controls .owl-page').append('<a class="item-link" href="#"/>');

            var pafinatorsLink = $('.owl-controls .item-link');

            /**
             * this.owl.userItems - it's your HTML <div class="item"><img src="http://www.ow...t of us"></div>
             */
            $.each(this.owl.userItems, function (i) {

                $(pafinatorsLink[i])
                    // i - counter
                    // Give some styles and set background image for pagination item
                    .css({
                        'background': 'url(' + $(this).find('img').attr('src') + ') center center no-repeat',
                        '-webkit-background-size': 'cover',
                        '-moz-background-size': 'cover',
                        '-o-background-size': 'cover',
                        'background-size': 'cover'
                    })
                    // set Custom Event for pagination item
                    .click(function () {
                        owl.trigger('owl.goTo', i);
                    });

            });



            // add Custom PREV NEXT controls
            $('.owl-pagination').prepend('<a href="#prev" class="prev-owl"/>');
            $('.owl-pagination').append('<a href="#next" class="next-owl"/>');


            // set Custom event for NEXT custom control
            $(".next-owl").click(function () {
                owl.trigger('owl.next');
            });

            // set Custom event for PREV custom control
            $(".prev-owl").click(function () {
                owl.trigger('owl.prev');
            });

        }

    });
</script>
<script type="text/javascript">/* OWL Carousel */
    $(document).ready(function() {
        $("#recent-works2-carousel").owlCarousel({

            navigation : true, // Show next and prev buttons
            slideSpeed : 300,
            paginationSpeed : 400,
            singleItem : false,
            pagination : false,
            items : 4,
            navigationText: [
                "<i class='icon-angle-left animation'></i>",
                "<i class='icon-angle-right animation'></i>"
            ],


            // "singleItem:true" is a shortcut for:
            // items : 1,
            // itemsDesktop : false,
            // itemsDesktopSmall : false,
            // itemsTablet: false,
            // itemsMobile : false
        });
    });
</script>

<script type="text/javascript">
    // Circular Progress Bar
    $('.dial').each(function (i, el) {

        var elm = $(el),
            color = elm.attr("data-fgColor"),
            perc = elm.attr("value");

        elm.knob({
            'value': 0,
            'min':0,
            'max':100,
            "skin":"tron",
            "readOnly":true,
            "thickness":.1,
            'dynamicDraw': true,
            "displayInput":false
        });

        $({value: 0}).animate({ value: perc }, {
            duration: 1000,
            easing: 'swing',
            progress: function () {
                elm.val(Math.ceil(this.value)).trigger('change')
            }
        });

        //circular progress bar color
        $(this).append(function() {
            elm.parent().parent().find('.circular-bar-content label').text(perc+'%');
        });

    }); // end each .dial
</script>

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID.
<script>
	(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
	function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
	e=o.createElement(i);r=o.getElementsByTagName(i)[0];
	e.src='//www.google-analytics.com/analytics.js';
	r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
	ga('create','UA-XXXXX-X');ga('send','pageview');
</script>
-->

</body>
</html>
