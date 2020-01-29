@extends('main.sidebar')
@section('konten')
<div class="content-wrapper">
   <div class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-12" style="border-radius: 5px;">
               <ol class="breadcrumb float-sm-left">
                  <li class="breadcrumb-item"><a href="#"><i class="fa fa-chevron-circle-right"></i> Siswa</a></li>
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
                        <a href="{{url('/siswa/add')}}" class="btn btn-primary bg-gradient-primary btn-sm pull-right"><i class="fa fa-plus-circle"></i> Tambah Siswa</a>
                        <a href="" class="btn btn-primary bg-gradient-primary btn-sm pull-right"><i class="fa fa-download"></i> Export</a>
                        <a href="" class="btn btn-primary bg-gradient-primary btn-sm pull-right"><i class="fa fa-upload"></i> Import</a>
                     </h3>
                  </div>
                  <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped table-sm">
                     <thead>
                     <tr>
                        <th>No</th>
                        <th>NIS</th>
                        <th>NISN</th>
                        <th>Nama Siswa</th>
                        <th>Kelas</th>
                        <th>Jenis Kelamin</th>
                        <th></th>
                     </tr>
                     </thead>
                     <tbody>
                     <?php $no = 1; ?>
                     @foreach($siswa as $row)
                     <tr>
                        <td><?php echo $no++; ?></td>
                        <td>{{$row->nis}}</td>
                        <td>{{$row->nisn}}</td>
                        <td>{{$row->nama_siswa}}</td>
                        <td>{{@$row->kelas->nama_kelas}}</td>
                        <td>
                        @if($row->jk=='P')
                           <span class="badge badge-warning"><i class="fa fa-venus"></i></span> {{$row->jk}}
                        @elseif($row->jk=='L')
                           <span class="badge badge-primary"><i class="fa fa-mars"></i></span> {{$row->jk}}
                        @endif
                        </td>
                        <td width="160" class="text-center">
                           <a href="{{url('siswa/update/'.$row->siswa_id)}}" class="btn btn-primary bg-gradient-primary btn-sm"><i class="fa fa-edit"></i> Edit</a>
                           <a href="{{url('siswa/delete/'.$row->siswa_id)}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Hapus</a>
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
