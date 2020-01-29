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
         <div class="card">
            <div class="card-header">
               <h3 class="card-title">
                  <a href="{{url('/jurusan/add')}}" class="btn btn-primary bg-gradient-primary btn-sm pull-right">Tambah Jurusan</a>
                  <a href="" class="btn btn-primary bg-gradient-primary btn-sm pull-right">Export</a>
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
