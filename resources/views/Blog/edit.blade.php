@extends('layouts.masteredit')
@section('content')

    <div class="row">
      <div class="col-12 col-md-12 col-lg-11">
        <div class="card">
            <div class="card-header">
                <h4>EDIT DATA BLOG</h4>
            </div>
            <div class="card-body">
              <form action="{{ route('blog.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group form-group-default">
                      <label>Judul Blog</label>
                      <input id="judul" name="judul" type="text" class="form-control" value="{{$blog->judul}}">
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group form-group-default">
                      <label>Penulis Blog</label>
                      <input id="penulis" name="penulis" type="text" class="form-control" value="{{$blog->penulis}}">
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group form-group-default">
                      <label>kategori Blog</label>
                      <input id="kategori" name="kategori" type="text" class="form-control" value="{{$blog->kategori}}">
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group form-group-default">
                      <label>Lokasi</label>
                      <input id="lokasi" name="lokasi" type="text" class="form-control" value="{{$blog->lokasi}}">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group form-group-default">
                      <label>Deskripsi Blog</label>
                      <textarea class="form-control" required="" rows="6" name="deskripsi">{{$blog->deskripsi}}</textarea>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group form-group-default">
                      <label>Gambar</label>
                      <img src="{{asset('storage/'.$blog->gambar)}}" alt="" height="100">
                      <input id="foto" name="gambar" type="file" class="form-control-file" value="{{$blog->gambar}}">
                    </div>
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
      
        
    