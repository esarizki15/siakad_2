@extends('main.sidebar')
@section('konten')
<div class="content-wrapper">
   <div class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1 class="m-0 text-dark">{{$title}}</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Siswa</a></li>
                  <li class="breadcrumb-item active">{{$title}}</li>
               </ol>
            </div>
         </div>
      </div>
   </div>
   <section class="content">
      <div class="container-fluid">
         <div class="row">
         <div class="col-md-12">
         
         <div class="card">
            <div class="card-header">
               <h3 class="card-title">
                  <a href="{{url('/kelas/add')}}" class="btn btn-primary btn-sm pull-right">Tambah Kelas</a>
                  <a href="" class="btn btn-primary btn-sm pull-right">Export</a>
               </h3>
            </div>
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Kelas</th>
                  <th>Jurusan</th>
                  <th>Status</th>
                  <th></th>
                </tr>
                </thead>
                <tbody>
                  <?php $no = 1; ?>
                  @foreach($kelas as $row)
                  <tr>
                     <td>{{$no++}}</td>
                     <td style="text-transform: uppercase;">{{$row->nama_kelas}}</td>
                     <td>{{$row->jurusan->nama_jurusan}}</td>
                     <td><span class="badge badge-primary">Belum ada Siswa</span></td>
                     <td>
                        <a href="" class="btn btn-success btn-sm">Perbaharui</a>
                        <a href="" class="btn btn-danger btn-sm">Hapus</a>
                     </td>
                  </tr>
                  @endforeach
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
          </div>
         </div>
      </div>
   </section>
</div>
@endsection
