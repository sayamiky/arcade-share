@extends('layouts.masteredit')
@section('content')
<div class="col-12 col-md-12 col-lg-11">
    <div class="card">
        <div class="card-header">
            <div class="card-title">Pengajuan Penyewaan Gedung</div>
        </div>
        <div class="card-body"> 
            {{-- {{dd($tender)}} --}}
            <ol class="activity-feed">
                <li class="feed-item feed-item-secondary">
                    <time class="date" datetime="9-25">Tanggal Transaksi</time>
                    <span class="text">{{$tender->tgl_transaksi}}</span>
                </li>
                <li class="feed-item feed-item-success">
                    <time class="date" datetime="9-24">Nama</time>
                    <span class="text">{{$tender->nama}}</span>
                </li>
                <li class="feed-item feed-item-info">
                    <time class="date" datetime="9-23">Email</time>
                    <span class="text">{{$tender->email}}</span>
                </li>
                <li class="feed-item feed-item-warning">
                    <time class="date" datetime="9-21">Alamat</time>
                    <span class="text">{{$tender->alamat}}</span>
                </li>
                <li class="feed-item feed-item-danger">
                    <time class="date" datetime="9-18">Tanggal Reservasi</time>
                    <span class="text">{{$tender->tgl_reservasi}}</span>
                </li>
                <li class="feed-item">
                    <time class="date" datetime="9-17">Nama Ruangan</time>
                    <span class="text">{{$tender->id_ruangan}}</span>
                </li>
            </ol>

                <form action="{{ route('tender.update', $tender->id_transaksi) }}" method="POST">
                    {{csrf_field()}}
                    <div class="row">
                      <div class="col-sm-12">
                        {{-- <div class="form-group form-group-default">
                          <label>Nama Depan</label>
                        <input id="name" name="name" type="text" class="form-control" value="{{$tender->status}}">
                        </div> --}}
                        <div class="form-group">
                            <label for="smallSelect">Ubah Status</label>
                            <select class="form-control form-control-sm" id="status_reservasi" name="status_reservasi">
                                <option value="{{$tender->status_reservasi}}">Terima</option>
                                <option value="2">Tolak</option>
                            </select>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer no-bd">
                    <button type="submit" id="addRowButton" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
                {{-- {{dd($tenderjoin)}} --}}
                {{-- <form action="{{ route('transaksisewa.index') }}" method="GET">
                {{csrf_field()}}
                    @foreach ($tender as $t)
                        @if ($tender->id_transaksi == $tender->$tenderjoin)
                            <li class="feed-item feed-item-secondary">
                                <time class="date" datetime="9-25">Tanggal Transaksi</time>
                                <span class="text">{{$t->tgl_transaksi}}</span>
                            </li>
                            <li class="feed-item feed-item-success">
                                <time class="date" datetime="9-24">Nama</time>
                                <span class="text">{{$t->nama}}</span>
                            </li>
                            <li class="feed-item feed-item-info">
                                <time class="date" datetime="9-23">Email</time>
                                <span class="text">{{$t->email}}</span>
                            </li>
                        @else
                        
                        @endif
                    @endforeach
                </form> --}}
                {{-- 
                
                <li class="feed-item feed-item-warning">
                    <time class="date" datetime="9-21">Alamat</time>
                    <span class="text">{{$tender->alamat}}</span>
                </li>
                <li class="feed-item feed-item-danger">
                    <time class="date" datetime="9-18">Tanggal Reservasi</time>
                    <span class="text">{{$tender->tgl_reservasi}}</span>
                </li>
                <li class="feed-item">
                    <time class="date" datetime="9-17">Nama Ruangan</time>
                    <span class="text">{{$tender->ruangan_nama}}</span>
                </li>
                <form action="{{ route('tender.update', $tender->id_transaksi) }}" method="POST">
                    {{csrf_field()}}
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="form-group form-group-default">
                          <label>Nama Depan</label>
                        <input id="name" name="name" type="text" class="form-control" value="{{$tender->status}}">
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer no-bd">
                    <button type="submit" id="addRowButton" class="btn btn-primary">Simpan</button>
                    </div>
                </form> --}}
            
        </div>
    </div>
</div>
@endsection 
