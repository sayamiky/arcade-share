{{-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" name="viewport">
  <title>Manage Arcade Dashboard</title>

  <link rel="stylesheet" href="{{asset('dist/modules/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('dist/modules/ionicons/css/ionicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('dist/modules/fontawesome/web-fonts-with-css/css/fontawesome-all.min.css')}}">

  <link rel="stylesheet" href="{{asset('dist/modules/summernote/summernote-lite.css')}}">
  <link rel="stylesheet" href="{{asset('dist/modules/flag-icon-css/css/flag-icon.min.css')}}">
  <link rel="stylesheet" href="{{asset('dist/css/demo.css')}}">
  <link rel="stylesheet" href="{{asset('dist/css/style.css')}}"> --}}
  {{-- <link rel="stylesheet" href="https://unpkg.com/sweetalert/dist/sweetalert.min.js"> --}}
  {{-- <script type="text/javascript" src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> --}}
  {{-- <link rel="icon" type="image/png" sizes="96x96" href="{{asset('logo.png')}}">
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="ion ion-navicon-round"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="ion ion-search"></i></a></li>
          </ul> --}}
          {{-- <div class="search-element">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search">
            <button class="btn" type="submit"><i class="ion ion-search"></i></button>
          </div> --}}
        {{-- </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg">
            <i class="ion ion-android-person d-lg-none"></i>
            <div class="d-sm-none d-lg-inline-block">Hi, {{ Auth::user()->name }} </div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <a href="profile.html" class="dropdown-item has-icon">
                <i class="ion ion-android-person"></i> Profile
              </a>
              <a href="{{ route('admin.logout') }}" class="dropdown-item has-icon">
                <i class="ion ion-log-out"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
              <a>Arcade Lite</a>
          </div>
          <div class="sidebar-user">
            <div class="sidebar-user-picture">
              <img alt="image" src="{{asset('dist/user2.png')}}">
            </div>
            <div class="sidebar-user-details">
              <div class="user-name">{{ Auth::user()->name }}</div>
              <div class="user-role">
                Administrator
              </div>
            </div>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="active">
              <a href="{{ route('dashboard.index') }}"><i class="ion ion-speedometer"></i><span>Dashboard</span></a>
            </li>
            <li>
              <a href="{{ route('ruangan.index') }}"><i class="ion ion-clipboard"></i><span>Ruangan</span></a>
            </li>
            <li>
              <a href="{{ route('kategori.index') }}"><i class="ion ion-flag"></i><span>Kategori Ruangan</span></a>
            </li>
            <li>
            <a href="{{ route('ulasan.index') }}"><i class="ion ion-ios-star"></i><span>Review</span></a>
            </li>
            <li>
              <a href=""><i class="ion ion-cash"></i> <span>Transaksi</span></a>
            </li>
            <li>
              <a href="#" class="has-dropdown"><i class="ion ion-ios-albums-outline"></i><span>User Manajemen</span></a>
              <ul class="menu-dropdown">
                <li><a href="{{ route('administrator.index') }}"><i class="ion ion-ios-circle-outline"></i> Administrator</a></li>
                <li><a href="/ownerset"><i class="ion ion-ios-circle-outline"></i> Pemilik Gedung</a></li>
                <li><a href="{{ route('user.index') }}"><i class="ion ion-ios-circle-outline"></i> User</a></li>
              </ul>
            </li>
          </ul>
        </aside>
      </div>
    <div class="main-content">
        @yield('content')
    </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2020 <div class="bullet"></div> Powered <b>ARCADE</b></a>
        </div>
        <div class="footer-right"></div>
      </footer>
    </div>
  </div>

  <script src="{{asset('dist/modules/jquery.min.js')}}"></script>
  <script src="{{asset('dist/modules/popper.js')}}"></script>
  <script src="{{asset('dist/modules/tooltip.js')}}"></script>
  <script src="{{asset('dist/modules/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('dist/modules/nicescroll/jquery.nicescroll.min.js')}}"></script>
  <script src="{{asset('dist/modules/scroll-up-bar/dist/scroll-up-bar.min.js')}}"></script>
  <script src="{{asset('dist/js/sa-functions.js')}}"></script>
  
  <script src="{{asset('dist/modules/chart.min.js')}}"></script>
  <script src="{{asset('dist/modules/summernote/summernote-lite.js')}}"></script>
  <script src="{{asset('dist/js/scripts.js')}}"></script>
  <script src="{{asset('dist/js/custom.js')}}"></script>
  <script src="{{asset('dist/js/demo.js')}}"></script>
  
  
</body>
</html> --}}

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Manage Arcade Dashboard</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="{{asset('logo.png')}}" type="image/x-icon"/>
  
  <!-- Fonts and icons -->
  <script src="{{asset('assets/js/plugin/webfont/webfont.min.js')}}"></script>
  <script>
    WebFont.load({
      google: {"families":["Lato:300,400,700,900"]},
      custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['../../assets/css/fonts.min.css']},
      active: function() {
        sessionStorage.fonts = true;
      }
    });
  </script>

  <!-- CSS Files -->
  <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/atlantis.min.css')}}">
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link rel="stylesheet" href="{{asset('assets/css/demo.css')}}">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" />
	<script src="http://demo.itsolutionstuff.com/plugin/jquery.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.js"></script>


</head>
<body data-background-color="dark">
  <div class="wrapper sidebar_minimize">
    <div class="main-header">
      <!-- Logo Header -->
      <div class="logo-header" data-background-color="dark2">
        <a class="logo">
          <img src="{{asset('text-logo-lgw.png')}}" alt="navbar brand" class="navbar-brand">
        </a>
        <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon">
            <i class="icon-menu"></i>
          </span>
        </button>
        <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
        <div class="nav-toggle">
          <button class="btn btn-toggle toggle-sidebar">
            <i class="icon-menu"></i>
          </button>
        </div>
      </div>
      <!-- End Logo Header -->

      <!-- Navbar Header -->
      <nav class="navbar navbar-header navbar-expand-lg" data-background-color="dark">			
        <div class="container-fluid">
          {{-- <div class="collapse" id="search-nav">
            <form class="navbar-left navbar-form nav-search mr-md-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <button type="submit" class="btn btn-search pr-1">
                    <i class="fa fa-search search-icon"></i>
                  </button>
                </div>
                <input type="text" placeholder="Search ..." class="form-control">
              </div>
            </form>
          </div> --}}
          <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
           <li class="nav-item dropdown hidden-caret">
             <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 <i>Hi, {{ Auth::user()->name }}</i>
             </a>
           </li>
            <li class="nav-item dropdown hidden-caret">
              <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
                <div class="avatar-sm">
                 <img src="{{ asset('storage/' . Auth::user()->photo) }}" alt="..." class="avatar-img rounded-circle">
               </div>
              </a>
              <ul class="dropdown-menu dropdown-user animated fadeIn">
                <div class="dropdown-user-scroll scrollbar-outer">
                  <li>
                   <div class="user-box">
                     <div class="avatar-lg"><img src="{{ asset('storage/' . Auth::user()->photo) }}" alt="image profile" class="avatar-img rounded"></div>
                       <div class="u-text">
                           <h4>{{ Auth::user()->name }}</h4>
                           <p class="text-muted">{{ Auth::user()->email }}</p>
                       </div>
                   </div>
                  </li>
                  <li>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('dashboard.editProfile', Auth::user()->id) }}">Profil</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('dashboard.editPass', Auth::user()->id) }}">Pengaturan Akun</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('admin.logout') }}">Keluar</a>
                  </li>
                </div>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
      <!-- End Navbar -->
    </div>
    <!-- Sidebar -->
    <div class="sidebar sidebar-style-2" data-background-color="dark2">
      <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
         <ul class="nav nav-primary">
           <li class="nav-item">
             <a href="{{ route('dashboard.index') }}">
                 <i class="fas fa-home"></i>
                 <p>Dashboard</p>
             </a>
           </li>
           <li class="nav-section">
               <span class="sidebar-mini-icon">
                   <i class="fa fa-ellipsis-h"></i>
               </span>
               <h4 class="text-section">Components</h4>
           </li>
           <li class="nav-item">
             <a href="{{ route('ruangan.index') }}">
                 <i class="far fa-building"></i>
                 <p>Ruangan</p>
             </a>
           </li>
           <li class="nav-item">
             <a href="{{ route('kategori.index') }}">
                 <i class="fas fa-clipboard-list"></i>
                 <p>Kategori Ruangan</p>
             </a>
           </li>
           <li class="nav-item">
             <a href="{{ route('ulasan.index') }}">
                 <i class="fas fa-star"></i>
                 <p>Ulasan</p>
             </a>
           </li>
           <li class="nav-item">
            <a data-toggle="collapse" href="#base" class="collapsed" aria-expanded="false">
              <i class="fas fa-dollar-sign"></i>
              <p>Transaksi</p>
              <span class="caret"></span>
            </a>
            <div class="collapse" id="base" style="">
              <ul class="nav nav-collapse">
                <li>
                  <a href="{{ route('transaksisewa.index') }}">
                    <span class="sub-item">Pengajuan Sewa</span>
                  </a>
                </li>
                <li>
                  <a href="components/buttons.html">
                    <span class="sub-item">Pembayaran</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
           <li class="nav-item">
            <a href="{{ route('blog.index') }}">
                <i class="fas fa-th"></i>
                <p>Blog</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('portfolio.index') }}">
                <i class="fab fa-accusoft"></i>
                <p>Portfolio</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('extra.index') }}">
                <i class="fas fa-concierge-bell"></i>
                <p>Extra</p>
            </a>
          </li>
            {{-- <li class="nav-item">
              <a data-toggle="collapse" href="#sidebarLayouts" class="collapsed" aria-expanded="false">
                <i class="fas fa-layer-group"></i>
                <p>User Managemen</p>
                <span class="caret"></span>
              </a>
              <div class="collapse show" id="sidebarLayouts">
                <ul class="nav nav-collapse">
                  <li>
                    <a href="{{ route('administrator.index') }}">
                        <span class="sub-item">Administrator</span>
                    </a>
                  </li>
                  <li>
                      <a href="{{ route('pemilik.index') }}">
                          <span class="sub-item">Pemilik</span>
                      </a>
                  </li>
                  <li>
                      <a href="{{ route('user.index') }}">
                          <span class="sub-item">Pengguna</span>
                      </a>
                  </li>
                </ul>
              </div>
            </li> --}}
            <li class="nav-item">
              <a data-toggle="collapse" href="#forms">
                <i class="fas fa-layer-group"></i>
                <p>User Managemen</p>
                <span class="caret"></span>
              </a>
              <div class="collapse" id="forms">
                <ul class="nav nav-collapse">
                  <li>
                    <a href="{{ route('administrator.index') }}">
                        <span class="sub-item">Administrator</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{ route('pemilik.index') }}">
                        <span class="sub-item">Pemilik</span>
                    </a>
                  </li>
                  <li>
                      <a href="{{ route('user.index') }}">
                          <span class="sub-item">Pengguna</span>
                      </a>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- Sidebar -->
    <div class="main-panel">
      <div class="content">
				<div class="page-inner">
          @yield('content')
        </div>
      </div>
    <footer class="footer">
      <div class="container-fluid">
        <nav class="pull-left">
          <ul class="nav">
            <li class="nav-item">
              Powered By <b>ATLANTIS</b>
            </li>
          </ul>
        </nav>
        <div class="copyright ml-auto">
          Copyright &copy; 2020 <div class="bullet"></div> 
        </div>				
      </div>
    </footer>
  </div>
  <!-- Content --> 

   <!-- Custom template | don't include it in your project! -->
   <div class="custom-template">
     <div class="title">Settings</div>
     <div class="custom-content">
       <div class="switcher">
         <div class="switch-block">
           <h4>Logo Header</h4>
           <div class="btnSwitch">
             <button type="button" class="changeLogoHeaderColor" data-color="dark"></button>
             <button type="button" class="changeLogoHeaderColor" data-color="blue"></button>
             <button type="button" class="selected changeLogoHeaderColor" data-color="purple"></button>
             <button type="button" class="changeLogoHeaderColor" data-color="light-blue"></button>
             <button type="button" class="changeLogoHeaderColor" data-color="green"></button>
             <button type="button" class="changeLogoHeaderColor" data-color="orange"></button>
             <button type="button" class="changeLogoHeaderColor" data-color="red"></button>
             <button type="button" class="changeLogoHeaderColor" data-color="white"></button>
             <br/>
             <button type="button" class="changeLogoHeaderColor" data-color="dark2"></button>
             <button type="button" class="changeLogoHeaderColor" data-color="blue2"></button>
             <button type="button" class="changeLogoHeaderColor" data-color="purple2"></button>
             <button type="button" class="changeLogoHeaderColor" data-color="light-blue2"></button>
             <button type="button" class="changeLogoHeaderColor" data-color="green2"></button>
             <button type="button" class="changeLogoHeaderColor" data-color="orange2"></button>
             <button type="button" class="changeLogoHeaderColor" data-color="red2"></button>
           </div>
         </div>
         <div class="switch-block">
           <h4>Navbar Header</h4>
           <div class="btnSwitch">
             <button type="button" class="changeTopBarColor" data-color="dark"></button>
             <button type="button" class="changeTopBarColor" data-color="blue"></button>
             <button type="button" class="changeTopBarColor" data-color="purple"></button>
             <button type="button" class="changeTopBarColor" data-color="light-blue"></button>
             <button type="button" class="changeTopBarColor" data-color="green"></button>
             <button type="button" class="changeTopBarColor" data-color="orange"></button>
             <button type="button" class="changeTopBarColor" data-color="red"></button>
             <button type="button" class="changeTopBarColor" data-color="white"></button>
             <br/>
             <button type="button" class="changeTopBarColor" data-color="dark2"></button>
             <button type="button" class="changeTopBarColor" data-color="blue2"></button>
             <button type="button" class="selected changeTopBarColor" data-color="purple2"></button>
             <button type="button" class="changeTopBarColor" data-color="light-blue2"></button>
             <button type="button" class="changeTopBarColor" data-color="green2"></button>
             <button type="button" class="changeTopBarColor" data-color="orange2"></button>
             <button type="button" class="changeTopBarColor" data-color="red2"></button>
           </div>
         </div>
         <div class="switch-block">
           <h4>Sidebar</h4>
           <div class="btnSwitch">
             <button type="button" class="selected changeSideBarColor" data-color="white"></button>
             <button type="button" class="changeSideBarColor" data-color="dark"></button>
             <button type="button" class="changeSideBarColor" data-color="dark2"></button>
           </div>
         </div>
         <div class="switch-block">
           <h4>Background</h4>
           <div class="btnSwitch">
             <button type="button" class="changeBackgroundColor" data-color="bg2"></button>
             <button type="button" class="changeBackgroundColor selected" data-color="bg1"></button>
             <button type="button" class="changeBackgroundColor" data-color="bg3"></button>
             <button type="button" class="changeBackgroundColor" data-color="dark"></button>
           </div>
         </div>
       </div>
     </div>
     <div class="custom-toggle">
       <i class="flaticon-settings"></i>
     </div>
   </div>
   <!-- End Custom template -->
 </div>
 <!--   Core JS Files   -->
 <script src="{{asset('assets/js/core/jquery.3.2.1.min.js')}}"></script>
 <script src="{{asset('assets/js/core/popper.min.js')}}"></script>
 <script src="{{asset('assets/js/core/bootstrap.min.js')}}"></script>
 <!-- jQuery UI -->
 <script src="{{asset('assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js')}}"></script>
 <script src="{{asset('assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js')}}"></script>
 <!-- Sweet Alert -->
<script src="{{asset('assets/js/plugin/sweetalert/sweetalert.min.js')}}"></script>

 <!-- jQuery Scrollbar -->
 <script src="{{asset('assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js')}}"></script>
 <!-- Datatables -->
<script src="{{asset('assets/js/plugin/datatables/datatables.min.js')}}"></script>
 <!-- Atlantis JS -->
 <script src="{{asset('assets/js/atlantis.min.js')}}"></script>
 <!-- Atlantis DEMO methods, don't include it in your project! -->
 <script src="{{asset('assets/js/setting-demo2.js')}}"></script>



<script >
  $(document).ready(function() {
    $('#basic-datatables').DataTable({
    });

    $('#multi-filter-select').DataTable( {
      "pageLength": 5,
      initComplete: function () {
        this.api().columns().every( function () {
          var column = this;
          var select = $('<select class="form-control"><option value=""></option></select>')
          .appendTo( $(column.footer()).empty() )
          .on( 'change', function () {
            var val = $.fn.dataTable.util.escapeRegex(
              $(this).val()
              );

            column
            .search( val ? '^'+val+'$' : '', true, false )
            .draw();
          } );

          column.data().unique().sort().each( function ( d, j ) {
            select.append( '<option value="'+d+'">'+d+'</option>' )
          } );
        } );
      }
    });

    // Add Row
    $('#add-row').DataTable({
      "pageLength": 5,
    });

    var action = '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

    $('#addRowButton').click(function() {
      $('#add-row').dataTable().fnAddData([
        $("#addName").val(),
        $("#addPosition").val(),
        $("#addOffice").val(),
        action
        ]);
      $('#addRowModal').modal('hide');

    });
  });


//== Class definition
var SweetAlert2Demo = function() {

//== Demos
var initDemos = function() {
  //== Sweetalert Demo 1
  $('#alert_demo_1').click(function(e) {
    swal('Good job!', {
      buttons: {        			
        confirm: {
          className : 'btn btn-success'
        }
      },
    });
  });

  //== Sweetalert Demo 2
  $('#alert_demo_2').click(function(e) {
    swal("Here's the title!", "...and here's the text!", {
      buttons: {        			
        confirm: {
          className : 'btn btn-success'
        }
      },
    });
  });

  //== Sweetalert Demo 3
  $('#alert_demo_3_1').click(function(e) {
    swal("Good job!", "You clicked the button!", {
      icon : "warning",
      buttons: {        			
        confirm: {
          className : 'btn btn-warning'
        }
      },
    });
  });

  $('#alert_demo_3_2').click(function(e) {
    swal("Good job!", "You clicked the button!", {
      icon : "error",
      buttons: {        			
        confirm: {
          className : 'btn btn-danger'
        }
      },
    });
  });

  $('#alert_demo_3_3').click(function(e) {
    swal("Good job!", "You clicked the button!", {
      icon : "success",
      buttons: {        			
        confirm: {
          className : 'btn btn-success'
        }
      },
    });
  });

  $('#alert_demo_3_4').click(function(e) {
    swal("Good job!", "You clicked the button!", {
      icon : "info",
      buttons: {        			
        confirm: {
          className : 'btn btn-info'
        }
      },
    });
  });

  //== Sweetalert Demo 4
  $('#alert_demo_4').click(function(e) {
    swal({
      title: "Good job!",
      text: "You clicked the button!",
      icon: "success",
      buttons: {
        confirm: {
          text: "Confirm Me",
          value: true,
          visible: true,
          className: "btn btn-success",
          closeModal: true
        }
      }
    });
  });

  $('#alert_demo_5').click(function(e){
    swal({
      title: 'Input Something',
      html: '<br><input class="form-control" placeholder="Input Something" id="input-field">',
      content: {
        element: "input",
        attributes: {
          placeholder: "Input Something",
          type: "text",
          id: "input-field",
          className: "form-control"
        },
      },
      buttons: {
        cancel: {
          visible: true,
          className: 'btn btn-danger'
        },        			
        confirm: {
          className : 'btn btn-success'
        }
      },
    }).then(
    function() {
      swal("", "You entered : " + $('#input-field').val(), "success");
    }
    );
  });

  $('#alert_demo_6').click(function(e) {
    swal("This modal will disappear soon!", {
      buttons: false,
      timer: 3000,
    });
  });
// sweet alert delete
  $('#alert_demo_7').click(function(e) {
					swal({
						title: 'Hapus data ini?',
						text: "Data yang dipilih akan terhapus ",
						type: 'warning',
						buttons:{
							confirm: {
								text : 'Ya',
								className : 'btn btn-success'
							},
							cancel: {
								visible: true,
								className: 'btn btn-danger'
							}
						}
					}).then((Delete) => {
						if (Delete) {
							swal({
								title: 'Data terhapus!',
								text: 'Data yang anda pilih berhasil terhapus!',
								type: 'success',
								buttons : {
									confirm: {
										className : 'btn btn-success'
									}
								}
							});
						} else {
							swal.close();
						}
					});
				});
        $('#alert_demo_8').click(function(e) {
					swal({
						title: 'Are you sure?',
						text: "You won't be able to revert this!",
						type: 'warning',
						buttons:{
							cancel: {
								visible: true,
								text : 'No, cancel!',
								className: 'btn btn-danger'
							},        			
							confirm: {
								text : 'Yes, delete it!',
								className : 'btn btn-success'
							}
						}
					}).then((willDelete) => {
						if (willDelete) {
							swal("Poof! Your imaginary file has been deleted!", {
								icon: "success",
								buttons : {
									confirm : {
										className: 'btn btn-success'
									}
								}
							});
						} else {
							swal("Your imaginary file is safe!", {
								buttons : {
									confirm : {
										className: 'btn btn-success'
									}
								}
							});
						}
					});
				})

			};

			return {
				//== Init
				init: function() {
					initDemos();
				},
			};
		}();

		//== Class Initialization
		jQuery(document).ready(function() {
			SweetAlert2Demo.init();
		});
</script>
</body>
</html>