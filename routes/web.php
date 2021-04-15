<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\UserController;




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

// Route::get('/', function () {
//     return view('page/v_home');
// });

// Route::get('/siswa/{nama_siswa}' , function($nama_siswa){
//     return view('page.siswa.v_index',['nama_siswa' => $nama_siswa]);

// });

// // format lain
// $data = ['nama' => 'Yudi gunawan','alamat' => 'sumanda'];
// Route::view('about' ,'page/v_about',$data);
// Route::view('admin','page.admin.v_index');

// // tutrial blade

// Route::get('/guru',function(){
    
//     return view('page_2.v_guru');
// });

// Route::get('about2' , function(){

//     return view('page_2.v_about');

// });

// Route::get('/home' , function(){

//     return view('page_2.v_home');

// });

// Route::get('/siswa2' , function(){

//     return view('page_2.v_siswa');

// });

// Route::get('/contact' , function(){
//     return view('page_2.v_contact');
// });
Route::get('/' , [HomeController::class,'index']);
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

// hak akses untuk admin
Route::group(['middleware' => 'admin'],function(){
    Route::get('/guru' , [GuruController::class, 'index'])->name('guru');//name digunakan untuk redirect
    Route::get('/guru/detail/{id}' , [GuruController::class, 'detail']);
    Route::get('guru/add', [GuruController::class, 'add']);
    Route::post('guru/insert', [GuruController::class, 'insert']);
    Route::get('guru/edit/{id}',[GuruController::class,'edit']);
    Route::post('guru/update/{id}', [GuruController::class, 'update']);
    Route::get('guru/delete/{id}',[GuruController::class,'delete']);
    Route::get('/siswa', [SiswaController::class,'index']);
    Route::get('/penjualan', [PenjualanController::class,'index']);
    Route::get('/penjualan/print', [PenjualanController::class,'print']);
    Route::get('/penjualan/printPDF', [PenjualanController::class,'printpdf']);
 
});

Route::group(['middleware' => 'user'],function(){
    Route::get('/user' , [App\Http\Controllers\UserController::class, 'index'])->name('user');

});

Route::group(['middleware' => 'pelanggan'],function(){
    Route::get('/pelanggan', [App\Http\Controllers\PelangganController::class, 'index'])->name('pelanggan');
});