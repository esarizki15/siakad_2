@extends('main.sidebar')
@section('konten')
<div class="content-wrapper">
   <div class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1 class="m-0 text-dark"><i class="fa fa-users"></i> {{$title}}</h1>
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
                        <a href="{{url('/siswa/add')}}" class="btn btn-primary btn-sm pull-right">Tambah Siswa</a>
                        <a href="" class="btn btn-primary btn-sm pull-right">Export</a>
                     </h3>
                  </div>
                  <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                     <thead>
                     <tr>
                        <th>No</th>
                        <th>NIS</th>
                        <th>NISN</th>
                        <th>Nama Siswa</th>
                        <th></th>
                     </tr>
                     </thead>
                     <tbody>
                     <?php $no = 1; ?>
                     @foreach($siswa as $row)
                     <tr>
                        <td><?php echo $no++; ?></td>
                        <td>{{$row->nis}}</td>
                        <td>{{$row->nisn}}</td>
                        <td>{{$row->nama_siswa}}</td>
                        <td width="160" class="text-center">
                           <a href="{{url('siswa/update/'.$row->id_siswa)}}" class="btn btn-primary btn-sm">Update</a>
                           <a href="" class="btn btn-danger btn-sm">Hapus</a>
                        </td>
                     </tr>
                     @endforeach
                     </tfoot>
                  </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
</div>
@endsection
