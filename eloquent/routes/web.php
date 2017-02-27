<?php
use App\Mahasiswa;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/ 

Route::get('/', 'Viewcontroller@index');
Route::get('/tambah', function() {
	$mahasiswa = new Mahasiswa;
	$mahasiswa -> nama ="wini rahmawati";
	$mahasiswa -> nim = "14111103";
	$mahasiswa -> alamat = "Bandung";
	$mahasiswa -> save();
	echo "<b>BERHASIL SIMPAN</b>";
	} );
	
	Route::get('/ubah', function() {
	$mahasiswa = Mahasiswa::find(1);
	$mahasiswa -> nama ="Acung";
	$mahasiswa -> nim = "1234567";
	$mahasiswa -> alamat = "sesame street";
	$mahasiswa -> save();
	echo "<b>BERHASIL DIUBAH</b>";
	} );

	Route::get('/tampil', function()
	{
		$mahasiswa = Mahasiswa::all();
		foreach ($mahasiswa as $mhs)
		{
echo "<br><b>Nama</b> : ";
echo $mhs ->nama;
echo "<br> <b>NIM</b> : ";
echo $mhs ->nim;
echo " <br> <b>Alamat</b> : ";
echo $mhs ->alamat;
		}
	});		
	
	Route::get('/hapus', function()
	{
		$mahasiswa = Mahasiswa::find(1);
		$mahasiswa -> delete();
	echo "<b>BERHASIL DiDELETE</b>";
	});