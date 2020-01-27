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
                <form role="form" action="{{url('tahun-ajaran/update/'.$tahun_ajaran->tahun_ajaran_id)}}" method="post">
                  {{csrf_field()}}
                  {{method_field('PUT')}}
                  <div class="card-body row">
                     <div class="form-group col-md-12">
                        <label for="exampleInputEmail1">Tahun Ajaran</label>
                        <input value="{{$tahun_ajaran->tahun_ajaran}}" required type="text" name="tahun_ajaran" class="form-control" id="exampleInputEmail1" placeholder="Misal : 2019/2020">
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
