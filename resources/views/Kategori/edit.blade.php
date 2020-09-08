@extends('layouts.masteredit')
@section('content')

    <div class="row">
      <div class="col-12 col-md-12 col-lg-11">
        <div class="card">
            <div class="card-header">
                <h4>EDIT DATA KATEGORI RUANGAN</h4>
            </div>
            <div class="card-body">
              <form action="{{ route('kategori.update', $kategori->id_kategori) }}" method="POST">
                {{csrf_field()}}
                <div class="row">
                    <div class="form-group form-group-default">
                      <label>Nama Kategori Ruangan</label>
                      <input id="nama_kategori" name="nama_kategori" type="text" class="form-control" value="{{$kategori->nama_kategori}}">
                    </div>
                  <div class="form-group form-group-default">
                    <label>Deskripsi Kategori Ruangan</label>
                    <textarea class="form-control" required="" rows="6" name="desc_kategori">{{$kategori->desc_kategori}}</textarea>
                  </div>
              </div>
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
      
        
    