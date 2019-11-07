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




