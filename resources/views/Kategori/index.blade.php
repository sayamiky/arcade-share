{{-- @extends('layouts.master')
@section('content')
<section class="section">
  <h1 class="section-header">
    <div>Data Kategori Ruangan</div> 
  </h1>
  <div class="section-body">
    <div class="row">
      <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
          <div class="card-header">
            @if (session('sukses'))
            {{-- alert --}}
            {{-- <div class="alert alert-primary alert-has-icon alert-dismissible show fade">
              <div class="alert-icon"><i class="ion ion-ios-lightbulb-outline"></i></div>
              <div class="alert-body">
                <button class="close" data-dismiss="alert">
                  <span>×</span>
                </button>
                <div class="alert-title">{{session('sukses')}}</div>
              </div>
            </div> --}}
            {{-- alert --}}
            {{-- @endif
            <div class="float-right">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                <i class="ion ion-plus"></i>
              </button>
            </div>
            <div class="float-left">
              <form action="{{ route('kategori.index') }}" method="GET">
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
              <table class="table table-bordered"> --}}
               {{-- {{ dd($data_kategori)}} --}} 
               {{-- <tr>
                  <th scope="col">Nama</th>
                  <th scope="col">Deskripsi</th>
                  <th scope="col">Aksi</th>
                </tr> --}}
                
                {{-- @foreach ($data_kategori as $kategori)
                <tr>
                    <td>{{$kategori->nama_kategori}}</td>
                    <td>{{$kategori->desc_kategori}}</td>
                    <td> --}}
                      {{-- <a href="{{ route('kategori.edit', $kategori->id_kategori) }}" class="btn btn-sm btn-warning"><i class="ion ion-android-create"></i></a>
                      <a href="{{ route('kategori.delete', $kategori->id_kategori) }}" class="btn btn-sm btn-danger" onclick="return confirm ('Hapus data ini?')"><i class="ion ion-trash-a"></i></a> --}}
                    {{-- <a href="#" class="btn btn-sm btn-danger delete" id_kategori="{{$kategori->id_kategori}}"><i class="ion ion-trash-a"></i></a> --}}

                    {{-- </td>
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
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Kategori</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('kategori.create') }}" method="POST">
          {{csrf_field()}}
          <div class="form-group">
            <label>Nama Kategori</label>
            <input type="text" class="form-control" id="nama_kategori" name="nama_kategori">
            <div class="invalid-feedback">
              Please fill in the name
            </div>
          </div>
          <div class="form-group">
            <label>Deskripsi Kategori</label>
            <textarea class="form-control" required="" rows="3" name="desc_kategori"></textarea>
            <div class="invalid-feedback">
              Please fill in the description
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
</div> --}}
{{-- @endsection --}}

@extends('layouts.master')
@section('content')
  <div class="page-header">
    <h4 class="page-title">Kategori Ruangan</h4>
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
        <a href="{{ route('kategori.index') }}">Kategori Ruangan</a>
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
          <h4 class="card-title">Form Data Kategori Ruangan</h4>
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
                  FORM TAMBAH DATA KATEGORI
                  </span>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                {{-- <p class="small">Create a new row using this form, make sure you fill them all</p> --}}
                <form action="{{ route('kategori.create') }}" method="POST">
                  {{csrf_field()}}
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group form-group-default {{$errors->has('nama_kategori') ? ' has-error' : ''}}">
                        <label>Nama Kategori Ruangan</label>
                      <input id="nama_kategori" name="nama_kategori" type="text" class="form-control" value="{{old('nama_kategori')}}">
                        @if ($errors->has('nama_kategori'))
                          <span class="help-block">{{$errors->first('nama_kategori')}}</span>
                        @endif
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group form-group-default">
                        <label>Deskripsi Kategori Ruangan</label>
                        <textarea class="form-control" required="" rows="6" name="desc_kategori">{{old('desc_kategori')}}</textarea>
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
        <form action="{{ route('kategori.index') }}" method="GET">
          {{csrf_field()}}
        <div class="table-responsive">
          <table id="multi-filter-select" class="display table table-striped table-hover" >
            <thead>
              <tr>
                <th>Nama Kategori</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($data_kategori as $kategori)
              <tr>
                  <td>{{$kategori->nama_kategori}}</td>
                  <td>{{$kategori->desc_kategori}}</td>
                  <td>
                    <div class="form-button-action">
                      <a href="{{ route('kategori.edit', $kategori->id_kategori) }}">
                        <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit">
                          <i class="fa fa-edit"></i>
                        </button>
                      </a>
                      
                        {{-- <button type="button" class="btn btn-success" id="alert_demo_7"> --}}
                      <a href="{{ route('kategori.delete', $kategori->id_kategori) }}">
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
    