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
                  <li class="breadcrumb-item active">Tambah Data Wali Kelas</li>
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
                <h3 class="card-title">Form Tambah Wali Kelas</h3>
              </div>
              <form role="form" action="{{url('wali-kelas/update/'.$walikelas->walikelas_id)}}" method="post">
                  {{csrf_field()}}
                  {{method_field('PUT')}}
                  <div class="card-body row">
                     <div class="form-group col-md-6">
                        <label for="exampleInputPassword1">Pilih Kelas</label>
                        <select required name="kelas_id" class="form-control">
                           <option value="{{$walikelas->kelas_id}}">Pilih Kelas</option>
                           @foreach($kelas as $k)
                           <option value="{{$k->kelas_id}}">{{$k->nama_kelas}}</option>
                           @endforeach
                        </select>
                     </div>
                     <div class="form-group col-md-6">
                        <label for="exampleInputPassword1">Pilih Guru</label>
                        <select required name="guru_id" class="form-control">
                           <option value="{{$walikelas->guru_id}}">Pilih Guru</option>
                           @foreach($guru as $g)
                           <option value="{{$g->guru_id}}">{{$g->nama_lengkap}}</option>
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
            </div>
            </div>
         </div>
      </div>
   </section>
</div>
@endsection
