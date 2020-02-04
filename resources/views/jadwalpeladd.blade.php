@extends('main.sidebar')
@section('konten')
<link rel="stylesheet" href="{{url('plugins/select2/css/select2.min.css')}}">
<div class="content-wrapper">
   <div class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-12" style="border-radius: 5px;">
               <ol class="breadcrumb float-sm-left">
                  <li class="breadcrumb-item"><a href="#"><i class="fa fa-chevron-circle-right"></i> {{$title}}</a></li>
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
                <h3 class="card-title"><i class="fa fa-plus-circle"></i> {{$title}}</h3>
              </div>
              <form role="form" action="{{url('jadwal-pelajaran/save')}}" method="post">
                  {{csrf_field()}}
                  <div class="card-body">
                  <div class="col-md-3">
                  <div class="form-group col-md">
                        <label>Hari</label>
                        <select name="hari" class="form-control">
                            <option>Pilih Hari</option>
                            <option value="1">SENIN</option>
                        </select>
                    </div>
                    <div class="form-group col-md">
                        <label>Tahun Ajaran</label>
                        <select name="tahun_ajaran" class="form-control">
                            <option>Pilih Tahun Ajaran</option>
                            @foreach($tahun_ajaran as $ta)
                            <option value="{{$ta->tahun_ajaran_id}}">{{$ta->tahun_ajaran}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md">
                        <label for="exampleInputPassword1">Kelas</label>
                        <select name="kelas" class="form-control">
                           <option value="Normatif">Pilih Kelas</option>
                           @foreach($kelas as $row)
                           <option value="Produktif">{{$row->nama_kelas}}</option>
                           @endforeach
                        </select>
                     </div>
                     <div class="form-group col-md">
                        <label for="exampleInputPassword1">Guru</label>
                        <select name="guru" class="form-control">
                           <option value="Normatif">Pilih Guru</option>
                           @foreach($guru as $row)
                           <option value="Produktif">{{$row->nama_lengkap}}</option>
                           @endforeach
                        </select>
                     </div>
                     <div class="form-group col-md">
                        <label for="exampleInputPassword1">Mata Pelajaran</label>
                        <select name="mata_pelajaran" class="form-control">
                           <option>Pilih Mata Pelajaran</option>
                           @foreach($mata_pelajaran as $row)
                           <option value="Produktif">{{$row->nama_mapel}}</option>
                           @endforeach
                        </select>
                     </div>
                     </div>
                  </div>
                <div class="card-footer">
                  <a class="btn btn-danger bg-gradient-danger btn-sm" href="{{url('kelas/')}}"><i class="fa fa-chevron-circle-left"></i> Kembali</a>
                  <button type="submit" class="btn btn-primary bg-gradient-primary btn-sm"><i class="fa fa-check"></i> Simpan</button>
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
