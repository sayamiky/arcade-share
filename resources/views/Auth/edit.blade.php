{{-- @extends('layouts.master')

@section('content')
<section class="section">
  <h1 class="section-header">
    <div>User</div>
  </h1>
  <div class="section-body">
    <div class="row">
      <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Edit Data User</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('user.update', $user->id) }}" method="POST">
                    {{csrf_field()}}
                    <div class="form-group">
                      <label>Nama Depan</label>
                      <input type="text" class="form-control" id="name" name="name" value="{{$user->name}}">
                      <div class="invalid-feedback">
                        Please fill in the name
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Nama Belakang</label>
                      <input type="text" class="form-control" id="lastname" name="lastname" value="{{$user->lastname}}">
                      <div class="invalid-feedback">
                        Please fill in the name
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Telp</label>
                      <input type="text" class="form-control" id="phone" name="phone" value="{{$user->phone}}">
                      <div class="invalid-feedback">
                        Please fill in the name
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Telp</label>
                      <textarea class="form-control" id="address" name="address" rows="5">{{$user->address}}</textarea>
                      <div class="invalid-feedback">
                        Please fill in the name
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Email</label>
                      <input name="email" type="email" class="form-control" value="{{$user->email}}">
                      <div class="invalid-feedback">
                        Please fill in the name
                      </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
         --}}

@extends('layouts.masteredit')
@section('content')

  <div class="row">
    <div class="col-12 col-md-12 col-lg-11">
      <div class="card">
          <div class="card-header">
              <h4>EDIT DATA USER</h4>
          </div>
          <div class="card-body">
            <form action="{{ route('user.update', $user->id) }}" method="POST">
                {{csrf_field()}}
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group form-group-default">
                      <label>Nama Depan</label>
                    <input id="name" name="name" type="text" class="form-control" value="{{$user->name}}">
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group form-group-default">
                      <label>Nama Belakang</label>
                    <input id="lastname" name="lastname" type="text" class="form-control" value="{{$user->lastname}}">
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group form-group-default">
                      <label>Telp</label>
                    <input id="phone" name="phone" value="{{$user->phone}}" type="text" class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group form-group-default">
                      <label>Email</label>
                      <input name="email" type="email" class="form-control" value="{{$user->email}}">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group form-group-default">
                      <label>Alamat</label>
                      <textarea class="form-control" required="" rows="6" name="address">{{$user->address}}</textarea>
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
                           
    