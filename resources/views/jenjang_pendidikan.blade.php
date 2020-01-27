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
            <div class="card-header">
               <h3 class="card-title">
                  <a href="{{url('/jenjang-pendidikan/add')}}" class="btn btn-primary btn-sm pull-right">Tambah</a>
                  <a href="" class="btn btn-primary btn-sm pull-right">Export</a>
                  <a href="" class="btn btn-primary btn-sm pull-right">Import</a>
               </h3>
            </div>
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Jenjang Pendidikan</th>
                  <th>Detail</th>
                  <th></th>
                </tr>
                </thead>
                <tbody>
                <?php $no = 1; ?>
                @foreach($jenjang_pendidikan as $row)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$row->jenjang_pendidikan}}</td>
                    <td>{{$row->jenjang_pendidikan_detail}}</td>
                    <td class="text-center">
                        <a class="btn btn-primary btn-xs" href="{{url('jenjang-pendidikan/edit/'.$row->jp_id)}}"><i class="fa fa-edit"></i></a>
                        <a class="btn btn-danger btn-xs" href="{{url('jenjang-pendidikan/delete/'.$row->jp_id)}}"><i class="fa fa-trash"></i></a>
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
