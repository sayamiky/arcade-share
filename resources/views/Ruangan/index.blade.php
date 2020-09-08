

@extends('layouts.master')
@section('content')
  <div class="page-header">
    <h4 class="page-title">Ruangan</h4>
    <ul class="breadcrumbs">
      <li class="nav-home">
        <a href="{{ route('dashboard.index') }}">
          <i class="flaticon-home"></i>
        </a>
      </li>
      <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">
        <a href="{{ route('ruangan.index') }}">Ruangan</a>
      </li>
      {{-- <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">
        <a href="#">Datatables</a>
      </li> --}}
    </ul>
  </div>
  <!-- Data Table -->
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        @if (session('sukses'))
            <!-- Alert -->
            {{-- <div class="alert alert-primary alert-has-icon alert-dismissible show fade">
              <div class="alert-icon"><i class="ion ion-ios-lightbulb-outline"></i></div>
              <div class="alert-body">
                <button class="close" data-dismiss="alert">
                  <span>×</span>
                </button>
                <div class="alert-title">{{session('sukses')}}</div>
              </div>
            </div> --}}
            <div class="alert alert-success" role="alert">
              {{session('sukses')}}
            </div>
            <!-- Alert -->
            @endif
        <div class="d-flex align-items-center">
          <h4 class="card-title">Form Data Ruangan</h4>
          <button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
            <i class="fa fa-plus"></i>
            Tambah Data
          </button>
        </div>
      </div>
      <div class="card-body">
        <!-- Modal -->
        <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header no-bd">
                <h5 class="modal-title">
                  <span class="fw-mediumbold">
                    FORM TAMBAH DATA RUANGAN
                  </span>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                {{-- <p class="small">Create a new row using this form, make sure you fill them all</p> --}}
                <form action="{{ route('ruangan.create') }}" method="POST" enctype="multipart/form-data">
                  {{csrf_field()}}
                 <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group form-group-default {{$errors->has('nama_ruangan') ? ' has-error' : ''}}">
                        <label>Nama Ruangan</label>
                        <input id="nama_ruangan" name="nama_ruangan" type="text" class="form-control" value="{{old('nama_ruangan')}}">
                         @if ($errors->has('nama_ruangan'))
                        <span class="help-block">{{$errors->first('nama_ruangan')}}</span>
                        @endif
                      </div>
                    </div>
                    <div class="col-md-6 pr-0">
                      <div class="form-group form-group-default"> 
                        <label for="smallSelect">Kategori Ruangan</label>
                            <select name="kategori_id_kategori" id="kategori_id_kategori" class="form-control form-control-sm">
                                @foreach ($kategori as $c)
                                  <option value="{{$c->id_kategori}}">{{$c->nama_kategori}}</option>
                                @endforeach
                            </select>
                        {{-- <input id="kategori_id_kategori" name="kategori_id_kategori" type="text" class="form-control"> --}}
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group form-group-default">
                        {{-- <label>Pemilik</label> --}}
                        {{-- <input id="pemilik_id" name="pemilik_id" type="text" class="form-control"> --}}
                        <label for="smallSelect">Pemilik Ruangan</label>
                            <select name="pemilik_id" id="pemilik_id" class="form-control form-control-sm">
                                @foreach ($pemilik as $p)
                                  <option value="{{$p->id}}">{{$p->name}}</option>
                                @endforeach
                            </select>
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="form-group form-group-default {{$errors->has('harga') ? ' has-error' : ''}}">
                        <label>Harga Ruangan</label>
                        <input id="harga" name="harga" type="text" class="form-control" value="{{old('harga')}}">
                         @if ($errors->has('harga'))
                        <span class="help-block">{{$errors->first('harga')}}</span>
                        @endif
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="form-group form-group-default {{$errors->has('layout') ? ' has-error' : ''}}">
                        <label>Layout Ruangan</label>
                        <input id="layout" name="layout" type="file" class="form-control-file">
                        @if ($errors->has('layout'))
                        <span class="help-block">{{$errors->first('layout')}}</span>
                        @endif
                      </div>
                    </div>
                    <div class="col-md-6 pr-0">
                      <div class="form-group form-group-default {{$errors->has('ukuran') ? ' has-error' : ''}}">
                        <label>Ukuran Ruangan</label>
                        <input id="ukuran" name="ukuran" type="text" class="form-control" value="{{old('ukuran')}}">
                         @if ($errors->has('ukuran'))
                        <span class="help-block">{{$errors->first('ukuran')}}</span>
                        @endif
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group form-group-default {{$errors->has('kapasitas') ? ' has-error' : ''}}">
                        <label>Kapasitas Ruangan</label>
                        <input id="kapasitas" name="kapasitas" type="text" class="form-control" value="{{old('kapasitas')}}">
                         @if ($errors->has('kapasitas'))
                        <span class="help-block">{{$errors->first('kapasitas')}}</span>
                        @endif
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="form-group form-group-default {{$errors->has('fasilitas') ? ' has-error' : ''}}">
                        <label>Fasilitas</label>
                      <input data-role="tagsinput" id="fasilitas" name="fasilitas" type="text" class="form-control" >
                        @if ($errors->has('fasilitas'))
                          <span class="help-block">{{$errors->first('fasilitas')}}</span>
                        @endif
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="form-group form-group-default {{$errors->has('peraturan') ? ' has-error' : ''}}">
                        <label>Peraturan</label>
                      <input data-role="tagsinput" id="peraturan" name="peraturan" type="text" class="form-control" >
                        @if ($errors->has('peraturan'))
                          <span class="help-block">{{$errors->first('peraturan')}}</span>
                        @endif
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group form-group-default {{$errors->has('lokasi') ? ' has-error' : ''}}">
                        <label>Lokasi</label>
                        <input id="lokasi" name="lokasi" type="text" class="form-control" value="{{old('lokasi')}}">
                         @if ($errors->has('lokasi'))
                        <span class="help-block">{{$errors->first('lokasi')}}</span>
                        @endif
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group form-group-default {{$errors->has('alamat_ruangan') ? ' has-error' : ''}}">
                        <label>Alamat Ruangan</label>
                        <textarea class="form-control" required="" rows="3" name="alamat_ruangan">{{old('alamat_ruangan')}}</textarea>
                         @if ($errors->has('alamat_ruangan'))
                        <span class="help-block">{{$errors->first('alamat_ruangan')}}</span>
                        @endif
                      </div>
                    </div>
                    <div class="col-md-6 pr-0">
                      <div class="form-group form-group-default">
                        <label>Provinsi</label>
                        {{-- <select id="provinsi" name="provinsi" class="form-control" >
                          <option value="" selected disabled>Select</option>
                            @foreach($provinsi as $key => $provinsi)
                            <option value="{{$key}}"> {{$provinsi}}</option>
                            @endforeach
                        </select> --}}
                        <input id="provinsi" name="provinsi" type="text" class="form-control">
                         
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group form-group-default">
                        <label>Kabupaten</label>
                        {{-- <select id="kabupaten" name="kabupaten" class="form-control">
                        </select> --}}
                        <input id="kabupaten" name="kabupaten" type="text" class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="form-group form-group-default">
                        <label>Kecamatan</label>
                        {{-- <select name="kecamatan" id="kecamatan" class="form-control">
                        </select> --}}
                        <input id="kecamatan" name="kecamatan" type="text" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group form-group-default {{$errors->has('deskripsi') ? ' has-error' : ''}}">
                        <label>Deskripsi Ruangan</label>
                        <textarea class="form-control" required="" rows="6" name="deskripsi">{{old('deskripsi')}}</textarea>
                         @if ($errors->has('deskripsi'))
                        <span class="help-block">{{$errors->first('deskripsi')}}</span>
                        @endif
                      </div>
                    </div>
                    {{-- <div class="col-md-6">
                      <div class="form-group form-group-default">
                        <label>Fasilitas</label>
                        <input id="fasilitas" name="kapasitas" type="text" class="form-control" data-role="tagsinput" value="{{old('kapasitas')}}">
                      </div>
                    </div> --}}
                    <div class="col-sm-12">
                      <div class="form-group form-group-default {{$errors->has('foto') ? ' has-error' : ''}}">
                        <label>Foto</label>
                        <input id="foto" name="foto" type="file" class="form-control-file">
                        @if ($errors->has('foto'))
                        <span class="help-block">{{$errors->first('foto')}}</span>
                        @endif
                      </div>
                    </div>
                  </div>
              </div>
              <div class="modal-footer no-bd">
                <button type="reset" class="btn btn-danger">Reset</button>
                <button type="submit" id="addRowButton" class="btn btn-primary">Tambah</button>
              </div>
            </form>
            </div>
          </div>
        </div>
       
        <!-- Modal -->
        <form action="{{ route('ruangan.index') }}" method="GET">
          {{csrf_field()}}
        <div class="table-responsive">
          <table id="multi-filter-select" class="display table table-striped table-hover" >
            <thead>
              <tr>
                <th>Nama</th>
                <th>Kategori</th>
                <th>Pemilik</th>
                <th>Harga</th>
                <th>Ukuran</th>
                <th>Kapasitas</th>
                <th>Alamat</th>
                <th>Kecamatan</th>
                <th>Kabupaten</th>
                <th>Provinsi</th>
                <th>Deskripsi</th>
                <th>Foto</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($data_ruangan as $ruangan)
              <tr>
                  <td>{{$ruangan->nama_ruangan}}</td>
                  <td>{{$ruangan->kategori_id_kategori}}</td>
                  <td>{{$ruangan->pemilik_id}}</td>
                  <td>{{$ruangan->harga}}</td>
                  <td>{{$ruangan->ukuran}}</td>
                  <td>{{$ruangan->kapasitas}}</td>
                  <td>{{$ruangan->alamat_ruangan}}</td>
                  <td>{{$ruangan->kecamatan}}</td>
                  <td>{{$ruangan->kabupaten}}</td>
                  <td>{{$ruangan->provinsi}}</td>
                  <td>{{$ruangan->deskripsi}}</td>
              <td><img src="{{asset('storage/'.$ruangan->foto)}}" alt="" height="50"></td>
                  {{-- <td>
                    <a href="{{ route('ruangan.edit', $ruangan->id_ruangan) }}" class="btn btn-sm btn-warning"><i class="ion ion-android-create"></i></a>
                    <a href="{{ route('ruangan.delete', $ruangan->id_ruangan) }}" class="btn btn-sm btn-danger" onclick="return confirm ('Hapus data ini?')"><i class="ion ion-trash-a"></i></a>
                  </td> --}}
                  <td>
                    <div class="form-button-action">
                      <a href="{{ route('ruangan.edit', $ruangan->id_ruangan) }}">
                        <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit">
                          <i class="fa fa-edit"></i>
                        </button>
                      </a>
                      
                        {{-- <button type="button" class="btn btn-success" id="alert_demo_7"> --}}
                      <a href="{{ route('ruangan.delete', $ruangan->id_ruangan) }}">
                          <button type="button" data-toggle="tooltip" class="btn btn-link btn-danger" id="alert_demo_7" data-original-title="Delete">
                          <i class="fa fa-times"></i>
                        </button>
                      </a>
                    </div>
                  </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </form>
      </div>
    </div>
  </div>
  <script type="text/javascript">
    $('#provinsi').change(function(){
    var provinsiID = $(this).val();    
    if(provinsiID){
        $.ajax({
          type:"GET",
          url:"{{url('/admin/get-kabupaten-list')}}?provinsi_id="+provinsiID,
          success:function(res){               
            if(res){
                $("#kabupaten").empty();
                $("#kabupaten").append('<option>Select</option>');
                $.each(res,function(key,value){
                    $("#kabupaten").append('<option value="'+key+'">'+value+'</option>');
                });
          
            }else{
              $("#kabupaten").empty();
            }
          }
        });
    }else{
        $("#kabupaten").empty();
        $("#kecamatan").empty();
    }      
  });
    $('#kabupaten').on('change',function(){
    var kabupatenID = $(this).val();    
    if(kabupatenID){
        $.ajax({
          type:"GET",
          url:"{{url('/admin/get-kecamatan-list')}}?kabupaten_id="+kabupatenID,
          success:function(res){               
            if(res){
                $("#kecamatan").empty();
                $.each(res,function(key,value){
                    $("#kecamatan").append('<option value="'+key+'">'+value+'</option>');
                });
          
            }else{
              $("#kecamatan").empty();
            }
          }
        });
    }else{
        $("#kecamatan").empty();
    }
        
  });
</script>
  <!-- Data Table -->
@endsection