@extends('layouts.masterfront')
@section('content')
<!-- Start Bradcaump area -->
<div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url({{asset('user/images/bg/2.jpg')}}) no-repeat scroll center center / cover ;">
    <div class="ht__bradcaump__wrap">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="bradcaump__inner text-center">
                        <h2 class="bradcaump-title">Blogs</h2>
                        <nav class="bradcaump-inner">
                          <a class="breadcrumb-item">Every Our History</a>
                          {{-- <span class="brd-separetor">/</span>
                          <span class="breadcrumb-item active">Blog</span> --}}
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Bradcaump area -->
<!-- Start BLog Area -->
<div class="htc__blog__area bg__white ptb--120">
    <div class="container">
        <div class="row">
            <div class="blog__wrap blog--page clearfix">
                <!-- Start Single Blog --> 
                <form action="{{ route('blogs') }}" method="GET">
                {{csrf_field()}}
                @foreach ($blog as $blog)
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="blog foo">
                        <div class="blog__inner">
                            <div class="blog__thumb">
                                <a href="blog-details.html">
                                    <img src="{{ asset('storage/' . $blog->gambar) }}" alt="blog images">
                                </a>
                                {{-- <div class="blog__post__time">
                                    <div class="post__time--inner">
                                        <span class="date">14</span>
                                        <span class="month">sep</span>
                                    </div>
                                </div> --}}
                            </div>
                            <div class="blog__hover__info">
                                <div class="blog__hover__action">
                                    <p class="blog__des"><a href="{{ route('blog.detail', $blog->id) }}">{{$blog->judul}}</a></p>
                                    <ul class="bl__meta">
                                        <li>By :<a>{{$blog->penulis}}</a></li>
                                        <li>{{$blog->kategori}}</li>
                                                {{-- @php
                                                    $cats = explode(',' , $blog->kategori);
                                                @endphp
                                                @foreach($cats as $dA)
                                                    <li>
                                                        <a href="#">{{$dA}}</a>
                                                    </li>
                                                @endforeach --}}
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
        <!-- Start Load More BTn -->
        {{-- <div class="row mt--60">
            <div class="col-md-12">
                <div class="htc__loadmore__btn">
                    <a href="#">load more</a>
                </div>
            </div>
        </div> --}}
        <!-- End Load More BTn -->
    </div>
</div>
<!-- End BLog Area -->
@endsection