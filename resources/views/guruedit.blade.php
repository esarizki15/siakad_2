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
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
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
           
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form {{$title}}</h3>
              </div>
              <form role="form" action="{{url('guru/update/'.$guru->guru_id)}}" method="post">
                  {{csrf_field()}}
                  {{method_field('PUT')}}
                  <div class="card-body row">
                     <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">NIK</label>
                        <input value="{{$guru->nik}}" required type="text" name="nik" class="form-control" id="exampleInputEmail1" placeholder="Nomor Induk Kewarganegaraan">
                     </div>
                     <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">NIP</label>
                        <input value="{{$guru->nip}}" required type="text" name="nip" class="form-control" id="exampleInputEmail1" placeholder="Nomor Induk Kepegawaian">
                     </div>
                     <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">Nama Lengkap</label>
                        <input value="{{$guru->nama_lengkap}}" required type="text" name="nama_lengkap" class="form-control" id="exampleInputEmail1" placeholder="Nama Lengkap">
                     </div>
                     <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">Alamat</label>
                        <input value="{{$guru->alamat}}" required type="text" name="alamat" class="form-control" id="exampleInputEmail1" placeholder="Alamat">
                     </div>
                     <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">Telepon</label>
                        <input value="{{$guru->telepon}}" required type="text" name="telepon" class="form-control" id="exampleInputEmail1" placeholder="Telepon">
                     </div>
                     <div class="form-group col-md-6">
                        <label for="exampleInputPassword1">Pilih Jenjang Pendidikan</label>
                        <select name="jp_id" class="form-control">
                           <option value="{{$guru->jp_id}}">Pilih Jenjang Pendidikan</option>
                           @foreach($jenjang_pendidikan as $row)
                           <option value="{{$row->jp_id}}">{{$row->jenjang_pendidikan_detail}}</option>
                           @endforeach
                        </select>
                     </div>
                  </div>
                <div class="card-footer">
                  <button class="btn btn-warning" onclick="location(href:'blabla')">Kembali</button>
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
            </div>
         </div>
      </div>
   </section>
</div>
@endsection
