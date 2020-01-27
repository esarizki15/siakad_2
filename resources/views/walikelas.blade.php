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
                  <li class="breadcrumb-item"><a href="#">Tenaga Pendidik</a></li>
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
                        <a href="{{url('/wali-kelas/add')}}" class="btn btn-info btn-sm pull-right"><i class="fa fa-plus-circle"></i> Tambah</a>
                        <a href="" class="btn btn-info btn-sm pull-right"><i class="fa fa-download"></i> Export</a>
                        <a href="" class="btn btn-info btn-sm pull-right"><i class="fa fa-upload"></i> Import</a>
                        <a href="" class="btn btn-info btn-sm pull-right"><i class="fa fa-trash"></i></a>
                     </h3>
                  </div>
                  <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped table-sm">
                     <thead>
                     <tr>
                        <th>No</th>
                        <th>Nama Guru</th>
                        <th>Wali Kelas</th>
                        <th></th>
                     </tr>
                     </thead>
                     <tbody>
                     <?php $no = 1; ?>
                     @foreach($walikelas as $row)
                     <tr>
                        <td>{{$no++}}</td>
                        <td>{{@$row->guru->nama_lengkap}}</td>
                        <td>{{@$row->kelas->nama_kelas}}</td>
                        <td class="text-center">
                           <a href="{{url('wali-kelas/edit/'.$row->walikelas_id)}}" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a>
                           <a href="{{url('wali-kelas/delete/'.$row->walikelas_id)}}" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
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
