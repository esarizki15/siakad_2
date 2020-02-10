<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{{@$title}}</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{url('plugins/fontawesome-free/css/all.min.css')}}">
  <link rel="stylesheet" href="{{url('dist/css/adminlte.min.css')}}">
  <link rel="stylesheet" href="{{url('sweetalert/sweetalert2.min.css')}}">
  <link rel="stylesheet" href="{{url('plugins/summernote/summernote-bs4.css')}}">
  <link rel="stylesheet" href="{{url('plugins/toastr/toastr.min.css')}}">
  <style>

    .btn{
      border-radius: 0px;
    }

    .form-control{
      border-radius: 0px;
      font-size: 11pt;
    }
    tr{
      padding: 5px;
    }

    td{
      padding: 5px;
    }
    .kelas{
      text-transform: uppercase;
    }

    th{
      color: white;
      font-weight: 200;
      background-color: #888;
      text-align: center;
    }
    
    .content-wrapper{
      margin-top: 60px;
    }
    .main{
      padding: 7px;
    }

    /* .btn{
      border-radius: 0px;
    } */
    ::-webkit-scrollbar {
      width: 5px;
      border-radius: 8px;
    }

    /* Track */
    ::-webkit-scrollbar-track {
      background: white;
    }

    /* Handle */
    ::-webkit-scrollbar-thumb {
      background: blue;
    }

    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
      background: blue;
    }
  </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <nav class="main-header navbar navbar-expand navbar-white navbar-light bg-primary fixed-top">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link text-white" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link text-white" href="{{url('logout')}}">
          <i class="fas fa-sign-out-alt"></i> Keluar
        </a>
      </li>
    </ul>
  </nav>

  <aside class="main-sidebar sidebar-dark-primary elevation-2">
    <a href="{{url('/')}}" class="brand-link">
      <img src="{{url('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Admin <b>LTE</b></span>
    </a>

    <div class="sidebar bg-default">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{url('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{Auth::user()->name}}</a>
        </div>
      </div>

      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="{{url('/dashboard')}}" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-header">MASTER DATA</li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-graduation-cap"></i>
              <p>
                Tenaga Pendidik
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/guru')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Guru</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/wali-kelas')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Wali Kelas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/jenjang-pendidikan')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Pendidikan</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Siswa
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/siswa')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Siswa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/kelas')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Kelas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/jurusan')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Jurusan</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">AKADEMIK</li>
          <li class="nav-item">
                <a href="{{url('/tahun-ajaran')}}" class="nav-link">
                  <i class="far fa-calendar nav-icon"></i>
                  <p>Tahun Ajaran</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/kalender-akademik')}}" class="nav-link">
                  <i class="far fa-calendar nav-icon"></i>
                  <p>Kalender Akademik</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/mata-pelajaran')}}" class="nav-link">
                  <i class="fas fa-book nav-icon"></i>
                  <p>Mata Pelajaran</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/jadwal-pelajaran')}}" class="nav-link">
                  <i class="fas fa-calendar-check nav-icon"></i>
                  <p>Jadwal Pelajaran</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/kelas')}}" class="nav-link">
                  <i class="fas fa-book-open nav-icon"></i>
                  <p>Nilai Siswa</p>
                </a>
              </li>
          <li class="nav-header">KONFIGURASI</li>
          <li class="nav-item">
            <a href="{{url('pengaturan')}}" class="nav-link">
              <i class="nav-icon fas fa-cogs"></i>
              <p>
                Pengaturan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/gallery.html" class="nav-link">
              <i class="nav-icon fas fa-info-circle"></i>
              <p>
                Tentang Aplikasi
              </p>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </aside>
  @yield('konten')
  <footer class="main-footer">
      <strong>Template by &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.0.0-rc.3
      </div>
  </footer>
</div>

<script src="{{url('plugins/jquery/jquery.min.js')}}"></script>
<script src="{{url('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{url('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<script src="{{url('dist/js/adminlte.js')}}"></script>
<script src="{{url('dist/js/pages/dashboard.js')}}"></script>
<script src="{{url('dist/js/demo.js')}}"></script>
<script src="{{url('plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{url('plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
<script src="{{url('sweetalert/sweetalert2.min.js')}}"></script>
<script src="{{url('plugins/summernote/summernote-bs4.min.js')}}"></script>
<script src="{{url('plugins/toastr/toastr.min.js')}}"></script>
<script>
 $(function () {
    // Summernote
    $('.textarea').summernote()
  });
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true,
    });
  });
  
  $(document).ready(function(){
    $('.hapus').on('click', function(){
      event.preventDefault();
      var link = $(this).attr('href');
      Swal.fire({
        title: 'Konfirmasi Hapus',
        text: "Apakah anda akan menghapus data ini?",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, Hapus'
      }).then((result) => {
        if (result.value) {
          document.location.href = link;
          
        }
      })
    });

    $('#data-guru').on('click','.detail-guru', function(){
      var id = $(this).data('id');
      $.ajax({
        url : '<?php echo url('guru/detail/') ?>/' + id,
        type : 'GET',
        dataType : 'JSON',
        success:function(data){
          var html = '';
          var i;
          for(i=0; i<data.length; i++){
            html += '<div class="col-md">'+
                      '<div class="">'+
                        '<div class="card-body box-profile">'+
                          '<div class="text-center">'+
                            '<img class="profile-user-img img-fluid img-circle">'+
                          '</div>'+
                          '<h3 class="profile-username text-center">'+'Nina Mcintire'+'</h3>'+
                          '<p class="text-muted text-center">'+'Software Engineer'+'</p>'+
                          '<ul class="list-group list-group-unbordered mb-3">'+
                            '<li class="list-group-item">'+'NIK'+'<a class="float-right">'+'1,322'+'</a>'+'</li>'+
                            '<li class="list-group-item">'+'NUPTK'+'<a class="float-right">'+'1,322'+'</a>'+'</li>'+
                            '<li class="list-group-item">'+'Alamat'+'<a class="float-right">'+'1,322'+'</a>'+'</li>'+
                            '<li class="list-group-item">'+'Tempat, Tanggal Lahir'+'<a class="float-right">'+'1,322'+'</a>'+'</li>'+
                            '<li class="list-group-item">'+'Jenis Kelamin'+'<a class="float-right">'+'1,322'+'</a>'+'</li>'+
                            '<li class="list-group-item">'+'Agama'+'<a class="float-right">'+'1,322'+'</a></li>'+
                          '</ul>'+
                        '</div>'+
                      '</div>'+
                    '</div>'
          }
          $('#profileguru').html(html);
        },
        error:function(response){
          console.log(response);
        }
      });
    });

    <?php if(Session::has('alert-success')){ ?>       
      toastr.success('{{ \Illuminate\Support\Facades\Session::get('alert-success') }}');
    <?php }else if(Session::has('alert-danger')){ ?>
      toastr.error('{{ \Illuminate\Support\Facades\Session::get('alert-danger') }}');
    <?php } ?>
  });
  
  
</script>
</body>
</html>