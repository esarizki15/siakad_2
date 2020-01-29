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
               <div class="card">
                  <div class="card-header bg-primary">
                     <h3 class="card-title">
                        <a href="{{url('/kalender-akademik/add')}}" class="btn btn-primary bg-gradient-primary btn-sm pull-right"><i class="fa fa-plus-circle"></i> Input Data</a>
                        <a href="{{url('/guru/recovery/')}}" class="btn btn-primary bg-gradient-primary btn-sm pull-right"><i class="fa fa-trash"></i> Recovery</a>
                     </h3>
                  </div>
                  <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped table-sm">
                     <thead>
                     <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Judul</th>
                        <th>Author</th>
                        <th></th>
                     </tr>
                     </thead>
                     <tbody>
                     <?php $no = 1; ?>
                        @foreach($kalender as $row)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$row->tgl}}</td>
                            <td>{{$row->title}}</td>
                            <td><i class="fa fa-user"></i> {{$row->created_by}}</td>
                            <td class="text-center">
                                <a href="" class="btn btn-primary bg-gradient-primary btn-sm"> Edit</a>
                                <a href="" class="btn btn-danger btn-sm"> Hapus</a>
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
