{{-- @extends('layouts.master')
@section('content')
<section class="section">
  <h1 class="section-header">
    <div>Data Administrator</div>
  </h1>
  <div class="section-body">
    <div class="row">
      <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
          <div class="card-header">
            <div class="float-right">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                <i class="ion ion-plus"></i>
              </button>
            </div>
            <div class="float-left">
              <form action="{{ route('administrator.index') }}" method="GET">
                <div class="input-group">
                  <input name="cari" type="text" class="form-control" placeholder="Search">
                  <div class="input-group-btn">
                    <button class="btn btn-primary"><i class="ion ion-search"></i></button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="card-body p-0">
            <div class="table-responsive">
              <table class="table table-bordered">
               <tr>
                  <th scope="col">Nama</th>
                  <th scope="col">Email</th>
                  <th scope="col">Created At</th>
                  <th scope="col">Aksi</th> 
                </tr>
                
                @foreach ($data_admin as $admin)
                <tr>
                    <td>{{$admin->name}}</td>
                    <td>{{$admin->email}}</td>
                    <td>{{$admin->created_at}}</td>
                    <td>
                      <a href="{{ route('administrator.edit', $admin->id) }}" class="btn btn-sm btn-warning"><i class="ion ion-android-create"></i></a>
                      <a href="{{ route('administrator.delete', $admin->id) }}" class="btn btn-sm btn-danger" onclick="return confirm ('Hapus data ini?')"><i class="ion ion-trash-a"></i></a>
                    </td>
                </tr>
                @endforeach
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> --}}

<!-- Modal -->
{{-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Administrator</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('administrator.create') }}" method="POST">
          {{csrf_field()}}
          <div class="form-group">
            <label>Nama</label>
            <input type="text" class="form-control" id="name" name="name">
            <div class="invalid-feedback">
              Please fill in the name
            </div>
          </div>
          <div class="form-group">
            <label>Email</label>
            <input name="email" type="email" class="form-control">
            <div class="invalid-feedback">
              Please fill in the name
            </div>
          </div>
          <div class="form-group">
            <label>Password</label>
            <input name="password" type="password" class="form-control">
            <div class="invalid-feedback">
              Please fill in the name
            </div>
          </div>
          <div class="modal-footer">
            <button type="reset" class="btn btn-primary">Reset</button>
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection --}}
    
@extends('layouts.master')
@section('content')
  <div class="page-header">
    <h4 class="page-title">Administrator</h4>
    <ul class="breadcrumbs">
      <li class="nav-home">
        <a href="{{ route('dashboard.index') }}">
          <i class="flaticon-home"></i>
        </a>
      </li>
      <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">
        <a href="#">User Manajemen</a>
      </li>
      <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">
        <a href="{{ route('administrator.index') }}">Administrator</a>
      </li>
      {{--  --}}
    </ul>
  </div>
  <!-- Data Table -->
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        @if (session('sukses'))
            <div class="alert alert-success" role="alert">
              {{session('sukses')}}
            </div>
            <!-- Alert -->
            @endif
        <div class="d-flex align-items-center">
          <h4 class="card-title">Form Data Administrator</h4>
          <button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
            <i class="fa fa-plus"></i>
            Tambah Data
          </button>
        </div>
      </div>
      <div class="card-body">
         <!-- Modal -->
         <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header no-bd">
                <h5 class="modal-title">
                  <span class="fw-mediumbold">
                    FORM TAMBAH DATA ADIMINSTRATOR
                  </span>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                {{-- <p class="small">Create a new row using this form, make sure you fill them all</p> --}}
                <form action="{{ route('administrator.create') }}" method="POST">
                  {{csrf_field()}}
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group form-group-default {{$errors->has('name') ? ' has-error' : ''}}">
                        <label>Nama</label>
                        <input id="name" name="name" type="text" class="form-control" value="{{old('name')}}">
                        @if ($errors->has('name'))
                        <span class="help-block">{{$errors->first('name')}}</span>
                        @endif
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="form-group form-group-default {{$errors->has('email') ? ' has-error' : ''}}">
                        <label>Email</label>
                        <input name="email" type="email" class="form-control" value="{{old('email')}}">
                        @if ($errors->has('email'))
                        <span class="help-block">{{$errors->first('email')}}</span>
                        @endif
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="form-group form-group-default {{$errors->has('password') ? ' has-error' : ''}}">
                        <label>Password</label>
                        <input name="password" type="password" class="form-control" value="{{old('password')}}">
                        @if ($errors->has('password'))
                        <span class="help-block">{{$errors->first('password')}}</span>
                        @endif
                      </div>
                    </div> 
                </div>
              </div>
              <div class="modal-footer no-bd">
                <button type="reset" class="btn btn-danger">Reset</button>
                <button type="submit" id="addRowButton" class="btn btn-primary">Tambah</button>
              </div>
            </form>
            </div>
          </div>
        </div>
        <!-- Modal -->
        <form action="{{ route('administrator.index') }}" method="GET">
          {{csrf_field()}}
        <div class="table-responsive">
          <table id="multi-filter-select" class="display table table-striped table-hover">
            <thead>
              <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Create At</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($data_admin as $admin)
              <tr>
                  <td>{{$admin->name}}</td>
                  <td>{{$admin->email}}</td>
                  <td>{{$admin->created_at}}</td>
                  <td>
                    <div class="form-button-action">
                      <a href="{{ route('administrator.edit', $admin->id) }}">
                        <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit">
                          <i class="fa fa-edit"></i>
                        </button>
                      </a>
                        {{-- <button type="button" class="btn btn-success" id="alert_demo_7"> --}}
                      <a href="{{ route('administrator.delete', $admin->id) }}">
                          <button type="button" data-toggle="tooltip" class="btn btn-link btn-danger" id="alert_demo_7" data-original-title="Delete">
                          <i class="fa fa-times"></i>
                        </button>
                      </a>
                    </div>
                  </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </form>
      </div>
    </div>
  </div>
  <!-- Data Table -->
@endsection
    
    