

@extends('layouts.master')
@section('content')
  <div class="page-header">
    <h4 class="page-title">Pemilik Ruangan</h4>
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
        <a href="{{ route('pemilik.index') }}">Pemilik Ruangan</a>
      </li>
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
          <h4 class="card-title">Form Data Pemilik Ruangan</h4>
          <button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
            <i class="fa fa-plus"></i>
            Tambah Data
          </button>
        </div>
      </div>
      <div class="card-body">
        <p class="demo">
        <a class="btn btn-primary btn-sm ml-auto" style="text-decoration: white;" href="{{route('pemilik.excel')}}"><i class="fa fa-file"></i> Export to Excel</a>
        <a class="btn btn-primary btn-sm ml-auto" style="text-decoration: white;" href="{{route('pemilik.pdf')}}"><i class="fa fa-print "></i> Export to PDF</a>
        </p>
         <!-- Modal -->
         <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header no-bd">
                <h5 class="modal-title">
                  <span class="fw-mediumbold">
                    FORM TAMBAH DATA PEMILIK
                  </span>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                {{-- <p class="small">Create a new row using this form, make sure you fill them all</p> --}}
                <form action="{{ route('pemilik.create') }}" method="POST">
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
                      <div class="form-group form-group-default {{$errors->has('phone') ? ' has-error' : ''}}">
                        <label>Phone</label>
                        <input id="phone" name="phone" type="text" class="form-control" value="{{old('phone')}}">
                        @if ($errors->has('phone'))
                        <span class="help-block">{{$errors->first('phone')}}</span>
                        @endif
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="form-group form-group-default {{$errors->has('address') ? ' has-error' : ''}}">
                        <label>Alamat</label>
                        <textarea class="form-control" required="" rows="6" name="address">{{old('address')}}</textarea>
                        @if ($errors->has('address'))
                        <span class="help-block">{{$errors->first('address')}}</span>
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
        
        <form action="{{ route('pemilik.index') }}" method="GET">
          {{csrf_field()}}
        <div class="table-responsive">
          <table id="multi-filter-select" class="display table table-striped table-hover" >
            <thead>
              <tr>
                <th>Nama</th>
                <th>Telp</th>
                <th>Alamat</th>
                <th>Email</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($data_pemilik as $pemilik)
              <tr>
                  <td>{{$pemilik->name}}</td>
                  <td>{{$pemilik->phone}}</td>
                  <td>{{$pemilik->address}}</td>
                  <td>{{$pemilik->email}}</td>
                  <td>
                    <div class="form-button-action">
                      <a href="{{ route('pemilik.edit', $pemilik->id) }}">
                        <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit">
                          <i class="fa fa-edit"></i>
                        </button>
                      </a>
                      
                        {{-- <button type="button" class="btn btn-success" id="alert_demo_7"> --}}
                      <a href="{{ route('pemilik.delete', $pemilik->id) }}">
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
    