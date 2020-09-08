
@extends('layouts.masterfront')
@section('content')

<!-- Start Bradcaump area -->
<div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url({{asset('user/images/bg/2.jpg')}}) no-repeat scroll center center / cover ;">
    <div class="ht__bradcaump__wrap">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="bradcaump__inner text-center">
                        <h2 class="bradcaump-title">Checkout</h2>
                        <nav class="bradcaump-inner">
                          <a class="breadcrumb-item" href="index.html">Home</a>
                          <span class="brd-separetor">/</span>
                          <span class="breadcrumb-item active">Checkout</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Bradcaump area -->
<!-- Start Checkout Area -->
    <!-- End Checkout Area -->

    <section class="our-checkout-area ptb--120 bg__white">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-8">
                    <div class="ckeckout-left-sidebar">
                        <!-- Start Checkbox Area -->
                        <form  method="post" action="{{ route('tender.create') }}">
                            @csrf
                                <div class="review-box full form-group">
                                    <input  id="nama" name="nama" type="text" placeholder="Nama*">
                                </div>
                                <div class="single-checkout-box form-group">
                                    <input type="email" name="email" id="email" placeholder="Email*">
                                    <input type="text" name="tlp" id="tlp" placeholder="Telp*">
                                </div>
                                <div class="single-checkout-box form-group">
                                    <textarea name="alamat" id="alamat" placeholder="Alamat*"></textarea>
                                </div>
                                <div class="single-checkout-box form-group">
                                    <input type="text"
                                        class="datepicker-here form-group"
                                        data-language='en'
                                        name="tgl_reservasi"
                                        placeholder="Tanggal Mulai Reservasi*"
                                        data-multiple-dates="3"
                                        data-multiple-dates-separator=", "
                                        data-position='top left'/>
                                
                                    <input type="text"
                                        class="datepicker-here form-group"
                                        data-language='en'
                                        name="tgl_selesai"
                                        placeholder="Tanggal Selesai Reservasi*"
                                        data-multiple-dates="3"
                                        data-multiple-dates-separator=", "
                                        data-position='top left'/>
                                </div>

                                    <input type="hidden" name="id_ruangan" id="id_ruangan"  value="{{$tender->id_ruangan}}" placeholder="Id Ruangan*">
                                
                                <div class="blog__details__btn">
                                <button type="submit"><a class="htc__btn btn--gray">submit</a></button>
                                </div>
                        </form>
                        <!-- End Checkbox Area -->
                        <!-- Start Payment Box -->
                        <div class="payment-form">
                        </div>
                        <!-- End Payment Box -->
                        <!-- Start Payment Way -->
                        <div class="our-payment-sestem">
                            <h2 class="section-title-3">We  Accept :</h2>
                            <ul class="payment-menu">
                                <li><a href="#"><img src="{{asset('user/images/payment/1.jpg')}}" alt="payment-img"></a></li>
                                <li><a href="#"><img src="{{asset('user/images/payment/2.jpg')}}" alt="payment-img"></a></li>
                                <li><a href="#"><img src="{{asset('user/images/payment/3.jpg')}}" alt="payment-img"></a></li>
                                <li><a href="#"><img src="{{asset('user/images/payment/4.jpg')}}" alt="payment-img"></a></li>
                                <li><a href="#"><img src="{{asset('user/images/payment/5.jpg')}}" alt="payment-img"></a></li>
                            </ul>
                            <div class="checkout-btn">
                                <a class="ts-btn btn-light btn-large hover-theme" href="#">CONFIRM & BUY NOW</a>
                            </div>    
                        </div>
                        <!-- End Payment Way -->
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="checkout-right-sidebar">
                        <div class="puick-contact-areas">
                            <div class="single__contact__address">
                                <img src="{{asset('storage/'.$tender->foto)}}" alt="" height="60">
                                <div class="contacto__details">
                                    <p>Room <br> {{$tender->nama_ruangan}}</p>
                                </div>
                            </div><hr>
                            <div class="single__contact__address">
                                <img alt="" src="{{asset('user/images/icons/thum12.png')}}" height="20">
                                <div class="contactoz__details">
                                    <p>{{$tender->alamat_ruangan}}, {{$tender->kecamatan}}, {{$tender->kabupaten}}, {{$tender->provinsi}}</p>
                                </div>
                            </div>
                            <div class="single__contact__address">
                                <img alt="" src="{{asset('user/images/icons/thum11.png')}}" height="20">
                                <div class="contactoz__details">
                                    <p>Maximum Capacity <strong>{{$tender->kapasitas}}</strong> people</p>
                                </div>
                            </div>
                        </div> <br>
                        <div class="our-important-note">
                            <h2 class="section-title-3">Note :</h2>
                            <p class="note-desc">Dengan melanjutkan ke tahap selanjutnya, Anda telah membaca dan menyetujui <a href="#">syarat dan ketentuan</a> serta <a href="#">privacy policy</a> ARCADE</p>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Checkout Area -->
@endsection