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
            
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form {{$title}}</h3>
              </div>
              <form role="form" action="{{url('jenjang-pendidikan/store/')}}" method="post">
                  {{csrf_field()}}
                  
                  <div class="card-body row">
                     <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">Jenjang Pendidikan</label>
                        <input required type="text" name="jp" class="form-control" id="exampleInputEmail1" placeholder="Contoh : S1">
                     </div>
                     <div class="form-group col-md-6">
                        <label for="exampleInputPassword1">Detail Jenjang Pendidikan</label>
                        <input style="text-transform: capitalize;" required type="text" name="jpd" class="form-control" id="exampleInputPassword1" placeholder="Strata 1">
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
