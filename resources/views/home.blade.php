{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
 --}}

 {{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html> --}}

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
                               <a href="index.html">
                                   <img src="{{asset('text-logo-lg.png')}}" alt="logo">
                               </a>
                           </div>
                       </div>
                       <!-- Start MAinmenu Ares -->
                       <div class="col-md-8 col-lg-8 col-sm-6 col-xs-6">
                           <nav class="mainmenu__nav hidden-xs hidden-sm">
                               <ul class="main__menu">
                                   <li class="drop"><a href="index.html">Home</a></li>
                                   <li class="drop"><a href="{{ route('ruangan') }}">Room</a>
                                       <ul class="dropdown">
                                           <li><a href="portfolio-card-box-2.html">portfolio</a></li>
                                           <li><a href="single-portfolio.html">Single portfolio</a></li>
                                       </ul>
                                   </li>
                                   <li class="drop"><a href="blog.html">Blog</a>
                                       <ul class="dropdown">
                                           <li><a href="blog.html">blog 3 column</a></li>
                                           <li><a href="blog-details.html">Blog details</a></li>
                                       </ul>
                                   </li>
                                   <li class="drop"><a href="shop.html">Portfolio</a>
                                       <ul class="dropdown mega_dropdown">
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
                                       </ul>
                                   </li>
                                   <li><a href="contact.html">contact</a></li>
                               </ul>
                           </nav>
                           <div class="mobile-menu clearfix visible-xs visible-sm">
                               <nav id="mobile_dropdown">
                                   <ul>
                                       <li><a href="index.html">Home</a></li>
                                       <li><a href="#">portfolio</a>
                                           <ul>
                                               <li><a href="portfolio-card-box-2.html">portfolio</a></li>
                                               <li><a href="single-portfolio.html">Single portfolio</a></li>
                                           </ul>
                                       </li>
                                       <li><a href="blog.html">blog</a>
                                           <ul>
                                               <li><a href="blog.html">blog 3 column</a></li>
                                               <li><a href="blog-details.html">Blog details</a></li>
                                           </ul>
                                       </li>
                                       <li><a href="#">pages</a>
                                           <ul>
                                               <li><a href="about.html">about</a></li>
                                               <li><a href="customer-review.html">customer review</a></li>
                                               <li><a href="shop.html">shop</a></li>
                                               <li><a href="shop-sidebar.html">shop sidebar</a></li>
                                               <li><a href="product-details.html">product details</a></li>
                                               <li><a href="cart.html">cart</a></li>
                                               <li><a href="wishlist.html">wishlist</a></li>
                                               <li><a href="checkout.html">checkout</a></li>
                                               <li><a href="team.html">team</a></li>
                                               <li><a href="login-register.html">login & register</a></li>
                                           </ul>
                                       </li>
                                       <li><a href="contact.html">contact</a></li>
                                   </ul>
                               </nav>
                           </div>                          
                       </div>
                       <!-- End MAinmenu Ares -->
                       <div class="col-md-2 col-sm-4 col-xs-3">  
                           <ul class="menu-extra">
                               <li class="search search__open hidden-xs"><span class="ti-search"></span></li>
                               <li class="toggle__menu hidden-xs hidden-sm"><span class="">{{ Auth::user()->name}}</span></li>
                               
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
           <!-- Start Offset MEnu -->
           <div class="offsetmenu">
            <div class="offsetmenu__inner">
                <div class="offsetmenu__close__btn">
                    <a href="#"><i class="zmdi zmdi-close"></i></a>
                </div>
                <div class="off__contact">
                    <div class="logo">
                        <a href="index.html">
                            <img src="images/logo/logo.png" alt="logo">
                        </a>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetu adipisicing elit sed do eiusmod tempor incididunt ut labore.</p>
                </div>
                <ul class="sidebar__thumd">
                    <li><a href="#"><img src="images/sidebar-img/1.jpg" alt="sidebar images"></a></li>
                    <li><a href="#"><img src="images/sidebar-img/2.jpg" alt="sidebar images"></a></li>
                    <li><a href="#"><img src="images/sidebar-img/3.jpg" alt="sidebar images"></a></li>
                    <li><a href="#"><img src="images/sidebar-img/4.jpg" alt="sidebar images"></a></li>
                    <li><a href="#"><img src="images/sidebar-img/5.jpg" alt="sidebar images"></a></li>
                    <li><a href="#"><img src="images/sidebar-img/6.jpg" alt="sidebar images"></a></li>
                    <li><a href="#"><img src="images/sidebar-img/7.jpg" alt="sidebar images"></a></li>
                    <li><a href="#"><img src="images/sidebar-img/8.jpg" alt="sidebar images"></a></li>
                </ul>
                <div class="offset__widget">
                    <div class="offset__single">
                        <h4 class="offset__title">Language</h4>
                        <ul>
                            <li><a href="#"> Engish </a></li>
                            <li><a href="#"> French </a></li>
                            <li><a href="#"> German </a></li>
                        </ul>
                    </div>
                    <div class="offset__single">
                        <h4 class="offset__title">Currencies</h4>
                        <ul>
                            <li><a href="#"> USD : Dollar </a></li>
                            <li><a href="#"> EUR : Euro </a></li>
                            <li><a href="#"> POU : Pound </a></li>
                        </ul>
                    </div>
                </div>
                <div class="offset__sosial__share">
                    <h4 class="offset__title">Follow Us On Social</h4>
                    
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button><a>Logout</a></button>
                    </form>
                    <ul class="off__soaial__link">
                        <li><a class="bg--twitter" href="#"  title="Twitter"><i class="zmdi zmdi-twitter"></i></a></li>
                        
                        <li><a class="bg--instagram" href="#" title="Instagram"><i class="zmdi zmdi-instagram"></i></a></li>

                        <li><a class="bg--facebook" href="#" title="Facebook"><i class="zmdi zmdi-facebook"></i></a></li>

                        <li><a class="bg--googleplus" href="#" title="Google Plus"><i class="zmdi zmdi-google-plus"></i></a></li>

                        <li><a class="bg--google" href="#" title="Google"><i class="zmdi zmdi-google"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Offset MEnu -->
       </div>
       <!-- End Offset Wrapper -->
       <!-- Start Feature Product -->
       <section class="categories-slider-area bg__white">
           <div class="container">
               <div class="row">
                   <!-- Start Left Feature -->
                   <div class="col-md-9 col-lg-9 col-sm-8 col-xs-12 float-left-style">
                       <!-- Start Slider Area -->
                       <div class="slider__container slider--one">
                           <div class="slider__activation__wrap owl-carousel owl-theme">
                               <!-- Start Single Slide -->
                               <div class="slide slider__full--screen slider-height-inherit slider-text-right" style="background: rgba(0, 0, 0, 0) url({{asset('user/images/slider/bg/a.png')}}) no-repeat scroll center center / cover ;">
                                   <div class="container">
                                       <div class="row">
                                           <div class="col-md-10 col-lg-8 col-md-offset-2 col-lg-offset-4 col-sm-12 col-xs-12">
                                               <div class="slider__inner">
                                                   <h1>New Product <span class="text--theme">Collection</span></h1>
                                                   <div class="slider__btn">
                                                       <a class="htc__btn" href="cart.html">shop now</a>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                               <!-- End Single Slide -->
                               <!-- Start Single Slide -->
                               <div class="slide slider__full--screen slider-height-inherit  slider-text-left" style="background: rgba(0, 0, 0, 0) url({{asset('user/images/slider/bg/b.png')}}) no-repeat scroll center center / cover ;">
                                   <div class="container">
                                       <div class="row">
                                           <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                                               <div class="slider__inner">
                                                   <h1>New Product <span class="text--theme">Collection</span></h1>
                                                   <div class="slider__btn">
                                                       <a class="htc__btn" href="cart.html">shop now</a>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                               <!-- End Single Slide -->
                           </div>
                       </div>
                       <!-- Start Slider Area -->
                   </div>
                   <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12 float-right-style">
                       <div class="categories-menu mrg-xs">
                           <div class="category-heading">
                              <h3> Browse Categories</h3>
                           </div>
                           <div class="category-menu-list">
                               <ul>
                                    <li><a href="#"><img alt="" src="{{asset('user/images/icons/thum2.png')}}"> Ballroom <i class="zmdi zmdi-chevron-down"></i></a>
                                    </li>
                                    <li><a href="#"> Meeting</a></li>
                                    <li><a href="#"> Convention</a></li>
                                    <li><a href="#"> Exhibition </a></li>
                                    <li><a href="#"> Seminar</a></li>
                                    <li><a href="#"> Wedding Reception</a></li>
                                    <li><a href="#"><img alt="" src="{{asset('user/images/icons/thum3.png')}}"> Outdoor Venue <i class="zmdi zmdi-chevron-down"></i></a>
                                    </li>
                                    <li><a href="#"> Garden</a></li>
                                    <li><a href="#"> Seashore </a></li>
                                    <li><a href="#"><img alt="" src="{{asset('user/images/icons/thum4.png')}}"> Co-Working <i class="zmdi zmdi-chevron-right"></i></a>
                                    </li>
                                    <li><a href="#"><img alt="" src="{{asset('user/images/icons/thum5.png')}}"> Co-Living <i class="zmdi zmdi-chevron-right"></i></a>
                                    </li>
                               </ul>
                           </div>
                       </div>
                   </div> 
                   <!-- End Left Feature -->
               </div>
           </div>
       </section>
       <!-- End Feature Product -->
       <div class="only-banner ptb--100 bg__white">
           <div class="container">
               <div class="only-banner-img">
                   <a href="shop-sidebar.html"><img src="{{asset('user/images/new-product/c.jpg')}}" alt="new product"></a>
               </div>
           </div>
       </div>
       
       <!-- Start Blog Area -->
       <section class="htc__blog__area bg__white pb--130">
           <div class="container">
               <div class="row">
                   <div class="col-xs-12">
                       <div class="section__title section__title--2 text-center">
                           <h2 class="title__line">Latest News</h2>
                           <p>Berbagai macam acara yang dapat dilaksanakan sesuai dengan gedung yang diinginkan berserta berbagai fasilitas yang dibutuhkan.</p>
                       </div>
                   </div>
               </div>
               <div class="row">
                   <div class="blog__wrap clearfix mt--60 xmt-30">
                       <!-- Start Single Blog -->
                    {{-- <form action="{{ route('welcome') }}" method="GET">
                    {{csrf_field()}}
                    @foreach ($data_blog as $blog)
                       <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                           <div class="blog foo">
                               <div class="blog__inner">
                                   <div class="blog__thumb">
                                       <a href="blog-details.html">
                                           <img src="{{asset('blog/'.$blog->gambar)}}" alt="blog images" height="300">
                                       </a>
                                       <div class="blog__post__time">
                                           <div class="post__time--inner">
                                               <span class="date">14</span>
                                               <span class="month">sep</span>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="blog__hover__info">
                                       <div class="blog__hover__action">
                                           <p class="blog__des"><a href="blog-details.html">{{$blog->judul}}</a></p>
                                           <ul class="bl__meta">
                                               <li>By : <a href="#">{{$blog->penulis}}</a></li>
                                               <li>{{$blog->kategori}}</li>
                                           </ul>
                                           <div class="blog__btn">
                                               <a class="read__more__btn" href="blog-details.html">read more</a>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                       @endforeach
                     </form> --}}
                       <!-- End Single Blog -->
                       {{-- <!-- Start Single Blog -->
                       <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                           <div class="blog foo">
                               <div class="blog__inner">
                                   <div class="blog__thumb">
                                       <a href="blog-details.html">
                                           <img src="{{asset('user/images/blog/blog-img/2.jpg')}}" alt="blog images">
                                       </a>
                                       <div class="blog__post__time">
                                           <div class="post__time--inner">
                                               <span class="date">14</span>
                                               <span class="month">sep</span>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="blog__hover__info">
                                       <div class="blog__hover__action">
                                           <p class="blog__des"><a href="blog-details.html">Lorem ipsum dolor sit consectetu.</a></p>
                                           <ul class="bl__meta">
                                               <li>By :<a href="#">Admin</a></li>
                                               <li>Product</li>
                                           </ul>
                                           <div class="blog__btn">
                                               <a class="read__more__btn" href="blog-details.html">read more</a>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <!-- End Single Blog -->
                       <!-- Start Single Blog -->
                       <div class="col-md-4 col-lg-4 hidden-sm col-xs-12">
                           <div class="blog foo">
                               <div class="blog__inner">
                                   <div class="blog__thumb">
                                       <a href="blog-details.html">
                                           <img src="{{asset('user/images/blog/blog-img/3.jpg')}}" alt="blog images">
                                       </a>
                                       <div class="blog__post__time">
                                           <div class="post__time--inner">
                                               <span class="date">14</span>
                                               <span class="month">sep</span>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="blog__hover__info">
                                       <div class="blog__hover__action">
                                           <p class="blog__des"><a href="blog-details.html">Lorem ipsum dolor sit consectetu.</a></p>
                                           <ul class="bl__meta">
                                               <li>By :<a href="#">Admin</a></li>
                                               <li>Product</li>
                                           </ul>
                                           <div class="blog__btn">
                                               <a class="read__more__btn" href="blog-details.html">read more</a>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div> --}}
                       <!-- End Single Blog -->
                   </div>
               </div>
           </div>
       </section>
       <!-- End Blog Area -->
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
                                       <img src="{{asset('text-logo-vlg.png')}}" alt="footer logo">
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
                                   <li><a href="about.html">About Us</a></li>
                                   <li><a href="contact.html">Contact Us</a></li>
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
                                   <li><a href="index.html">Home</a></li>
                                   <li><a href="shop.html">Product</a></li>
                                   <li><a href="contact.html">Contact Us</a></li>
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
   <!-- QUICKVIEW PRODUCT -->
   <div id="quickview-wrapper">
       <!-- Modal -->
       <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
           <div class="modal-dialog modal__container" role="document">
               <div class="modal-content">
                   <div class="modal-header">
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                   </div>
                   <div class="modal-body">
                       <div class="modal-product">
                           <!-- Start product images -->
                           <div class="product-images">
                               <div class="main-image images">
                                   <img alt="big images" src="images/product/big-img/1.jpg">
                               </div>
                           </div>
                           <!-- end product images -->
                           <div class="product-info">
                               <h1>Simple Fabric Bags</h1>
                               <div class="rating__and__review">
                                   <ul class="rating">
                                       <li><span class="ti-star"></span></li>
                                       <li><span class="ti-star"></span></li>
                                       <li><span class="ti-star"></span></li>
                                       <li><span class="ti-star"></span></li>
                                       <li><span class="ti-star"></span></li>
                                   </ul>
                                   <div class="review">
                                       <a href="#">4 customer reviews</a>
                                   </div>
                               </div>
                               <div class="price-box-3">
                                   <div class="s-price-box">
                                       <span class="new-price">$17.20</span>
                                       <span class="old-price">$45.00</span>
                                   </div>
                               </div>
                               <div class="quick-desc">
                                   Designed for simplicity and made from high quality materials. Its sleek geometry and material combinations creates a modern look.
                               </div>
                               <div class="select__color">
                                   <h2>Select color</h2>
                                   <ul class="color__list">
                                       <li class="red"><a title="Red" href="#">Red</a></li>
                                       <li class="gold"><a title="Gold" href="#">Gold</a></li>
                                       <li class="orange"><a title="Orange" href="#">Orange</a></li>
                                       <li class="orange"><a title="Orange" href="#">Orange</a></li>
                                   </ul>
                               </div>
                               <div class="select__size">
                                   <h2>Select size</h2>
                                   <ul class="color__list">
                                       <li class="l__size"><a title="L" href="#">L</a></li>
                                       <li class="m__size"><a title="M" href="#">M</a></li>
                                       <li class="s__size"><a title="S" href="#">S</a></li>
                                       <li class="xl__size"><a title="XL" href="#">XL</a></li>
                                       <li class="xxl__size"><a title="XXL" href="#">XXL</a></li>
                                   </ul>
                               </div>
                               <div class="social-sharing">
                                   <div class="widget widget_socialsharing_widget">
                                       <h3 class="widget-title-modal">Share this product</h3>
                                       <ul class="social-icons">
                                           <li><a target="_blank" title="rss" href="#" class="rss social-icon"><i class="zmdi zmdi-rss"></i></a></li>
                                           <li><a target="_blank" title="Linkedin" href="#" class="linkedin social-icon"><i class="zmdi zmdi-linkedin"></i></a></li>
                                           <li><a target="_blank" title="Pinterest" href="#" class="pinterest social-icon"><i class="zmdi zmdi-pinterest"></i></a></li>
                                           <li><a target="_blank" title="Tumblr" href="#" class="tumblr social-icon"><i class="zmdi zmdi-tumblr"></i></a></li>
                                           <li><a target="_blank" title="Pinterest" href="#" class="pinterest social-icon"><i class="zmdi zmdi-pinterest"></i></a></li>
                                       </ul>
                                   </div>
                               </div>
                               <div class="addtocart-btn">
                                   <a href="#">Add to cart</a>
                               </div>
                           </div><!-- .product-info -->
                       </div><!-- .modal-product -->
                   </div><!-- .modal-body -->
               </div><!-- .modal-content -->
           </div><!-- .modal-dialog -->
       </div>
       <!-- END Modal -->
   </div>
   <!-- END QUICKVIEW PRODUCT -->
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
<!-- Main js file that contents all jQuery plugins activation. -->
<script src="{{asset('user/js/main.js')}}"></script>

</body>

</html>

