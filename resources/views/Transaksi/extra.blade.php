
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
                <h2 class="bradcaump-title">EXTRAS</h2>
            </div>
        </div>
    </div>
</div>
<!-- End Bradcaump area -->
<!-- cart-main-area start -->
<div class="cart-main-area ptb--120 bg__white">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <form action="#">               
                    <div class="table-content table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th class="product-thumbnail">Image</th>
                                    <th class="product-name">Name</th>
                                    <th class="product-name">Inclusion</th>
                                    <th class="product-price">Price</th>
                                    <th class="product-quantity">Quantity</th>
                                    {{-- <th class="product-subtotal">Total</th>
                                    <th class="product-remove">Remove</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($extra as $e)
                                <tr>
                                    <td class="product-thumbnail"><img src="{{asset('extra/'.$e->foto)}}" alt="" height="100"></td>
                                    <td class="product-name">{{$e->nama_extra}}</td>
                                    <td class="product-name">{{$e->desc_extra}}</td>
                                    <td class="product-price"><span class="amount">Rp. {{number_format($e->harga)}}</span></td>
                                    <td class="product-quantity">
                                        <form action="{{ route('transaction.book', $e->id) }}" method="POST">
                                            @csrf
                                                {{-- <input type="text" type="hidden" name="extra_id" value="{{$e->id}}" > --}}
                                                <input type="text" name="jumlah"/>
                                                <button type="submit" class="btn-primary">Add</button>
                                        </form>
                                    </td>
                                    {{-- <td class="product-subtotal">£165.00</td>
                                    <td class="product-remove"><a href="#">X</a></td> --}}
                                </tr>
                                @endforeach
                                {{-- <tr>
                                    <td class="product-thumbnail"><a href="#"><img src="images/product/3.png" alt="product img" /></a></td>
                                    <td class="product-name"><a href="#">Vestibulum dictum magna</a></td>
                                    <td class="product-price"><span class="amount">£50.00</span></td>
                                    <td class="product-quantity"><input type="number" value="1" /></td>
                                    <td class="product-subtotal">£50.00</td>
                                    <td class="product-remove"><a href="#">X</a></td>
                                </tr> --}}
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-sm-7 col-xs-12">
                            <div class="buttons-cart">
                                {{-- <input type="submit" value="Update Cart" />
                                <a href="#">Continue Shopping</a> --}}
                            </div>
                            <div class="coupon">
                                {{-- <h3>Coupon</h3>
                                <p>Enter your coupon code if you have one.</p>
                                <input type="text" placeholder="Coupon code" />
                                <input type="submit" value="Apply Coupon" /> --}}
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-5 col-xs-12">
                            <div class="cart_totals">
                                <h2>Cart Totals</h2>
                                <table>
                                    <tbody>
                                        <tr class="cart-subtotal">
                                            <th>Subtotal</th>
                                            <td><span class="amount">£215.00</span></td>
                                        </tr>
                                        <tr class="shipping">
                                            <th>Shipping</th>
                                            <td>
                                                <ul id="shipping_method">
                                                    <li>
                                                        <input type="radio" /> 
                                                        <label>
                                                            Flat Rate: <span class="amount">£7.00</span>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" /> 
                                                        <label>
                                                            Free Shipping
                                                        </label>
                                                    </li>
                                                    <li></li>
                                                </ul>
                                                <p><a class="shipping-calculator-button" href="#">Calculate Shipping</a></p>
                                            </td>
                                        </tr>
                                        <tr class="order-total">
                                            <th>Total</th>
                                            <td>
                                                <strong><span class="amount">£215.00</span></strong>
                                            </td>
                                        </tr>                                           
                                    </tbody>
                                </table>
                                <div class="wc-proceed-to-checkout">
                                    <a href="checkout.html">Proceed to Checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form> 
            </div>
        </div>
    </div>
</div>
<!-- cart-main-area end -->
    
@endsection