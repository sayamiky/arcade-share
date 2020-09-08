@extends('layouts.masteredit')
@section('content')

    <div class="row">
      <div class="col-12 col-md-12 col-lg-11">
        <div class="card">
            <div class="card-header">
                <h4>EDIT DATA EXTRA</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('extra.update', $extra->id) }}" method="POST" enctype="multipart/form-data">
                  {{csrf_field()}}
                    <div class="form-group form-group-default">
                      <label>Nama Extra</label>
                      <input id="nama_extra" name="nama_extra" type="text" class="form-control" value="{{$extra->nama_extra}}">
                    </div>
                    <div class="form-group form-group-default">
                      <label>Harga</label>
                      <input id="harga" name="harga" type="text" class="form-control" value="{{$extra->harga}}">
                    </div>
                    <div class="form-group form-group-default">
                      <label>Foto</label>
                      <img src="{{asset('extra/'.$extra->foto)}}" alt="" height="100">
                      <input id="foto" name="foto" type="file" class="form-control-file" value="{{$extra->foto}}">
                    </div>
                      <div class="form-group form-group-default">
                        <label>Deskripsi Extra</label>
                        <textarea class="form-control" required="" rows="6" name="desc_extra">{{$extra->desc_extra}}</textarea>
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
        
    