<div class="row">
    <div class="col-12 col-md-12 col-lg-11">
      <div class="card">
          <div class="card-header">
              <h4>EDIT DATA USER</h4>
          </div>
          <div class="card-body">
            <form action="{{ route('profile.update', $profile->id) }}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group form-group-default">
                      <label>Nama Depan</label>
                    <input id="name" name="name" type="text" class="form-control" value="{{$profile->name}}">
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group form-group-default">
                      <label>Nama Belakang</label>
                    <input id="lastname" name="lastname" type="text" class="form-control" value="{{$profile->lastname}}">
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group form-group-default">
                      <label>Telp</label>
                    <input id="phone" name="phone" value="{{$profile->phone}}" type="text" class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group form-group-default">
                      <label>Email</label>
                      <input name="email" type="email" class="form-control" value="{{$profile->email}}">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group form-group-default">
                      <label>Alamat</label>
                      <textarea class="form-control" required="" rows="6" name="address">{{$profile->address}}</textarea>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group form-group-default">
                      <label>Foto Profile</label>
                      <input type="file" name="photo" id="photo" class="form-control-file"  value="{{$profile->photo}}">
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