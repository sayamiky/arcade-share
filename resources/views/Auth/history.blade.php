<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    {{-- <link rel="shortcut icon" type="image/x-icon" href="{{asset('logo.png')}}"> --}}
	<link rel="icon" type="image/png" href="{{asset('logo.png')}}">
	<link rel="apple-touch-icon" sizes="76x76" href="{{asset('userprofile/assets/img/apple-icon.png')}}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Arcade</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <link href="{{asset('userprofile/assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('userprofile/assets/css/paper-kit.css')}}" rel="stylesheet"/>
    <link href="{{asset('userprofile/assets/css/demo.css')}}" rel="stylesheet" />

    <!--     Fonts and icons     -->
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,300,700' rel='stylesheet' type='text/css'>
	{{-- <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet"> --}}
	<link href="{{asset('userprofile/assets/css/nucleo-icons.css')}}" rel="stylesheet">

</head>
<body>
    <nav class="navbar navbar-toggleable-md fixed-top navbar-transparent" color-on-scroll="150">
        {{-- <div class="container">
        </div> --}}
        <div class="container">
			{{-- <div class="navbar-translate">
	            <button class="navbar-toggler navbar-toggler-right navbar-burger" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-bar"></span>
					<span class="navbar-toggler-bar"></span>
					<span class="navbar-toggler-bar"></span>
	            </button>
	            <a class="navbar-brand" href="https://www.creative-tim.com">Paper Kit 2</a>
			</div> --}}
			<div class="collapse navbar-collapse" id="navbarToggler">
	            <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
	                    <a href="/" class="nav-link">Home</a>
                    </li>
	                <li class="nav-item">
	                    <a href="{{ route('profile', Auth::user()->id) }}" class="nav-link">Profile</a>
                    </li>
                    <li class="nav-item">
	                    <a href="{{ route('profile.confirm', Auth::user()->id) }}" class="nav-link">History</a>
                    </li>
                    <li>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="btn btn-warning btn-sm">Logout</button>
                        </form>
                    </li>
	            </ul>
	        </div>
		</div>
    </nav>

    <div class="wrapper">
        <div class="page-header page-header-xs" data-parallax="true" style="background-image: url('{{asset('userprofile/assets/img/fabio-mangione.jpg')}}');">
			<div class="filter"></div>
		</div>
        <div class="section profile-content">
            <div class="container">
                <div class="owner">
                    <div class="avatar">
                        {{-- <img src="{{$profile->getProfile()}}" alt="Circle Image" class="img-circle img-no-padding img-responsive"> --}}
                    </div>
                    <div class="name">
                        {{-- <h4 class="title">Ayam<br /></h4> --}}
						{{-- <h6 class="description">Activity</h6> --}}
                    </div> 
                </div>
                <div class="row">
                    <div class="col-md-6 offset-md-3 text-center"> </div>
                </div>
                <br/>
                {{-- <footer class="footer section-dark">
                    <div class="container">
                        <div class="row">
                            <nav class="footer-nav">
                                <ul>
                                    <li><a href="/">Home</a></li>
                                    <li><a href="{{ route('ruangan') }}">Product</a></li>
                                    <li><a href="{{ route('contactus') }}">Contact Us</a></li>
                                    <li>
                                        <form action="{{ route('logout') }}" method="POST">
                                            @csrf
                                            <button class="btn btn-warning btn-sm">Logout</button>
                                        </form>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </footer> --}}
                <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="" role="tab">Activity</a>
                            </li>
                            {{-- <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="" role="tab">Confirm</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="" role="tab">Cancel</a>
                            </li> --}}
                        </ul>
                    </div>
                </div>
                <!-- Tab panes -->
                <div class="tab-content following">
                    <div class="tab-pane active" id="follows" role="tabpanel">
                        <div class="row">
                            <div class="col-md-6 offset-md-3">
                                <ul class="list-unstyled follows">
                                    @foreach ($ruangan as $ruangan)
                                       <li>
                                        <div class="row">
                                            <div class="col-md-11 col-xs-4">
                                                <h6>{{$ruangan->ruangan_nama}}<br/><small>{{$ruangan->tgl_transaksi}}</small></h6>
                                                @if($ruangan->total_bayar != null && $ruangan->status_bayar == 0)
                                                    <a href="{{ route('transaction.update', $ruangan->id_transaksi) }}">
                                                        <button type="button" class="btn btn-warning btn-sm">LAKUKAN PEMBAYARAN RUANGAN</button>
                                                    </a>
                                                @elseif ($ruangan->status_reservasi == 1)
                                                    <a href="{{ route('transaction', $ruangan->id_transaksi) }}">
                                                        <button type="button" class="btn btn-primary btn-sm">SEWA RUANGAN</button>
                                                    </a>
                                                @endif
                                            </div>
                                            <div class="col-md-0 col-xs-3">
                                                <div class="unfollow" >
                                                    <div class="checkbox">
                                                        @if ($ruangan->status_reservasi == 1)
                                                        <input type="checkbox"><span class="badge badge-success">Approve</span>
                                                        @elseif ($ruangan->status_reservasi == 2)
                                                        <input type="checkbox"><span class="badge badge-danger">Decline</span>
                                                        @else
                                                        <input type="checkbox"><span class="badge badge-warning">Pending</span>
                                                        @endif
                                                       {{-- <label for="checkbox1"><span class="badge badge-primary">Secondary</span></label> --}}
                                                     </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li> <hr />
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
	
</body>

<!-- Core JS Files -->
{{-- <script src="{{asset('userprofile/assets/js/jquery-3.2.1.js" type="text/javascript')}}"></script>
<script src="{{asset('userprofile/assets/js/jquery-ui-1.12.1.custom.min.js')}}" type="text/javascript"></script>
<script src="{{asset('userprofile/assets/js/tether.min.js" type="text/javascript')}}"></script>
<script src="{{asset('userprofile/assets/js/bootstrap.min.js" type="text/javascript')}}"></script> --}}

<!--  Paper Kit Initialization snd functons -->
{{-- <script src="{{asset('userprofile/assets/js/paper-kit.js')}}"></script> --}}

</html>
