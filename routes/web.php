<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('page/v_home');
});

Route::get('/siswa/{nama_siswa}' , function($nama_siswa){
    return view('page.siswa.v_index',['nama_siswa' => $nama_siswa]);

});

// format lain
$data = ['nama' => 'Yudi gunawan','alamat' => 'sumanda'];
Route::view('about' ,'page/v_about',$data);
Route::view('admin','page.admin.v_index');