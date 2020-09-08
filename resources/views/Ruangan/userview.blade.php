
@extends('layouts.masterfront')
@section('content')
 <!-- Start Our Product Area -->
 <div class="only-banner ptb--100 bg__white">
    <div class="container">
        <div class="only-banner-img">
            <a href="shop-sidebar.html"><img src="{{asset('user/images/new-product/c.jpg')}}" alt="new product"></a>
        </div>
    </div>
</div>
<!-- Start Our Product Area -->
<section class="htc__product__area bg__white">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-style-tab">
                    <div class="product-tab-list">
                        <!-- Nav tabs -->
                        <ul class="tab-style product-tab-list-btn" role="tablist">
                            <li>
                                <a data-toggle="tab">
                                    <div class="tab-menu-text">
                                        <h4>Meeting </h4>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab">
                                    <div class="tab-menu-text">
                                        <h4>Convention</h4>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab">
                                    <div class="tab-menu-text">
                                        <h4>Exhibition</h4>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab">
                                    <div class="tab-menu-text">
                                        <h4>Seminar</h4>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab">
                                    <div class="tab-menu-text">
                                        <h4>Wedding Reception</h4>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <div class="all-product-btn">
                            <a href="{{ route('ruangan') }}">all</a>
                        </div>
                    </div>
                    <div class="tab-content another-product-style jump">
                        <div class="tab-pane active" id="home1">
                            <div class="row">
                                {{-- <div class="product-slider-active owl-carousel"> --}}
                                <form action="{{ route('ruangan') }}" method="GET">
                                    {{csrf_field()}}
                                    @foreach ($data_ruangan as $ruangan)
                                        @if ($ruangan->kategori_id_kategori == 1|| $ruangan->kategori_id_kategori == 4|| $ruangan->kategori_id_kategori == 5)
                                            <div class="col-md-3 single__pro col-lg-3 cat--1 col-sm-3 col-xs-12">
                                            <div class="product">
                                                <div class="product__inner">
                                                    <div class="pro__thumb">
                                                        <a href="{{ route('room.detail', $ruangan->id_ruangan) }}">
                                                            <img src="{{asset('storage/'.$ruangan->foto)}}" alt="product images">
                                                        </a>
                                                    </div>
                                                    <div class="product__hover__info">
                                                        <ul class="product__action">
                                                            <li><a title="Lihat Ruangan" href="{{ route('room.detail', $ruangan->id_ruangan) }}"><span class="ti-eye"></span></a></li>
                                                            <li><a title="Ajukan Penyewaan" href="{{ route('tender', $ruangan->id_ruangan) }}"><span class="ti-shopping-cart"></span></a></li>
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
                                        @endif
                                    @endforeach
                                </form>
                                {{-- </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Our Product Area -->
<!-- Start Our Product Area -->
<div class="only-banner ptb--100 bg__white">
    <div class="container">
        <div class="only-banner-img">
            <a href="shop-sidebar.html"><img src="{{asset('user/images/new-product/c.jpg')}}" alt="new product"></a>
        </div>
    </div>
</div>
<!-- Start Our Product Area -->
<section class="htc__product__area bg__white">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-style-tab">
                    <div class="product-tab-list">
                        <!-- Nav tabs -->
                        <ul class="tab-style product-tab-list-btn" role="tablist">
                            <li>
                                <a data-toggle="tab">
                                    <div class="tab-menu-text">
                                        <h4>Garden </h4>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab">
                                    <div class="tab-menu-text">
                                        <h4>Seashore</h4>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <div class="all-product-btn">
                            <a href="{{ route('ruangan') }}">all</a>
                        </div>
                    </div>
                    <div class="tab-content another-product-style jump">
                        <div class="tab-pane active" id="home1">
                            <div class="row">
                                {{-- <div class="product-slider-active owl-carousel"> --}}
                                <form action="{{ route('ruangan') }}" method="GET">
                                    {{csrf_field()}}
                                    @foreach ($data_ruangan as $ruangan)
                                        @if ($ruangan->kategori_id_kategori == 3)
                                            <div class="col-md-3 single__pro col-lg-3 cat--1 col-sm-3 col-xs-12">
                                            <div class="product">
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
                                        @endif
                                    @endforeach
                                </form>
                                {{-- </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Our Product Area -->
 <!-- Start Our Product Area -->
 <div class="only-banner ptb--100 bg__white">
    <div class="container">
        <div class="only-banner-img">
            <a href="shop-sidebar.html"><img src="{{asset('user/images/new-product/c.jpg')}}" alt="new product"></a>
        </div>
    </div>
</div>
<!-- Start Our Product Area -->
<section class="htc__product__area bg__white">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-style-tab">
                    <div class="product-tab-list">
                        <!-- Nav tabs -->
                        <ul class="tab-style product-tab-list-btn" role="tablist">
                            <li>
                                <a data-toggle="tab">
                                    <div class="tab-menu-text">
                                        <h4>Co-working </h4>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <div class="all-product-btn">
                            <a href="{{ route('ruangan') }}">all</a>
                        </div>
                    </div>
                    <div class="tab-content another-product-style jump">
                        <div class="tab-pane active" id="home1">
                            <div class="row">
                                {{-- <div class="product-slider-active owl-carousel"> --}}
                                <form action="{{ route('ruangan') }}" method="GET">
                                    {{csrf_field()}}
                                    @foreach ($data_ruangan as $ruangan)
                                        @if ($ruangan->kategori_id_kategori == 6)
                                            <div class="col-md-3 single__pro col-lg-3 cat--1 col-sm-3 col-xs-12">
                                            <div class="product">
                                                <div class="product__inner">
                                                    <div class="pro__thumb">
                                                        <a href="{{ route('room.detail', $ruangan->id_ruangan) }}">
                                                            <img src="{{asset('storage/'.$ruangan->foto)}}" alt="product images">
                                                        </a>
                                                    </div>
                                                    <div class="product__hover__info">
                                                        <ul class="product__action">
                                                            <li><a title="Lihat Ruangan" href="{{ route('room.detail', $ruangan->id_ruangan) }}"><span class="ti-eye"></span></a></li>
                                                            <li><a title="Ajukan Penyewaan" href="{{ route('tender', $ruangan->id_ruangan) }}"><span class="ti-shopping-cart"></span></a></li>
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
                                        @endif
                                    @endforeach
                                </form>
                                {{-- </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Our Product Area -->
 <!-- Start Our Product Area -->
 <div class="only-banner ptb--100 bg__white">
    <div class="container">
        <div class="only-banner-img">
            <a href="shop-sidebar.html"><img src="{{asset('user/images/new-product/c.jpg')}}" alt="new product"></a>
        </div>
    </div>
</div>
<!-- Start Our Product Area -->
<section class="htc__product__area bg__white">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-style-tab">
                    <div class="product-tab-list">
                        <!-- Nav tabs -->
                        <ul class="tab-style product-tab-list-btn" role="tablist">
                            <li>
                                <a data-toggle="tab">
                                    <div class="tab-menu-text">
                                        <h4>Co-Living </h4>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <div class="all-product-btn">
                            <a href="{{ route('ruangan') }}">all</a>
                        </div>
                    </div>
                    <div class="tab-content another-product-style jump">
                        <div class="tab-pane active" id="home1">
                            <div class="row">
                                {{-- <div class="product-slider-active owl-carousel"> --}}
                                <form action="{{ route('ruangan') }}" method="GET">
                                    {{csrf_field()}}
                                    @foreach ($data_ruangan as $ruangan)
                                        @if ($ruangan->kategori_id_kategori == 2)
                                            <div class="col-md-3 single__pro col-lg-3 cat--1 col-sm-3 col-xs-12">
                                            <div class="product">
                                                <div class="product__inner">
                                                    <div class="pro__thumb">
                                                        <a href="{{ route('room.detail', $ruangan->id_ruangan) }}">
                                                            <img src="{{asset('storage/'.$ruangan->foto)}}" alt="product images">
                                                        </a>
                                                    </div>
                                                    <div class="product__hover__info">
                                                        <ul class="product__action">
                                                            <li><a title="Lihat Ruangan" href="{{ route('room.detail', $ruangan->id_ruangan) }}"><span class="ti-eye"></span></a></li>
                                                            <li><a title="Ajukan Penyewaan" href="{{ route('tender', $ruangan->id_ruangan) }}"><span class="ti-shopping-cart"></span></a></li>
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
                                        @endif
                                    @endforeach
                                </form>
                                {{-- </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Our Product Area --><br>
{{-- <div class="only-banner ptb--100 bg__white">
    <div class="container">
        <div class="only-banner-img">
             <a href="shop-sidebar.html"><img src="{{asset('user/images/new-product/c.jpg')}}" alt="new product"></a> 
        </div>
    </div>
</div> --}}
<!-- QUICKVIEW PRODUCT -->
<div id="quickview-wrapper">
    <!-- Modal -->
    <form action="{{ route('ruangan') }}" method="GET">
        {{csrf_field()}}
        @foreach ($data_ruangan as $ruangan)
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
                                <img alt="big images" src="{{asset('ruangan/'.$ruangan->foto)}}">
                            </div>
                        </div>
                        <!-- end product images -->
                    
                        <div class="product-info">
                            <h1>{{$ruangan->nama_ruangan}}</h1>
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
                                    <span class="new-price">{{$ruangan->harga}}</span>
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
    
    @endforeach
</form>
</div>
<!-- END QUICKVIEW PRODUCT -->
<!-- End Our Product Area --> 
 @endsection    