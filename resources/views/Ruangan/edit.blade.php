@extends('layouts.masteredit')
@section('content')

    <div class="row">
      <div class="col-12 col-md-12 col-lg-11">
        <div class="card">
            <div class="card-header">
                <h4>EDIT DATA RUANGAN</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('ruangan.update', $ruangan->id_ruangan) }}" method="POST" enctype="multipart/form-data">
                  {{csrf_field()}}
                    <div class="form-group form-group-default">
                      <label>Nama Ruangan</label>
                      <input id="nama_ruangan" name="nama_ruangan" type="text" class="form-control" value="{{$ruangan->nama_ruangan}}">
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group form-group-default">
                          <label for="smallSelect">Kategori Ruangan</label>
                            <select name="kategori_id_kategori" id="kategori_id_kategori" class="form-control form-control-sm">
                                @foreach ($kategori as $c)
                                  <option value="{{$c->id_kategori}}"
                                          @if ($c->id_kategori == $ruangan->kategori_id_kategori)
                                              selected
                                          @endif
                                    >{{$c->nama_kategori}}</option>
                                @endforeach
                            </select>
                          {{-- <label>Kategori Ruangan</label>
                          <input id="kategori_id_kategori" name="kategori_id_kategori" type="text" class="form-control" value="{{$ruangan->kategori_id_kategori}}"> --}}
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group form-group-default">
                          {{-- <label>Pemilik</label> --}}
                          <label for="smallSelect">Pemilik Ruangan</label>
                            <select name="pemilik_id" id="pemilik_id" class="form-control form-control-sm">
                                @foreach ($pemilik as $p)
                                  <option value="{{$p->id}}" 
                                          @if ($p->id == $ruangan->pemilik_id)
                                              selected
                                          @endif
                                    >{{$p->name}}</option>
                                @endforeach
                            </select>
                          {{-- <input id="pemilik_id" name="pemilik_id" type="text" class="form-control" value="{{$ruangan->pemilik_id}}"> --}}
                        </div>
                      </div>
                    </div>
                  <div class="form-group form-group-default">
                    <label>Harga Ruangan</label>
                    <input id="harga" name="harga" type="text" class="form-control" value="{{$ruangan->harga}}">
                  </div>
                  <div class="form-group form-group-default">
                    <label>Layout</label>
                    <img src="{{asset('storage/'.$ruangan->layout)}}" alt="" height="100">
                    <input id="layout" name="layout" type="file" class="form-control-file" value="{{$ruangan->layout}}">
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group form-group-default">
                        <label>Ukuran Ruangan</label>
                        <input id="ukuran" name="ukuran" type="text" class="form-control" value="{{$ruangan->ukuran}}">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group form-group-default">
                        <label>Kapasitas Ruangan</label>
                        <input id="kapasitas" name="kapasitas" type="text" class="form-control" value="{{$ruangan->kapasitas}}">
                      </div>
                    </div>
                  </div>
                  <div class="form-group form-group-default">
                    <label>Fasilitas</label>
                    <input id="fasilitas" name="fasilitas" type="text" class="form-control" value="{{$ruangan->fasilitas}}">
                  </div>
                  <div class="form-group form-group-default">
                    <label>Peraturan</label>
                    <input id="peraturan" name="peraturan" type="text" class="form-control" value="{{$ruangan->peraturan}}">
                  </div>
                  <div class="form-group form-group-default">
                    <label>Lokasi</label>
                    <input id="lokasi" name="lokasi" type="text" class="form-control" value="{{$ruangan->lokasi}}">
                  </div>
                    <div class="form-group form-group-default">
                      <label>Alamat Ruangan</label>
                      <textarea class="form-control" required="" rows="3" name="alamat_ruangan">{{$ruangan->alamat_ruangan}}</textarea>
                    </div>
                    <div class="form-group form-group-default">
                      <label>Provinsi</label>
                      <input id="provinsi" name="provinsi" type="text" class="form-control" value="{{$ruangan->provinsi}}">
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group form-group-default">
                          <label>Kabupaten</label>
                          <input id="kabupaten" name="kabupaten" type="text" class="form-control" value="{{$ruangan->kabupaten}}">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group form-group-default">
                          <label>Kecamatan</label>
                          <input id="kecamatan" name="kecamatan" type="text" class="form-control" value="{{$ruangan->kecamatan}}">
                        </div>
                      </div>
                    </div>
                    <div class="form-group form-group-default">
                      <label>Deskripsi Ruangan</label>
                      <textarea class="form-control" required="" rows="6" name="deskripsi">{{$ruangan->deskripsi}}</textarea>
                    </div>
                    <div class="form-group form-group-default">
                      <label>Foto</label>
                      <img src="{{asset('storage/'.$ruangan->foto)}}" alt="" height="100">
                      <input id="foto" name="foto" type="file" class="form-control-file" value="{{$ruangan->foto}}">
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
        
    