@extends('layouts.masterfront')
@section('content')
    <!-- Start Bradcaump area -->
    <div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url({{asset('user/images/bg/2.jpg')}}) no-repeat scroll center center / cover ;">
        <div class="ht__bradcaump__wrap">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="bradcaump__inner text-center">
                            <h2 class="bradcaump-title">
                                Blog Details
                            </h2>
                            <nav class="bradcaump-inner">
                              <a class="breadcrumb-item">Home</a>
                              <span class="brd-separetor">/</span>
                              <span class="breadcrumb-item active">Blog Details</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bradcaump area -->
    <!-- Start Our Blog Area -->
    <section class="blog-details-wrap ptb--120 bg__white">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                    <div class="blog-details-left-sidebar">
                        <div class="blog-details-top">
                            <!--Start Blog Thumb -->
                            <div class="blog-details-thumb-wrap">
                                <div class="blog-details-thumb">
                                    <img src="{{asset('storage/'.$blog->gambar)}}" alt="blog images">
                                </div>
                                <div class="upcoming-date">
                                    14<span class="upc-mth">Sep, 2020</span>
                                </div>
                            </div>
                            <!--End Blog Thumb -->
                            <h2>{{$blog->judul}}</h2>
                            <div class="blog-admin-and-comment">
                                <p>BY : <a>{{$blog->penulis}}</a></p>
                                {{-- <p class="separator">|</p>
                                <p>{{$blog->id}}</p> --}}
                            </div>
                            <!-- Start Blog Pra -->
                            <div class="blog-details-pra">
                                <p>{{$blog->deskripsi}}</p>
                                <blockquote>Location :<br>{{$blog->lokasi}}</blockquote>
                            </div>
                            <!-- End Blog Pra -->
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 smt-30 xmt-40">
                    <div class="blod-details-right-sidebar">
                        <div class="category-search-area">
                            {{-- <input placeholder="Search......" type="text">
                            <a class="srch-btn" href="#"><i class="zmdi zmdi-search"></i></a>  --}}
                            <!-- Start Tag -->
                        
                            <h2 class="section-title-2">TAGS</h2>
                            <ul class="tag-menu mt-40">
                                <form action="">
                                    {{csrf_field()}}
                                        @php
                                            $cats = explode(',' , $blog->kategori);
                                        @endphp
                                        @foreach($cats as $dA)
                                            <li>
                                                <a href="#">{{$dA}}</a>
                                            </li>
                                        @endforeach
                                </form>
                            </ul>
                        
                        <!-- End Tag -->   
                        </div>
                        <!-- Start Category Area -->
                        <div class="our-category-area mt--60">
                            <h2 class="section-title-2">CATEGORY</h2>
                            <ul class="categore-menu">
                                <li><a href="{{ route('blogs') }}"><i class="zmdi zmdi-caret-right"></i>WORKSHOP<span></span></a></li>
                                <li><a href="{{ route('blogs') }}"><i class="zmdi zmdi-caret-right"></i>WEDDING <span></span></a></li>
                                <li><a href="{{ route('blogs') }}"><i class="zmdi zmdi-caret-right"></i>COWORKING <span></span></a></li>
                                <li><a href="{{ route('blogs') }}"><i class="zmdi zmdi-caret-right"></i>COLIVING <span></span></a></li>
                                <li><a href="{{ route('blogs') }}"><i class="zmdi zmdi-caret-right"></i>MEETING <span></span></a></li>
                            </ul>
                        </div>
                        <!-- End Category Area -->
                        <!-- Start Letaest Blog Area -->
                        {{-- <div class="our-recent-post mt--60">
                            <h2 class="section-title-2">LATEST POST</h2>
                            <div class="our-recent-post-wrap">
                                <!-- Start Single Post -->
                                <div class="single-recent-post">
                                    <div class="recent-thumb">
                                        <a href="blog-details.html"><img src="images/blog/sm-img/1.jpg" alt="post images"></a>
                                    </div>
                                    <div class="recent-details">
                                        <div class="recent-post-dtl">
                                            <h6><a href="blog-details.html">Lorem ipsum dolor sit amet, consectetu adipisicing elit, sed do.</a></h6>
                                        </div>
                                        <div class="recent-post-time">
                                            <p>14 SEP 2017</p>
                                            <p class="separator">|</p>
                                            <p>5 : 00 PM</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Post -->
                                <!-- Start Single Post -->
                                <div class="single-recent-post">
                                    <div class="recent-thumb">
                                        <a href="blog-details.html"><img src="images/blog/sm-img/2.jpg" alt="post images"></a>
                                    </div>
                                    <div class="recent-details">
                                        <div class="recent-post-dtl">
                                            <h6><a href="blog-details.html">Lorem ipsum dolor sit amet, consectetu adipisicing elit, sed do.</a></h6>
                                        </div>
                                        <div class="recent-post-time">
                                            <p>14 SEP 2017</p>
                                            <p class="separator">|</p>
                                            <p>5 : 00 PM</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Post -->
                                <!-- Start Single Post -->
                                <div class="single-recent-post">
                                    <div class="recent-thumb">
                                        <a href="blog-details.html"><img src="images/blog/sm-img/3.jpg" alt="post images"></a>
                                    </div>
                                    <div class="recent-details">
                                        <div class="recent-post-dtl">
                                            <h6><a href="blog-details.html">Lorem ipsum dolor sit amet, consectetu adipisicing elit, sed do.</a></h6>
                                        </div>
                                        <div class="recent-post-time">
                                            <p>14 SEP 2017</p>
                                            <p class="separator">|</p>
                                            <p>5 : 00 PM</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Post -->
                            </div>
                        </div> --}}
                        <!-- End Letaest Blog Area -->
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Our Blog Area -->  

@endsection   