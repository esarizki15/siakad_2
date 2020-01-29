@extends('main.sidebar')
@section('konten')
<div class="content-wrapper">
   <div class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-12" style="border-radius: 5px;">
               <ol class="breadcrumb float-sm-left">
                  <li class="breadcrumb-item"><a href="#"><i class="fa fa-chevron-circle-right"></i> Akademik</a></li>
                  <li class="breadcrumb-item active">{{$title}} </li>
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
                        <a href="{{url('/tahun-ajaran/add')}}" class="btn btn-primary bg-gradient-primary btn-sm pull-right"><i class="fa fa-plus-circle"></i> Tambah</a>
                        <a href="" class="btn btn-primary bg-gradient-primary btn-sm pull-right"><i class="fa fa-download"></i> Export</a>
                        <a href="" class="btn btn-primary bg-gradient-primary btn-sm pull-right"><i class="fa fa-upload"></i> Import</a>
                        <a href="" class="btn btn-primary bg-gradient-primary btn-sm pull-right"><i class="fa fa-trash"></i> Recovery</a>
                     </h3>
                  </div>
                  <div class="card-body">
                  <table id="example1" class="table table-striped table-sm">
                     <thead>
                     <tr>
                        <th>No</th>
                        <th>Tahun Ajaran</th>
                        <th>Status</th>
                        <th></th>
                     </tr>
                     </thead>
                     <tbody>
                     <?php $no = 1; ?>
                     @foreach($tahun_ajaran as $row)
                        <tr>
                           <td>{{$no++}}</td>
                           <td>{{$row->tahun_ajaran}}</td>
                           <td>
                              @if($row->active==true)
                              <span class="badge badge-primary">{{"Aktif"}}</span>
                              @else
                              <span class="badge badge-danger">{{"Tidak Aktif"}}</span>
                              @endif
                           </td>
                           <td class="text-center"> 
                              <a href="{{url('tahun-ajaran/edit/'.$row->tahun_ajaran_id)}}" class="btn btn-primary bg-gradient-primary btn-sm"><i class="fa fa-edit"></i> Edit</a>
                              <a href="{{url('tahun-ajaran/delete/'.$row->tahun_ajaran_id)}}" class="btn btn-danger bg-gradient-danger btn-sm"><i class="fa fa-trash"></i> Hapus</a>
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
