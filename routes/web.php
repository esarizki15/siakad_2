<?php

//Dashboard
Route::get('/', 'Dashboard@index');
Route::get('/dashboard','Dashboard@index');

//Jurusan
Route::get('/jurusan','DataJurusan@index');
Route::get('/jurusan/add','DataJurusan@create');
Route::post('/jurusan/store','DataJurusan@store');
Route::get('/jurusan/edit/{id}','DataJurusan@edit');
Route::put('/jurusan/update/{id}','DataJurusan@update');
Route::get('/jurusan/delete/{id}','DataJurusan@destroy');

//Kelas 
Route::get('/kelas','DataKelas@index');
Route::get('/kelas/add','DataKelas@create');
Route::post('/kelas/store','DataKelas@store');
Route::get('/kelas/edit/{id}','DataKelas@edit');
Route::put('/kelas/update/{id}','DataKelas@update');
Route::get('/kelas/delete/{id}', 'DataKelas@destroy');

//Siswa
Route::get('/siswa', 'DataSiswa@index');
Route::get('/siswa/add', 'DataSiswa@create');
Route::post('/siswa/store', 'DataSiswa@store');
Route::get('/siswa/update/{id}','DataSiswa@edit');
Route::put('/siswa/update/{id}', 'DataSiswa@update');
Route::get('/siswa/delete/{id}', 'DataSiswa@destroy');


//Jenjang Pendidikan
Route::get('jenjang-pendidikan', 'Jenjangpendidikan@index');
Route::get('jenjang-pendidikan/add', 'Jenjangpendidikan@create');
Route::post('jenjang-pendidikan/store', 'Jenjangpendidikan@store');
Route::get('jenjang-pendidikan/edit/{id}', 'Jenjangpendidikan@edit');
Route::put('jenjang-pendidikan/update/{id}', 'Jenjangpendidikan@update');
Route::get('jenjang-pendidikan/delete/{id}', 'Jenjangpendidikan@destroy');

//Data Guru
Route::get('guru','DataGuru@index');
Route::get('guru/add','DataGuru@create');
Route::post('guru/store','DataGuru@store');
Route::get('guru/edit/{id}','DataGuru@edit');
Route::put('guru/update/{id}','DataGuru@update');
Route::get('guru/delete/{id}','DataGuru@destroy');



