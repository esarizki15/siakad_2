@extends('main.sidebar')
@section('konten')
<div class="content-wrapper">
   <div class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-12" style="border-radius: 5px;">
               <ol class="breadcrumb float-sm-left">
                  <li class="breadcrumb-item"><a href="#"><i class="fa fa-chevron-circle-right"></i> Siswa</a></li>
                  <li class="breadcrumb-item active"> {{$title}} </li>
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
            <div class="card-header bg-primary">
               <h3 class="card-title">
                  <a href="{{url('/kelas/add')}}" class="btn btn-primary bg-gradient-primary btn-sm pull-right"><i class="fa fa-plus-circle"></i> Tambah</a>
                  <a href="" class="btn btn-primary bg-gradient-primary btn-sm pull-right"><i class="fa fa-trash"></i> Recovery</a>
               </h3>
            </div>
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped table-hover table-sm">
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
                     <td>{{@$row->jurusan->nama_jurusan}}</td>
                     <td><span class="badge badge-primary">Aktif</span></td>
                     <td class="text-center" width="250">
                        <a href="{{url('kelas/edit/'.$row->kelas_id)}}" class="btn btn-success btn-sm"><i class="fa fa-edit"></i> Edit</a>
                        <a href="{{url('kelas/delete/'.$row->kelas_id)}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Recovery</a>
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
