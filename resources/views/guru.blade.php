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
                  <div class="card-header bg-primary">
                     <h3 class="card-title">
                        <a href="{{url('/guru/add')}}" class="btn btn-primary btn-sm pull-right"><i class="fa fa-plus-circle"></i> Input Data</a>
                        <a href="" class="btn btn-primary btn-sm pull-right"><i class="fa fa-download"></i> Export Data</a>
                        <a href="" class="btn btn-primary btn-sm pull-right"><i class="fa fa-upload"></i> Import Data</a>
                        <a href="" class="btn btn-primary btn-sm pull-right"><i class="fa fa-trash"></i></a>
                     </h3>
                  </div>
                  <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped table-sm">
                     <thead>
                     <tr>
                        <th>No</th>
                        <th>NUPTK</th>
                        <th>Nama Lengkap</th>
                        <th>Jenjang Pendidikan</th>
                        <th>Status</th>
                        <th></th>
                     </tr>
                     </thead>
                     <tbody>
                     <?php $no = 1; ?>
                     @foreach($guru as $row)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>
                              <img class="img-responsive" style="width: 50px; height: 50px;" src="{{url('/uploads')}}/{{$row->foto}}">
                              {{$row->nip}}
                           </td>
                            <td>{{$row->nama_lengkap}}</td>
                            <td>{{@$row->jenjang_pendidikan->jenjang_pendidikan_detail}}</td>
                            <td><span class="badge badge-primary">Aktif</span></td>
                            <td class="text-center">
                                 <a href="{{url('guru/edit/'.$row->guru_id)}}" class="btn btn-success btn-sm"><i class="fa fa-eye"></i></a>
                                 <a href="{{url('guru/edit/'.$row->guru_id)}}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                 <a href="{{url('guru/delete/'.$row->guru_id)}}" class="btn btn-danger btn-sm hapus"><i class="fa fa-trash"></i></a>
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
