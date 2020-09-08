{{-- @extends('layouts.master')    

@section('content')
  <section class="section">
    <h1 class="section-header">
      <div>Dashboard</div>
    </h1>
    <div class="row">
      <div class="col-lg-3 col-md-6 col-12">
        <div class="card card-sm-3">
          <div class="card-icon bg-primary">
            <i class="ion ion-person"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total Admin</h4>
            </div>
            <div class="card-body">
              10
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-12">
        <div class="card card-sm-3">
          <div class="card-icon bg-danger">
            <i class="ion ion-ios-paper-outline"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>News</h4>
            </div>
            <div class="card-body">
              42
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-12">
        <div class="card card-sm-3">
          <div class="card-icon bg-warning">
            <i class="ion ion-paper-airplane"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Reports</h4>
            </div>
            <div class="card-body">
              1,201
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-12">
        <div class="card card-sm-3">
          <div class="card-icon bg-success">
            <i class="ion ion-record"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Online Users</h4>
            </div>
            <div class="card-body">
              47
            </div>
          </div>
        </div>
      </div>                  
    </div>
    <div class="row">
      <div class="col-lg-12 col-md-12 col-12 col-sm-12">
        <div class="card">
          <div class="card-header">
            <h4>Recently Activity</h4>
          </div>
          <div class="card-body">             
              <ul class="list-unstyled list-unstyled-border">
                <li class="media">
                  <img class="mr-3 rounded-circle" width="50" src="{{asset('dist/user2.png')}}" alt="avatar">
                  <div class="media-body">
                    <div class="float-right"><small>10m</small></div>
                    <div class="media-title">Farhan A Mujib</div>
                    <small>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</small>
                  </div>
                </li>
                <li class="media">
                  <img class="mr-3 rounded-circle" width="50" src="{{asset('dist/user2.png')}}" alt="avatar">
                  <div class="media-body">
                    <div class="float-right"><small>10m</small></div>
                    <div class="media-title">Ujang Maman</div>
                    <small>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</small>
                  </div>
                </li>
              </ul>
              <div class="text-center">
                <a href="#" class="btn btn-primary btn-round">
                  View All
                </a>
              </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
        
      
 --}}


 @extends('layouts.master')    

 @section('content')
    <!-- Content -->
			 <h4 class="page-title">Dashboard Admin</h4>
          <!-- Card with icon state color-->
					<div class="row">
						<div class="col-sm-6 col-md-3">
							<div class="card card-stats card-primary card-round">
								<div class="card-body">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="flaticon-users"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">User</p>
												<h4 class="card-title">{{totalUser()}}</h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="card card-stats card-info card-round">
								<div class="card-body">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="flaticon-interface-6"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">Ruangan</p>
												<h4 class="card-title">{{totalRuangan()}}</h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="card card-stats card-secondary card-round">
								<div class="card-body ">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="flaticon-success"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">Pemilik</p>
												<h4 class="card-title">{{totalPemilik()}}</h4>
											</div>
										</div>
									</div>
								</div>
							</div>
            </div>
            
						<div class="col-sm-6 col-md-3">
							<div class="card card-stats card-success card-round">
								<div class="card-body ">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="flaticon-analytics"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">Transaksi</p>
												<h4 class="card-title">{{totalTransaksi()}}</h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
          </div>
        <!-- End Card with icon state color-->
        <!-- Activity --> 
          <div class="col-md-14">
            <div class="card">
              <div class="card-header">
                <div class="card-head-row">
                  <div class="card-title">Notification</div>
                  <div class="card-tools">
                    <ul class="nav nav-pills nav-secondary nav-pills-no-bd nav-sm" id="pills-tab" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link" id="pills-today" data-toggle="pill" href="#pills-today" role="tab" aria-selected="true">Pending</a>
                      </li>
                      {{-- <li class="nav-item">
                        <a class="nav-link active" id="pills-week" data-toggle="pill" href="#pills-week" role="tab" aria-selected="false">Week</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="pills-month" data-toggle="pill" href="#pills-month" role="tab" aria-selected="false">Month</a>
                      </li> --}}
                    </ul>
                  </div>
                </div>
              </div>
              {{-- @foreach ($das as $d)
               {{$d->nama}}
              @endforeach --}}
              <div class="card-body">
                  @foreach ($das as $das)
                  @if ($das->status_reservasi == 0)
                      <div class="d-flex">
                        <div class="avatar">
                          <img src="{{$das->getProfile()}}" alt="Circle Image" class="avatar-img rounded-circle">
                        </div>
                      <div class="flex-1 ml-3 pt-1">
                        <h6 class="text-uppercase fw-bold mb-1"><a href="{{route('tender.detail', $das->id_transaksi)}}">{{$das->nama}}</a>
                          <span class="text-warning pl-3">
                            @if ($das->status_reservasi == 1)
                              Diterima
                            @elseif ($das->status_reservasi == 2)
                                Ditolak
                            @else
                              Pending
                            @endif
                            {{-- {{$das->status_reservasi}}</span> --}}
                        </h6>
                        <span class="text-muted">{{$das->ruangan_nama}}</span>
                      </div>
                      <div class="float-right pt-1">
                        <small class="text-muted">{{$das->tgl_transaksi}}</small>
                      </div>
                    </div>
                    <div class="separator-dashed"></div>
                  @endif
                    
                    @endforeach
{{-- 
                    {{dd($das)}} --}}
              </div>
            </div>
          </div>
        <!-- End Activity --> 
@endsection
     