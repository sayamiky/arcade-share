@extends('layouts.master')    

 @section('content')
    <!-- Content -->
			 {{-- <h4 class="page-title">Profile User</h4> --}}
          <!-- Card with icon state color-->
					
        <!-- Activity --> 
          <div class="col-md-14">
            <div class="card">
              <div class="card-header">
                <div class="card-head-row">
                  <div class="card-title">Edit Profile</div>
                  <div class="card-tools">
                    {{-- <ul class="nav nav-pills nav-secondary nav-pills-no-bd nav-sm" id="pills-tab" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link" id="pills-today" data-toggle="pill" href="#pills-today" role="tab" aria-selected="true">Pending</a>
                      </li>
                    </ul> --}}
                  </div>
                </div>
              </div>
              <div class="card-body">
                <style>
                  .image-upload > input
                    {
                        display: none;
                    }
                </style>
                <form action="{{ route('dashboard.updatePass', $admin->id) }}" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    {{-- <div class="col-md-2 ml-auto mr-auto">
                    <div class="image-upload"> 
                      <label for="photo">
                        <img src="{{ asset('storage/' . Auth::user()->photo) }}" alt="Photo Profile" class="avatar-img rounded-circle">
                      </label>
                      <input type="file" name="photo" id="photo">
					</div>
                    </div> --}}
                  <br>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group form-group-default">
                                <label>Password</label>
                                <input id="password" name="password" type="password" class="form-control" value="{{$admin->password}}" disabled>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-default">
                                <label>New Password</label>
                                <input id="password" name="password" type="password" class="form-control">
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
        <!-- End Activity --> 
@endsection
     