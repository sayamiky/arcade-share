
@extends('layouts.masterfront')
@section('content')
    <!-- Start Checkout Area -->
    {{-- <section class="our-checkout-area ptb--120 bg__white">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-8">
                    <div class="ckeckout-left-sidebar">
                        <!-- Start Checkbox Area -->
                        <div class="checkout-form">
                            <h2 class="section-title-3">Detail Pengajuan Penyewaan Ruangan</h2>
                            <div class="checkout-form-inner">
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
                                    <div class="review-box full">
                                        <input type="text"
                                            class="datepicker-here form-group"
                                            data-language='en'
                                            name="tgl_reservasi"
                                            data-multiple-dates="3"
                                            data-multiple-dates-separator=", "
                                            data-position='top left'/>
                                    </div>
                                    <div class="review-box full form-group">
                                        <input type="text" name="id_ruangan" id="id_ruangan" placeholder="Id Ruangan*">
                                    </div>
                                    <div class="blog__details__btn">
                                    <button type="submit"><a class="htc__btn btn--gray">submit</a></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="checkout-right-sidebar">
                        <div class="detail-tender mt--60">
                            <div class="single__contact__address">
                                <div class="contact__icons">
                                    <img src="{{asset('ruangan/'.$tender->foto)}}" alt="" height="60">
                                </div>
                                <div class="contact__details">
                                    <p>Room <br> {{$tender->nama_ruangan}}</p>
                                </div>
                            </div><hr>
                            <div class="contact__iconz">
                                <div class="address-icon">
                                    <i class="zmdi zmdi-pin"></i>
                                </div>
                                <ul>
                                <li class="new__price">Jalan Hayam Wuruk No 189 Denpasar Timur, Bali</li>
                                </ul>
                                <ul>
                                    <li><i class="zmdi zmdi-caret-right-circle"></i>Lorem ipsum dolor sit amet, consectetur nipabali</li>
                                    <li><a href="#"><i class="zmdi zmdi-caret-right-circle"></i>Lorem ipsum dolor sit amet</a></li>
                                    <li><a href="#"><i class="zmdi zmdi-caret-right-circle"></i>Lorem ipsum dolor sit amet, consectetur nipabali</a></li>
                                    <li><a href="#"><i class="zmdi zmdi-caret-right-circle"></i>Lorem ipsum dolor sit amet, consectetur nipabali</a></li>
                                    <li><a href="#"><i class="zmdi zmdi-caret-right-circle"></i>Lorem ipsum dolor sit amet</a></li>
                                </ul>
                            </div>
                                <ul class="product__price">
                                     <div class="address-icon">
                                        <i class="zmdi zmdi-pin"></i>
                                    </div>
                                    <li class="new__price">Jalan Hayam Wuruk No 189 Denpasar Timur, Bali</li>
                                        <li class="new__price">Rp. {{number_format($tender->harga)}}</li>
                                    </ul>

                                   
                                    <div class="address-text">
                                        <p></p>
                                    </div>
                        </div>
                        <div class="our-important-note">
                            <h2 class="section-title-3">Note :</h2>
                            <p class="note-desc">Lorem ipsum dolor sit amet, consectetur adipisici elit, sed do eiusmod tempor incididunt ut laborekf et dolore magna aliqua.</p>
                            <ul class="important-note">
                                <li><a href="#"><i class="zmdi zmdi-caret-right-circle"></i>Lorem ipsum dolor sit amet, consectetur nipabali</a></li>
                                <li><a href="#"><i class="zmdi zmdi-caret-right-circle"></i>Lorem ipsum dolor sit amet</a></li>
                                <li><a href="#"><i class="zmdi zmdi-caret-right-circle"></i>Lorem ipsum dolor sit amet, consectetur nipabali</a></li>
                                <li><a href="#"><i class="zmdi zmdi-caret-right-circle"></i>Lorem ipsum dolor sit amet, consectetur nipabali</a></li>
                                <li><a href="#"><i class="zmdi zmdi-caret-right-circle"></i>Lorem ipsum dolor sit amet</a></li>
                            </ul>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </section> --}}

<!-- Start Bradcaump area -->
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="bradcaump__inner text-center">
                <h2 class="bradcaump-title">BILLING DETAIL</h2>
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
                        {{-- <form  method="post" action="{{ route('transaction.update', $trans->id_transaksi) }}"> --}}
                        <form  method="post" onsubmit="return submitForm();">
                            @csrf
                                <div class="review-box full form-group">
                                    <input  id="nama" name="nama" type="text" placeholder="Nama*" value="{{$trans->nama}}">
                                </div>
                                <div class="single-checkout-box form-group">
                                    <input type="email" name="email" id="email" placeholder="Email*" value="{{$trans->email}}">
                                    <input type="text" name="tlp" id="tlp" placeholder="Telp*" value="{{$trans->tlp}}">
                                </div>
                                <div class="single-checkout-box form-group">
                                    <textarea name="alamat" id="alamat" placeholder="Alamat*">{{$trans->alamat}}</textarea>
                                </div>
                                
                                <ul class="pro__dtl__btn">
                                    @if ($trans->ruangan_kategori_id == 1)
                                        <li class="buy__now__btn"><button type="submit"><a class="htc__btn btn--gray">Bayar</a></button></li>
                                        <li class="buy__now__btn"><button><a class="htc__btn btn--gray"  href="{{(route('transaction.extra',$trans->id_transaksi))}}">Pilih tambahan extra</a></button></li>
                                    @else
                                        {{-- <li class="buy__now__btn"><button type="submit"><a class="htc__btn btn--gray">Bayar</a></button></li> --}}
                                         @if ($trans->status_bayar == 'pending')
                                        <li class="buy__now__btn"><button class="btn btn-success btn-sm" type="submit" onclick="snap.pay('{{ $trans->snap_token }}')">Bayar</button></li>
                                        @endif
                                    @endif
                                    
                                </ul>
                        </form>
                        <!-- End Checkbox Area -->
                        <!-- Start Payment Box -->
                        <div class="payment-form">
                            {{-- <h2 class="section-title-3">payment details</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur kgjhyt</p>
                            <div class="payment-form-inner">
                                <div class="single-checkout-box">
                                    <input type="text" placeholder="Name on Card*">
                                    <input type="text" placeholder="Card Number*">
                                </div>
                                <div class="single-checkout-box select-option">
                                    <select>
                                        <option>Date*</option>
                                        <option>Date</option>
                                        <option>Date</option>
                                        <option>Date</option>
                                        <option>Date</option>
                                    </select>
                                    <input type="text" placeholder="Security Code*">
                                </div>
                            </div> --}}
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
                                <img src="{{asset('storage/'.$trans->foto)}}" alt="" height="60">
                                <div class="contacto__details">
                                    <p><strong>Room</strong><br> {{$trans->ruangan_nama}}</p>
                                </div>
                            </div><hr>
                            <div class="single__contact__address">
                                <img alt="" src="{{asset('user/images/icons/thum12.png')}}" height="20">
                                <div class="contactoz__details">
                                    <p>{{$trans->ruangan_alamat}}, {{$trans->ruangan_kecamatan}}, {{$trans->ruangan_kabupaten}}, {{$trans->ruangan_provinsi}}</p>
                                </div>
                            </div>
                            <div class="single__contact__address">
                                <img alt="" src="{{asset('user/images/icons/thum11.png')}}" height="20">
                                <div class="contactoz__details">
                                    <p>Maximum Capacity <br><strong> {{$trans->kapasitas}} </strong>people</p>
                                </div>
                            </div>
                            <div class="single__contact__address">
                                <img alt="" src="{{asset('user/images/icons/thum11.png')}}" height="20">
                                <div class="contactoz__details">
                                    <p>Reservation Date  
                                        <br><strong>{{ date('d-m-Y', strtotime($trans->tgl_reservasi)) }}</strong> until <strong>{{ date('d-m-Y', strtotime($trans->tgl_selesai)) }}</strong> </p>
                                </div>
                            </div>
                        </div> <br>
                        <div class="puick-contact-areas">
                            <div class="single__contact__address">
                                <div class="contacto__details">
                                    <p><strong>Rincian Harga</strong></p>
                                </div>
                            </div><hr>
                            <div class="single__contact__address">
                                 <div class="contactoz__details">
                                    <p>Harga  : Rp. {{number_format($trans->ruangan_harga)}}</p>
                                        @php
                                            $tgl1 = \Carbon\Carbon::parse($trans->tgl_selesai);
                                            $tgl2 = \Carbon\Carbon::parse($trans->tgl_reservasi);
                                        @endphp
                                       <p>Lama Sewa : {{$lamasewa = $tgl1->diffInDays($tgl2)}}</p>
                                    <p>Booking Fee : Rp. {{number_format(($trans->ruangan_harga*$lamasewa)*0.05)}}</p>
                                </div>
                            </div><hr>
                            <div class="single__contact__address">
                               <div class="contactoz__details">
                                    <p>Total : Rp. {{number_format($trans->ruangan_harga*$lamasewa+(($trans->ruangan_harga*$lamasewa)*0.05))}}</p>
                                </div>
                            </div>
                        </div><br>
                        <div class="our-important-note">
                            <h2 class="section-title-3">Note :</h2>
                            <p class="note-desc">Dengan melanjutkan ke tahap selanjutnya, Anda telah membaca dan menyetujui <a href="#">syarat dan ketentuan</a> serta <a href="#">privacy policy</a> ARCADE</p>
                         </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
 
        <table class="table table-striped" id="list">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Amount</th>
                <th>Room</th>
                <th>Status</th>
                <th style="text-align: center;">Pay</th>
            </tr>
            {{-- @foreach ($trans as $t) --}}
            <tr>
                <td><code>{{ $trans->id_transaksi }}</code></td>
                <td>{{ $trans->nama }}</td>
                <td>Rp. {{ number_format($trans->total_bayar) }},-</td>
                <td>{{ ucwords(str_replace('_', ' ', $trans->id_ruangan)) }}</td>
                <td>{{ ucfirst($trans->status_bayar) }}</td>
                <td style="text-align: center;">
                    @if ($trans->status_bayar == 'pending')
                    <button class="btn btn-success btn-sm" onclick="snap.pay('{{ $trans->snap_token }}')">Complete Payment</button>
                    @endif
                </td>
            </tr>
            {{-- @endforeach --}}
            <tr>
                {{-- <td colspan="6">{{ $trans->links() }}</td> --}}
            </tr>
        </table>
 
    </div>
    <script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
    <script src="{{ !config('services.midtrans.isProduction') ? 'https://app.sandbox.midtrans.com/snap/snap.js' : 'https://app.midtrans.com/snap/snap.js' }}" data-client-key="{{ config('services.midtrans.clientKey') }}"></script>
    <script>
    function submitForm() {
        // Kirim request ajax
        $.post("{{ route('transaction.update',$trans->id_transaksi) }}",
        {
            _method: 'POST',
            _token: '{{ csrf_token() }}',
            nama: $('input#nama').val(),
            email: $('input#email').val(),
            tlp: $('input#tlp').val(),
            alamat: $('textarea#alamat').val(),
            // total_bayar: $('input#donor_email').val(),
        },
        function (data, status_bayar) {
            snap.pay(data.snap_token, {
                // Optional
                onSuccess: function (result) {
                    location.reload();
                },
                // Optional
                onPending: function (result) {
                    location.reload();
                },
                // Optional
                onError: function (result) {
                    location.reload();
                }
            });
        });
        return false;
    }
    </script>
    <!-- End Checkout Area -->
@endsection