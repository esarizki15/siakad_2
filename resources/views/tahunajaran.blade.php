@extends('main.sidebar')
@section('konten')
<div class="content-wrapper">
   <div class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1 class="m-0 text-dark"><i class="fa fa-"></i> {{$title}}</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Akademik</a></li>
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
                        <a href="{{url('/tahun-ajaran/add')}}" class="btn btn-primary btn-sm pull-right">Tambah</a>
                        <a href="" class="btn btn-primary btn-sm pull-right">Export</a>
                        <a href="" class="btn btn-primary btn-sm pull-right">Import</a>
                     </h3>
                  </div>
                  <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                     <thead>
                     <tr>
                        <th>No</th>
                        <th>Tahun Ajaran</th>
                        <th>Jumlah Kelas</th>
                        <th>Jumlah Siswa</th>
                        <th></th>
                     </tr>
                     </thead>
                     <tbody>
                     <?php $no = 1; ?>
                     @foreach($tahun_ajaran as $row)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$row->tahun_ajaran}}</td>
                            <td></td>
                            <td></td>
                            <td>
                                <a href="{{url('tahun-ajaran/edit/'.$row->tahun_ajaran_id)}}" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a>
                                <a href="{{url('tahun-ajaran/delete/'.$row->tahun_ajaran_id)}}" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
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
