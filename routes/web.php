<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return view('hello');
});

Route::get('/mahasiswa/{nama}', function ($nama) {
return "Tampilkan data mahasiswa bernama $nama";
});

Route::get('/user/{id}', function ($id){
return"Tampilkan user dengan id = $id";
}) -> where('id', '[0-9]+');

Route::get('/hubungi-kami', function () {
return'<h1>Hubungi Kami</h1>';
});
Route::redirect('/contact-us', '/hubungi-kami');


Route::prefix('/admin')->group(function () {
 Route::get('/mahasiswa', function () {
 echo "<h1>Daftar Mahasiswa</h1>";
 });
 Route::get('/dosen', function () {
 echo "<h1>Daftar Dosen</h1>";
 });
 Route::get('/karyawan', function () {
 echo "<h1>Daftar Karyawan</h1>";
 });
});

Route::fallback(function () {
return"Maaf, alamat tidak ditemukan";
});

// Route::get('/buku/{a}',function($a){
// return"Bukuke-$a";
// });
// Route::get('/buku/{b}',function($b){
// return"Bukusayake-$b";
// });
// Route::get('/buku/{c}',function($c){
// return"Bukukitake-$c";
// });

Route::get('/buku/1',function(){
return"Bukuke-1";
});
Route::get('/buku/1',function(){
return"Bukusayake-1";
});
Route::get('/buku/1',function(){
return"Bukukitake-1";
});

// Route::get('hello', function () {
// $hello = ['Hello World', 2 => ['Hello Jakarta','Hello Medan']];
// dump($hello);
// echo "this is still Running!";
// return $hello;
// });

//Hello for dosen and mahasiswa
Route::get('/hello/dosen', function () {
    return view('dosen.hello');
});

Route::get('/hello/mahasiswa', function () {
    $arrMahasiswa = ['Aisy Fullah', 'Farhan Fauzil', 'Dhiya Salma', 'Faiz Muammar'];
    return view('mahasiswa.hello', compact('arrMahasiswa'));
});