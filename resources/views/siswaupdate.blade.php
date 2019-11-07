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
                <h3 class="card-title">Form Tambah Siswa</h3>
              </div>
              
              <form role="form" action="{{router ('siswa.update, $siswa->id_siswa') }}" method="post">
        
                  {{csrf_field()}}
                  <div class="card-body row">
                     <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">NIS</label>
                        <input value="{{$siswa->nis}}" required type="text" name="nis" class="form-control" id="exampleInputEmail1" placeholder="Masukan NIS">
                     </div>
                     <div class="form-group col-md-6">
                        <label for="exampleInputPassword1">NISN</label>
                        <input value="{{$siswa->nisn}}" required type="text" name="nisn" class="form-control" id="exampleInputPassword1" placeholder="Masukan NISN">
                     </div>
                     <div class="form-group col-md-6">
                        <label for="exampleInputPassword1">Nama Siswa</label>
                        <input value="{{$siswa->nama_siswa}}" required type="text" name="nama_siswa" class="form-control" id="exampleInputPassword1" placeholder="Masukan Nama Siswa">
                     </div>
                     <div class="form-group col-md-6">
                        <label for="exampleInputPassword1">Alamat</label>
                        <input value="{{$siswa->alamat}}" required type="text" name="alamat" class="form-control" id="exampleInputPassword1" placeholder="Masukan Alamat">
                     </div>
                     <div class="form-group col-md-6">
                        <label for="exampleInputPassword1">Kelas</label>
                        <select required name="id_kelas" class="form-control kelas">
                           <option value="{{$siswa->id_kelas}}">Pilih Kelas</option>
                           @foreach($kelas as $row)
                           <option value="{{$row->id_kelas}}">{{$row->nama_kelas}}</option>
                           @endforeach
                        </select>
                     </div>
                     <div class="form-group col-md-6">
                        <label for="exampleInputPassword1">Jurusan</label>
                        <input value="" disabled type="text" class="form-control" id="exampleInputPassword1" placeholder="Silahkan Pilih Kelas">
                     </div>
                     <div class="form-group col-md-6">
                        <label for="exampleInputPassword1">Jenis Kelamin</label><br>
                        <div class="custom-control custom-radio">
                          <input value="L" <?php if($siswa->jk_siswa == 'L'){ echo "checked"; } ?> class="custom-control-input" type="radio" name="jk" value="L" id="customRadio2" name="customRadio" checked>
                          <label for="customRadio2" class="custom-control-label">Laki-laki</label>
                        </div>    
                        <div class="custom-control custom-radio">
                          <input value="P" <?php if($siswa->jk_siswa == 'P'){ echo "checked"; } ?> class="custom-control-input" type="radio" name="jk" value="P" id="customRadio1" name="customRadio">
                          <label for="customRadio1" class="custom-control-label">Perempuan</label>
                        </div>
                                         
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
