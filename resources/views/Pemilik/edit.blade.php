@extends('layouts.masteredit')
@section('content')

    <div class="row">
      <div class="col-12 col-md-12 col-lg-11">
      <div class="card">
          <div class="card-header">
              <h4>EDIT DATA PEMILIK</h4>
          </div>
          <div class="card-body">
            <form action="{{ route('pemilik.update', $pemilik->id) }}" method="POST">
                {{csrf_field()}}
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group form-group-default">
                      <label>Nama</label>
                    <input id="name" name="name" type="text" class="form-control" value="{{$pemilik->name}}">
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group form-group-default">
                      <label>Telp</label>
                    <input id="phone" name="phone" type="text" class="form-control" value="{{$pemilik->phone}}">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group form-group-default">
                      <label>Alamat</label>
                      <textarea class="form-control" required="" rows="6" name="address">{{$pemilik->address}}</textarea>
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group form-group-default">
                      <label>Email</label>
                      <input name="email" type="email" class="form-control" value="{{$pemilik->email}}">
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
                           
    