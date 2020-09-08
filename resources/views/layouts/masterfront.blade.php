<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Arcade</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('logo.png')}}">
    <link rel="apple-touch-icon" href="{{asset('user/apple-touch-icon.png')}}">
    
     
    <!-- All css files are included here. -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="{{asset('user/css/bootstrap.min.css')}}">
    <!-- Owl Carousel main css -->
    <link rel="stylesheet" href="{{asset('user/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('user/css/owl.theme.default.min.css')}}">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="{{asset('user/css/core.css')}}">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="{{asset('user/css/shortcode/shortcodes.css')}}">
    <!-- Theme main style -->
    <link rel="stylesheet" href="{{asset('user/style.css')}}">
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{asset('user/css/responsive.css')}}">
    <!-- User style -->
    <link rel="stylesheet" href="{{asset('user/css/custom.css')}}">
    <!-- Date Picker -->
    <link rel="stylesheet" href="{{asset('assets\air-datepicker\dist\css\datepicker.css')}}">
        
    <!-- Modernizr JS -->
    <script src="{{asset('user/js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>

<body>
   <!--[if lt IE 8]>
       <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
   <![endif]-->  

   <!-- Body main wrapper start -->
   <div class="wrapper fixed__footer">
       <!-- Start Header Style -->
       <header id="header" class="htc-header header--3 bg__white">
           <!-- Start Mainmenu Area -->
           <div id="sticky-header-with-topbar" class="mainmenu__area sticky__header">
               <div class="container">
                   <div class="row">
                       <div class="col-md-2 col-lg-2 col-sm-3 col-xs-3">
                           <div class="logo">
                               <a href="/">
                                   <img src="{{asset('text-logo-lg.png')}}" alt="logo">
                               </a>
                           </div>
                       </div>
                       <!-- Start MAinmenu Ares -->
                       <div class="col-md-8 col-lg-8 col-sm-6 col-xs-6">
                           <nav class="mainmenu__nav hidden-xs hidden-sm">
                               <ul class="main__menu">
                                   <li class="drop"><a href="/">Home</a></li>
                                   <li class="drop"><a href="{{ route('ruangan') }}">Room</a>
                                   </li>
                                   <li class="drop"><a href="{{ route('blogs') }}">Blog</a>
                                   </li>
                                   <li class="drop"><a href="{{ route('portfolios') }}">Portfolio</a>
                                       {{-- <ul class="dropdown mega_dropdown">
                                           <!-- Start Single Mega MEnu -->
                                           <li><a class="mega__title" href="shop.html">shop layout</a>
                                               <ul class="mega__item">
                                                   <li><a href="shop.html">default shop</a></li>
                                               </ul>
                                           </li>
                                           <!-- End Single Mega MEnu -->
                                           <!-- Start Single Mega MEnu -->
                                           <li><a class="mega__title" href="shop.html">product details layout</a>
                                               <ul class="mega__item">
                                                   <li><a href="product-details.html">tab style 1</a></li></li>
                                               </ul>
                                           </li>
                                           <!-- End Single Mega MEnu -->
                                           <!-- Start Single Mega MEnu -->
                                           <li>
                                               <ul class="mega__item">
                                                   <li>
                                                       <div class="mega-item-img">
                                                           <a href="shop.html">
                                                               <img src="{{asset('user/images/feature-img/3.png')}}" alt="">
                                                           </a>
                                                       </div>
                                                   </li>
                                               </ul>
                                           </li>
                                           <!-- End Single Mega MEnu -->
                                       </ul> --}}
                                   </li>
                                   <li><a href="{{ route('contactus') }}">contact</a></li>
                               </ul>
                           </nav>
                           <div class="mobile-menu clearfix visible-xs visible-sm">
                               <nav id="mobile_dropdown">
                                   <ul>
                                       <li><a href="/">Home</a></li>
                                       <li><a href="{{ route('ruangan') }}">Room</a>
                                       </li>
                                       <li><a href="{{ route('blogs') }}">Blog</a>
                                       </li>
                                       <li><a href="{{ route('portfolios') }}">Portfolio</a>
                                       </li>
                                       <li><a href="{{ route('contactus') }}">contact</a></li>
                                   </ul>
                               </nav>
                           </div>                          
                       </div>
                       <!-- End MAinmenu Ares -->
                       <div class="col-md-2 col-sm-4 col-xs-3">  
                           <ul class="menu-extra">
                               <li class="search search__open hidden-xs"><span class="ti-search"></span></li>
                               @if (Auth::guest())
                                   <li><a href="{{('login')}}">Login</a></li>
                               @else
                                    <li class="toggle__menu hidden-xs hidden-sm"><span class="">{{ Auth::user()->name}}</span></li>
                               @endif
                               
                           </ul>
                       </div>
                   </div>
                   <div class="mobile-menu-area"></div>
               </div>
           </div>
           <!-- End Mainmenu Area -->
       </header>
       <!-- End Header Style -->
       
       <div class="body__overlay"></div>
       <!-- Start Offset Wrapper -->
       <div class="offset__wrapper">
           <!-- Start Search Popap -->
           <div class="search__area">
               <div class="container" >
                   <div class="row" >
                       <div class="col-md-12" >
                           <div class="search__inner">
                               <form action="#" method="get">
                                   <input placeholder="Search here... " type="text">
                                   <button type="submit"></button>
                               </form>
                               <div class="search__close__btn">
                                   <span class="search__close__btn_icon"><i class="zmdi zmdi-close"></i></span>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
           <!-- End Search Popap -->
            @if (Auth::user())
            <!-- Start Offset MEnu -->
                <div class="offsetmenu">
                    <div class="offsetmenu__inner">
                        <div class="offsetmenu__close__btn">
                            <a href="#"><i class="zmdi zmdi-close"></i></a>
                        </div>
                        <div class="off__contact">
                            <div class="logo">
                                <a>
                                    <img src="{{asset('text-logo-lg.png')}}" alt="logo">
                                </a>
                            </div><br>
                            <p><img src="{{ Auth::user()->getProfile() }}" alt="Circle Image" class="img-circle" width="150"></p>
                            {{-- <p><img src="{{asset('user/images/sidebar-img/1.jpg')}}" alt="sidebar images" width="150"></p> --}}
                            <p>{{ Auth::user()->name .' '. Auth::user()->lastname }}</p>
                            <p>{{ Auth::user()->email }}</p>
                            <hr>
                            <p><a href="{{ route('profile.confirm', Auth::user()->id) }}">Activity</a></p>
                            <hr>
                            <p><a href="{{ route('profile.edit', Auth::user()->id) }}">Setting</a></p>
                            <hr>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <p><button>Logout</button></p>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- End Offset MEnu -->
            @endif
       </div>
       <!-- End Offset Wrapper -->

       @yield('content')

       <!-- Start Footer Area -->
       <footer class="htc__foooter__area gray-bg">
        <div class="container">
            <div class="row">
                <div class="footer__container clearfix">
                     <!-- Start Single Footer Widget -->
                    <div class="col-md-3 col-lg-3 col-sm-6">
                        <div class="ft__widget">
                            <div class="ft__logo">
                                <a href="index.html">
                                    <img src="{{asset('text-logo-lg.png')}}" alt="footer logo">
                                </a>
                            </div>
                            <div class="footer-address">
                                <ul>
                                    <li>
                                        <div class="address-icon">
                                            <i class="zmdi zmdi-pin"></i>
                                        </div>
                                        <div class="address-text">
                                            <p>Jalan Hayam Wuruk No 189<br>Denpasar Timur, Bali</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="address-icon">
                                            <i class="zmdi zmdi-email"></i>
                                        </div>
                                        <div class="address-text">
                                            <a href="#"> info@arcade.com</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="address-icon">
                                            <i class="zmdi zmdi-phone-in-talk"></i>
                                        </div>
                                        <div class="address-text">
                                            <p>+628 3451 6178 1102 </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <ul class="social__icon">
                                <li><a href="#"><i class="zmdi zmdi-twitter"></i></a></li>
                                <li><a href="#"><i class="zmdi zmdi-instagram"></i></a></li>
                                <li><a href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                <li><a href="#"><i class="zmdi zmdi-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Single Footer Widget -->
                    <!-- Start Single Footer Widget -->
                    <div class="col-md-3 col-lg-2 col-sm-6 smt-30 xmt-30">
                        <div class="ft__widget">
                            <h2 class="ft__title">Categories</h2>
                            <ul class="footer-categories">
                                 <li><a href="shop-sidebar.html">Outdoor Venue</a></li>
                                 <li><a href="shop-sidebar.html">Meeting Room</a></li>
                                 <li><a href="shop-sidebar.html">Indoor Venue</a></li>
                                 <li><a href="shop-sidebar.html">Co-Working</a></li>
                                 <li><a href="shop-sidebar.html">Co-Living</a></li>
                                 <li><a href="shop-sidebar.html">Ballroom</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Start Single Footer Widget -->
                    <div class="col-md-3 col-lg-2 col-sm-6 smt-30 xmt-30">
                        <div class="ft__widget">
                            <h2 class="ft__title">Infomation</h2>
                            <ul class="footer-categories">
                                <li><a href="{{ route('aboutus') }}">About Us</a></li>
                                <li><a href="{{ route('contactus') }}">Contact Us</a></li>
                                <li><a href="#">Facility</a></li>
                                <li><a href="#">Exchanges</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Start Single Footer Widget -->
                    <div class="col-md-3 col-lg-3 col-lg-offset-1 col-sm-6 smt-30 xmt-30">
                        <div class="ft__widget">
                            <h2 class="ft__title">Newsletter</h2>
                            <div class="newsletter__form">
                                <p>Subscribe to our newsletter and get newst information.</p>
                                <div class="input__box">
                                    <div id="mc_embed_signup">
                                        <form action="#" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                            <div id="mc_embed_signup_scroll" class="htc__news__inner">
                                                <div class="news__input">
                                                    <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Email Address" required>
                                                </div>
                                                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                                <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value=""></div>
                                                <div class="clearfix subscribe__btn"><input type="submit" value="Send" name="subscribe" id="mc-embedded-subscribe" class="bst__btn btn--white__color">
                                                    
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>        
                            </div>
                        </div>
                    </div>
                    <!-- End Single Footer Widget -->
                </div>
            </div>
            <!-- Start Copyright Area -->
            <div class="htc__copyright__area">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="copyright__inner">
                            <div class="copyright">
                             <p>© 2020 <a href="#">Powered By Tmart</a>
                                 All Right Reserved.</p>
                            </div>
                            <ul class="footer__menu">
                                <li><a href="/">Home</a></li>
                                <li><a href="{{ route('ruangan') }}">Product</a></li>
                                <li><a href="{{ route('contactus') }}">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Copyright Area -->
        </div>
    </footer>
    <!-- End Footer Area -->
</div>
<!-- Body main wrapper end -->

<!-- Placed js at the end of the document so the pages load faster -->

<!-- jquery latest version -->
<script src="{{asset('user/js/vendor/jquery-1.12.0.min.js')}}"></script>
<!-- Bootstrap framework js -->
<script src="{{asset('user/js/bootstrap.min.js')}}"></script>
<!-- All js plugins included in this file. -->
<script src="{{asset('user/js/plugins.js')}}"></script>
<script src="{{asset('user/js/slick.min.js')}}"></script>
<script src="{{asset('user/js/owl.carousel.min.js')}}"></script>
<!-- Waypoints.min.js. -->
<script src="{{asset('user/js/waypoints.min.js')}}"></script>


<script src="{{asset('assets\air-datepicker\dist\js\datepicker.js')}}"></script>
<script src="{{asset('assets\air-datepicker\dist\js\i18n\datepicker.en.js')}}"></script>
<!-- Main js file that contents all jQuery plugins activation. -->
<script src="{{asset('user/js/main.js')}}"></script>
<!-- Google Map js -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBmGmeot5jcjdaJTvfCmQPfzeoG_pABeWo"></script>
<script>
    // When the window has finished loading create our google map below
    google.maps.event.addDomListener(window, 'load', init);

    function init() {
        // Basic options for a simple Google Map
        // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
        var mapOptions = {
            // How zoomed in you want the map to start at (always required)
            zoom: 12,

            scrollwheel: false,

            // The latitude and longitude to center the map (always required)
            center: new google.maps.LatLng(23.7286, 90.3854), // New York

            // How you would like to style the map. 
            // This is where you would paste any style found on Snazzy Maps.
             styles: [


{
    "featureType": "administrative",
    "elementType": "all",
    "stylers": [
        {
            "hue": "#ff0000"
        }
    ]
},
{
    "featureType": "administrative",
    "elementType": "geometry",
    "stylers": [
        {
            "color": "#888888"
        }
    ]
},
{
    "featureType": "administrative",
    "elementType": "geometry.fill",
    "stylers": [
        {
            "hue": "#ff0000"
        }
    ]
},
{
    "featureType": "administrative",
    "elementType": "labels.text",
    "stylers": [
        {
            "color": "#6e6e6e"
        },
        {
            "visibility": "simplified"
        }
    ]
},
{
    "featureType": "administrative.country",
    "elementType": "geometry",
    "stylers": [
        {
            "color": "#6f6b6b"
        }
    ]
},
{
    "featureType": "landscape",
    "elementType": "labels.text",
    "stylers": [
        {
            "color": "#c5c5c5"
        }
    ]
},
{
    "featureType": "landscape.natural",
    "elementType": "geometry",
    "stylers": [
        {
            "color": "#cfcfcf"
        }
    ]
},
{
    "featureType": "landscape.natural.landcover",
    "elementType": "all",
    "stylers": [
        {
            "hue": "#ff0000"
        }
    ]
},
{
    "featureType": "landscape.natural.landcover",
    "elementType": "geometry",
    "stylers": [
        {
            "hue": "#ff0000"
        }
    ]
},
{
    "featureType": "poi",
    "elementType": "all",
    "stylers": [
        {
            "visibility": "off"
        }
    ]
},
{
    "featureType": "poi",
    "elementType": "labels.text",
    "stylers": [
        {
            "visibility": "off"
        },
        {
            "color": "#909090"
        }
    ]
},
{
    "featureType": "poi",
    "elementType": "labels.icon",
    "stylers": [
        {
            "visibility": "off"
        }
    ]
},
{
    "featureType": "poi.medical",
    "elementType": "geometry",
    "stylers": [
        {
            "color": "#e5e5e5"
        }
    ]
},
{
    "featureType": "poi.park",
    "elementType": "geometry",
    "stylers": [
        {
            "color": "#e5e5e5"
        }
    ]
},
{
    "featureType": "poi.place_of_worship",
    "elementType": "geometry",
    "stylers": [
        {
            "color": "#ff0000"
        }
    ]
},
{
    "featureType": "poi.sports_complex",
    "elementType": "geometry",
    "stylers": [
        {
            "color": "#f7f7f7"
        }
    ]
},
{
    "featureType": "road",
    "elementType": "geometry.fill",
    "stylers": [
        {
            "color": "#ffffff"
        }
    ]
},
{
    "featureType": "road",
    "elementType": "geometry.stroke",
    "stylers": [
        {
            "gamma": 7.18
        }
    ]
},
{
    "featureType": "road",
    "elementType": "labels.icon",
    "stylers": [
        {
            "visibility": "off"
        }
    ]
},
{
    "featureType": "road.local",
    "elementType": "labels.text",
    "stylers": [
        {
            "visibility": "simplified"
        }
    ]
},
{
    "featureType": "transit.line",
    "elementType": "geometry",
    "stylers": [
        {
            "gamma": 0.48
        }
    ]
},
{
    "featureType": "transit.station",
    "elementType": "labels.icon",
    "stylers": [
        {
            "visibility": "off"
        }
    ]
},
{
    "featureType": "water",
    "elementType": "all",
    "stylers": [
        {
            "color": "#bcbcbc"
        },
        {
            "visibility": "on"
        }
    ]
},
{
    "featureType": "water",
    "elementType": "labels.text.fill",
    "stylers": [
        {
            "color": "#ffffff"
        }
    ]
}
]
        };

        // Get the HTML DOM element that will contain your map 
        // We are using a div with id="map" seen below in the <body>
        var mapElement = document.getElementById('googleMap');

        // Create the Google Map using our element and options defined above
        var map = new google.maps.Map(mapElement, mapOptions);

        // Let's also add a marker while we're at it
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(23.7286, 90.3854),
            map: map,
            title: 'Tasfiu!',
            icon: '{{asset('user/images/icons/map.png')}}',
            animation:google.maps.Animation.BOUNCE

        });
    }
</script>

</body>

</html>

