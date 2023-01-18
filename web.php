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

// ketika kita aksek ke halaman ini maka akan menampilkan halaman ini
// jalankan semua yang ada di dalam funcvtion nya 

Route::get('/home', function () {
    //tampilan view yang namanya welcome
    return ('halaman Home');
});

Route::get('/about', function () {
    //tampilan view yang namanya welcome
    return ('halaman Aboout');
});

Route::get('/blog', function () {
    //tampilan view yang namanya welcome
    return ('welcome Blog');
});

Route::get('/vaundy', function () {
    //tampilan view yang namanya welcome
    return ('to ka ni huri wa kitta towa noueta utta suto naro watashi mura riwa ta la mokotto
    ');
});

Route::get('/belajar', function () {
    echo '<h1>Hello World</h1>';
    echo '<p>sedamg belajar Laravel</p>';
});

Route::get('/siswa/smkbpi/rpl', function () {
    echo '<h2 style="text-align: center"><u>Welcome to 11 RPL</u></h2>';
});

Route::get('/Siswa/{yazid}', function ($yazid) {
    return "Tampilkan data siswa bernama $yazid";
});

Route::get('/stok_barang/{jenis}/{merek}', function ($yazid,$merek) {
    return "cek sisa stok untuk $yazid $merek";
});

Route::get('/profile', function () {
    return view('profile');
});

