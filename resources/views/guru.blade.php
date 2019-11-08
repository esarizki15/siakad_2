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
            @if(Session::has('alert-success'))
                <div class="alert alert-success">
                    <strong>{{ \Illuminate\Support\Facades\Session::get('alert-success') }}</strong>
                </div>
            @endif
               <div class="card">
                  <div class="card-header">
                     <h3 class="card-title">
                        <a href="{{url('/guru/add')}}" class="btn btn-primary btn-sm pull-right">Tambah</a>
                        <a href="" class="btn btn-primary btn-sm pull-right">Export</a>
                        <a href="" class="btn btn-primary btn-sm pull-right">Import</a>
                        <a href="" class="btn btn-danger btn-sm pull-right"><i class="fa fa-trash"></i></a>
                     </h3>
                  </div>
                  <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                     <thead>
                     <tr>
                        <th>No</th>
                        <th>NIK</th>
                        <th>NIP</th>
                        <th>Nama Lengkap</th>
                        <th>Jenjang Pendidikan</th>
                        <th>Jurusan</th>
                        <th>Jenis Kelamin</th>
                        <th></th>
                     </tr>
                     </thead>
                     <tbody>
                     <?php $no = 1; ?>
                     @foreach($guru as $row)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$row->nik}}</td>
                            <td>{{$row->nip}}</td>
                            <td>{{$row->nama_lengkap}}</td>
                            <td>{{$row->alamat}}</td>
                            <td>{{$row->telepon}}</td>
                            <td>{{$row->jp_id}}</td>
                            <td>
                                <a href="{{url('guru/edit/'.$row->guru_id)}}" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a>
                                <a href="{{url('guru/delete/'.$row->guru_id)}}" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
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
