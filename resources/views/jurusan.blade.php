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
         @if(Session::has('alert-success'))
                <div class="alert alert-success">
                    <strong>{{ \Illuminate\Support\Facades\Session::get('alert-success') }}</strong>
                </div>
            @endif
         <div class="card">
            <div class="card-header">
               <h3 class="card-title">
                  <a href="{{url('/jurusan/add')}}" class="btn btn-primary btn-sm pull-right">Tambah Jurusan</a>
                  <a href="" class="btn btn-primary btn-sm pull-right">Export</a>
               </h3>
            </div>
            <div class="card-body">
            

              <table id="example1" class="table table-bordered table-striped table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Kode Jurusan</th>
                  <th>Nama Jursuan</th>
                  <th></th>
                </tr>
                </thead>
                <tbody>
                  <?php $no=1; ?>
                  @foreach($jurusan as $row)
                  <tr>
                     <td><?php echo $no++; ?></td>
                     <td>{{$row->singkatan}}</td>
                     <td>{{$row->nama_jurusan}}</td>
                     <td align="center" width="200">
                        <a href="{{url('/jurusan/edit/'.$row->jurusan_id)}}" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>
                        <a href="{{url('/jurusan/delete/'.$row->jurusan_id)}}" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
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
