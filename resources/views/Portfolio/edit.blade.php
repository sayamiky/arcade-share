@extends('layouts.masteredit')
@section('content')

    <div class="row">
      <div class="col-12 col-md-12 col-lg-11">
        <div class="card">
            <div class="card-header">
                <h4>EDIT DATA PORTFOLIO</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('portfolio.update', $port->id) }}" method="POST" enctype="multipart/form-data">
                  {{csrf_field()}}
                    <div class="form-group form-group-default">
                      <label>Judul</label>
                      <input id="judul" name="judul" type="text" class="form-control" value="{{$port->judul}}">
                    </div>
                    <div class="form-group form-group-default">
                      <label>Kategori</label>
                      <input id="kategori" name="kategori" type="text" class="form-control" value="{{$port->kategori}}">
                    </div>
                    <div class="form-group form-group-default">
                      <label>Gambar Pertama</label>
                      <img src="{{asset('storage/'.$port->gambar_1)}}" alt="" height="100">
                      <input id="gambar_1" name="gambar_1" type="file" class="form-control-file" value="{{$port->gambar_1}}">
                    </div>
                    <div class="form-group form-group-default">
                      <label>Gambar Kedua</label>
                      <img src="{{asset('storage/'.$port->gambar_2)}}" alt="" height="100">
                      <input id="gambar_2" name="gambar_2" type="file" class="form-control-file" value="{{$port->gambar_2}}">
                    </div>
                    <div class="form-group form-group-default">
                      <label>Link</label>
                      <input id="link" name="link" type="text" class="form-control" value="{{$port->link}}">
                    </div>
                  <div class="modal-footer no-bd">
                    <button type="submit" id="addRowButton" class="btn btn-primary">Simpan</button>
                  </div>
                </form>
            </div>
        </div>
      </div>
    </div>
  
@endsection
        
    