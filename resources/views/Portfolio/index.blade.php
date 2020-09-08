@extends('layouts.master')
@section('content')
  <div class="page-header">
    <h4 class="page-title">Portfolio</h4>
    <ul class="breadcrumbs">
      <li class="nav-home">
        <a href="{{ route('portfolio.index') }}">
          <i class="flaticon-home"></i>
        </a>
      </li>
      <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">
        <a href="{{ route('portfolio.index') }}">Portfolio</a>
      </li>
      {{-- <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">
        <a href="#">Datatables</a>
      </li> --}}
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
          <h4 class="card-title">Form Data Portfolio</h4>
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
                  FORM TAMBAH DATA PORTFOLIO
                  </span>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                {{-- <p class="small">Create a new row using this form, make sure you fill them all</p> --}}
                <form action="{{ route('portfolio.create') }}" method="POST" enctype="multipart/form-data">
                  {{csrf_field()}}
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group form-group-default {{$errors->has('judul') ? ' has-error' : ''}}">
                        <label>Judul</label>
                      <input id="judul" name="judul" type="text" class="form-control" value="{{old('judul')}}">
                        @if ($errors->has('judul'))
                          <span class="help-block">{{$errors->first('judul')}}</span>
                        @endif
                      </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group form-group-default {{$errors->has('kategori') ? ' has-error' : ''}}">
                          <label>Kategori</label>
                        <input id="kategori" name="kategori" type="text" class="form-control" value="{{old('kategori')}}">
                          @if ($errors->has('kategori'))
                            <span class="help-block">{{$errors->first('kategori')}}</span>
                          @endif
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group form-group-default {{$errors->has('gambar_1') ? ' has-error' : ''}}">
                          <label>Gambar Pertama</label>
                          <input id="gambar_1" name="gambar_1" type="file" class="form-control-file">
                          @if ($errors->has('gambar_1'))
                          <span class="help-block">{{$errors->first('gambar_1')}}</span>
                          @endif
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group form-group-default">
                          <label>Gambar Kedua</label>
                          <input id="gambar_2" name="gambar_2" type="file" class="form-control-file">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group form-group-default">
                          <label>Link</label>
                        <input id="link" name="link" type="text" class="form-control" value="{{old('link')}}">
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
        <form action="{{ route('portfolio.index') }}" method="GET">
          {{csrf_field()}}
        <div class="table-responsive">
          <table id="multi-filter-select" class="display table table-striped table-hover" >
            <thead>
              <tr>
                <th>Judul</th>
                <th>Kategori</th>
                <th>Gambar Pertama</th>
                <th>Gambar Kedua</th>
                <th>Link</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($port as $port)
              <tr>
                  <td>{{$port->judul}}</td>
                  <td>{{$port->kategori}}</td>
                  <td><img src="{{asset('storage/' . $port->gambar_1)}}" alt="" height="50"></td>
                  <td><img src="{{asset('storage/' . $port->gambar_2)}}" alt="" height="50"></td>
                  <td>{{$port->link}}</td>
                  <td>
                    <div class="form-button-action">
                      <a href="{{ route('portfolio.edit', $port->id) }}">
                        <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit">
                          <i class="fa fa-edit"></i>
                        </button>
                      </a>
                      
                        {{-- <button type="button" class="btn btn-success" id="alert_demo_7"> --}}
                      <a href="{{ route('portfolio.delete', $port->id) }}">
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
    