@extends('layouts.master')
@section('content')
  <div class="page-header">
    <h4 class="page-title">Extra</h4>
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
        <a href="{{ route('extra.index') }}">Extra</a>
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
          <h4 class="card-title">Form Data Extra</h4>
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
                  FORM TAMBAH DATA EXTRA
                  </span>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                {{-- <p class="small">Create a new row using this form, make sure you fill them all</p> --}}
                <form action="{{ route('extra.create') }}" method="POST" enctype="multipart/form-data">
                  {{csrf_field()}}
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group form-group-default {{$errors->has('nama_extra') ? ' has-error' : ''}}">
                        <label>Nama Extra</label>
                      <input id="nama_extra" name="nama_extra" type="text" class="form-control" value="{{old('nama_extra')}}">
                        @if ($errors->has('nama_extra'))
                          <span class="help-block">{{$errors->first('nama_extra')}}</span>
                        @endif
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="form-group form-group-default {{$errors->has('harga') ? ' has-error' : ''}}">
                        <label>Harga</label>
                      <input id="harga" name="harga" type="text" class="form-control" value="{{old('harga')}}">
                        @if ($errors->has('harga'))
                          <span class="help-block">{{$errors->first('harga')}}</span>
                        @endif
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group form-group-default">
                        <label>Deskripsi Extra</label>
                        <textarea class="form-control" required="" rows="6" name="desc_extra">{{old('desc_extra')}}</textarea>
                        </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="form-group form-group-default {{$errors->has('foto') ? ' has-error' : ''}}">
                        <label>Foto</label>
                        <input id="foto" name="foto" type="file" class="form-control-file">
                        @if ($errors->has('foto'))
                        <span class="help-block">{{$errors->first('foto')}}</span>
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
        <form action="{{ route('extra.index') }}" method="GET">
          {{csrf_field()}}
        <div class="table-responsive">
          <table id="multi-filter-select" class="display table table-striped table-hover" >
            <thead>
              <tr>
                <th>Nama Extra</th>
                <th>Harga</th>
                <th>Foto</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($extra as $e)
              <tr>
                  <td>{{$e->nama_extra}}</td>
                  <td>{{$e->harga}}</td>
                  <td><img src="{{asset('extra/'.$e->foto)}}" alt="" height="50"></td>
                  <td>{{$e->desc_extra}}</td>
                  <td>
                    <div class="form-button-action">
                      <a href="{{ route('extra.edit', $e->id) }}">
                        <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit">
                          <i class="fa fa-edit"></i>
                        </button>
                      </a>
                      <a href="{{ route('extra.delete', $e->id) }}">
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
    