@extends('layouts.master')
@section('content')
  <div class="page-header">
    <h4 class="page-title">Pengajuan Ruangan</h4>
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
        <a href="{{ route('transaksisewa.index') }}">Pangajuan Penyewaan Gedung</a>
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
          <h4 class="card-title">Form Data Pengjuan Sewa Ruangan</h4>
        </div>
      </div>
      <div class="card-body">
        <form action="{{ route('transaksisewa.index') }}" method="GET">
          {{csrf_field()}}
        <div class="table-responsive">
          <table id="multi-filter-select" class="display table table-striped table-hover" >
            <thead>
              <tr>
                <th>Tanggal Transaksi</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Telpon</th>
                <th>Alamat</th>
                <th>Tanggal Reservasi</th>
                <th>Nama Ruangan</th>
                <th>Status Reservasi</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($tender as $tender)
                <tr>
                  <td>{{$tender->tgl_transaksi}}</td>
                  <td>{{$tender->nama}}</td>
                  <td>{{$tender->email}}</td>
                  <td>{{$tender->tlp}}</td>
                  <td>{{$tender->alamat}}</td>
                  <td>{{$tender->tgl_reservasi}}</td>
                  <td>{{$tender->ruangan_nama}}</td>
                  <td>
                    @if ($tender->status_reservasi == 1)
                      Diterima
                    @elseif ($tender->status_reservasi == 2)
                        Ditolak
                    @else
                      Pending
                    @endif
                    {{-- {{$tender->status_reservasi}} --}}
                  </td>
                  <td>
                    @if ($tender->status_reservasi == '0')
                      <div class="form-button-action">
                        <form action="{{ route('transaksisewa.decline', $tender->id_transaksi) }}" method="POST">
                          {{csrf_field()}}
                          <button class="btn btn-danger btn-sm"><i class="fa fa-times" value="2"></i></button>
                        </form> 
                        <form action="{{ route('transaksisewa.approve', $tender->id_transaksi) }}" method="POST">
                            {{csrf_field()}}
                        <button class="btn btn-success btn-sm"><i class="fa fa fa-check" value="0"></i></button>
                        </form>
                      </div>  
                    @else
                    {{-- <div class="form-button-action">
                      <a href="{{ route('transaksisewa.approve', $tender->id_transaksi) }}">
                        <button class="btn btn-success btn-sm"><i class="fa fa fa-check"></i></button>
                      </a>
                    </div>  --}}
                    @endif
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
    