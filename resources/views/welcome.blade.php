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

@extends('layouts.masterfront')
@section('content')
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
                                                       <a class="htc__btn" href="{{ route('ruangan') }}">shop now</a>
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
                                                       <a class="htc__btn" href="{{ route('ruangan') }}">shop now</a>
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
     
    <!-- Start Our Product Area -->
    <div class="only-banner ptb--100 bg__white">
        <div class="container">
            <div class="only-banner-img">
                <a href="shop-sidebar.html"><img src="{{asset('user/images/new-product/c.jpg')}}" alt="new product"></a>
            </div>
        </div>
    
     <!-- Start Our Product Area -->
     {{-- <section class="htc__product__area shop__page ptb--130 bg__white"> --}}
        <div class="container">
            <div class="htc__product__container">
                <!-- Start Product MEnu -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="filter__menu__container">
                            <div class="product__menu">
                                <h2></h2>
                            </div>
                            <div class="filter__box">
                                <a class="filter__menu"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Product MEnu -->
                <div class="row">
                    <div class="product__list another-product-style">
                        <!-- Start Single Product -->
                        <form action="{{ route('ruangan') }}" method="GET">
                            {{csrf_field()}}
                            @foreach ($data_ruangan as $ruangan)
                                <div class="col-md-3 single__pro col-lg-3 cat--1 col-sm-4 col-xs-12">
                                    <div class="product foo">
                                        <div class="product__inner">
                                            <div class="pro__thumb">
                                                <a href="{{ route('room.detail', $ruangan->id_ruangan) }}">
                                                    <img src="{{asset('storage/'.$ruangan->foto)}}" alt="product images">
                                                </a>
                                            </div>
                                            <div class="product__hover__info">
                                                <ul class="product__action">
                                                    <li><a title="See Room" href="{{ route('room.detail', $ruangan->id_ruangan) }}"><span class="ti-eye"></span></a></li>
                                                    <li><a title="Apply for Rent" href="{{ route('tender', $ruangan->id_ruangan) }}"><span class="ti-shopping-cart"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product__details">
                                            <h2><a href="{{ route('room.detail', $ruangan->id_ruangan) }}">{{$ruangan->nama_ruangan}}</a></h2>
                                            <ul class="product__price">
                                                <li class="new__price">Rp. {{number_format($ruangan->harga)}}</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </form>
                        <!-- End Single Product -->
                    </div>
                </div>
                <!-- Start Load More BTn -->
                <div class="row mt--60">
                    <div class="col-md-12">
                        <div class="htc__loadmore__btn">
                            <a href="{{route('ruangan')}}">load more</a>
                        </div>
                    </div>
                </div>
                <!-- End Load More BTn -->
            </div>
        </div>
    </div>
    {{-- </section> --}}
    <!-- End Our Product Area -->
       <!-- Start Blog Area -->
       <section class="htc__blog__area bg__white pb--130">
           <div class="container">
               <div class="row">
                   <div class="col-xs-12">
                       <div class="section__title section__title--2 text-center">
                           <h2 class="title__line">Latest News</h2>
                           <p>Various kinds of events that can be carried out in accordance with the desired building along with various facilities needed.</p>
                       </div>
                   </div>
               </div>
               <div class="row">
                   <div class="blog__wrap clearfix mt--60 xmt-30">
                       <!-- Start Single Blog -->
                    <form action="{{ route('welcome') }}" method="GET">
                    {{csrf_field()}}
                    @foreach ($data_blog as $blog)
                       <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                           <div class="blog foo">
                               <div class="blog__inner">
                                   <div class="blog__thumb">
                                       <a href="{{ route('blog.detail', $blog->id) }}">
                                           <img src="{{asset('storage/'.$blog->gambar)}}" alt="blog images" height="220">
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
                                           <p class="blog__des"><a>{{$blog->judul}}</a></p>
                                           <ul class="bl__meta">
                                               <li>By : <a>{{$blog->penulis}}</a></li>
                                               <li>{{$blog->kategori}}</li>
                                           </ul>
                                           <div class="blog__btn">
                                               <a class="read__more__btn" href="{{ route('blog.detail', $blog->id) }}">read more</a>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                       @endforeach
                     </form>
                       <!-- End Single Blog -->
                   </div>
               </div>
           </div>
       </section>
       <!-- End Blog Area -->
 @endsection    