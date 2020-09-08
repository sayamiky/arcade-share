@extends('layouts.masterfront')
@section('content')
<!-- Start Bradcaump area -->
<div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url({{asset('user/images/bg/2.jpg')}}) no-repeat scroll center center / cover ;">
    <div class="ht__bradcaump__wrap">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="bradcaump__inner text-center">
                        <h2 class="bradcaump-title">portfolios</h2>
                        <nav class="bradcaump-inner">
                          <a class="breadcrumb-item">Materials of Products</a>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Bradcaump area -->
<div class="portfolio-grid-area bg__white pt--130 pb--100">
    <div class="container">
        <div class="portfolio-menu-active gutter-btn mb--50 text-center">
            <div class="portfolio-style">
                <div class="row grid">
                    <form action="{{ route('portfolios') }}" method="GET">
                        {{csrf_field()}}
                        @foreach ($port as $port)
                        <div class="col-md-6 col-sm-6 col-xs-12 grid-item cat5 cat2">
                            <div class="single-portfolio-card mb--30">
                                <div class="portfolio-img">
                                    <a href="single-portfolio.html">
                                        <img src="{{asset('storage/'.$port->gambar_1)}}" alt="" />
                                    </a>
                                    <div class="portfolio-icon">
                                        <a class="video-popup" href="{{$port->link}}">
                                            <i class="zmdi zmdi-videocam"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="portfolio-title portfolio-card-title text-center">
                                    <h3><a>{{$port->judul}}</a></h3>
                                    <span>{{$port->kategori}}</span>
                                </div>				
                            </div>						
                        </div>
                        @endforeach
                    </form>
                </div>		
            </div>
        </div>
    </div>
</div>
@endsection