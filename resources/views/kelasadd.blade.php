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
                  <li class="breadcrumb-item active">Dashboard v1</li>
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
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form {{$title}}</h3>
              </div>
              <form role="form" action="{{url('kelas/store')}}" method="post">
                  {{csrf_field()}}
                  <div class="card-body row">
                     <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">Nama Kelas</label>
                        <input style="text-transform:uppercase;" required type="text" name="nama_kelas" class="form-control" id="exampleInputEmail1" placeholder="Nama Kelas">
                     </div>
                     <div class="form-group col-md-6">
                        <label for="exampleInputPassword1">Pilih Jurusan</label>
                        <select name="id_jurusan" class="form-control">
                           <option>Pilih Jurusan</option>
                           @foreach($jurusan as $row)
                           <option value="{{$row->jurusan_id}}">{{$row->singkatan}} | {{$row->nama_jurusan}}</option>
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
