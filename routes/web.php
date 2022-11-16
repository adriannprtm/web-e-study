<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
    return view('login');
});

Route::get('/data-user', function () {
    return view('kelas.10');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/intro', function () {
    return view('tampilan.intro');
});

Route::get('/beranda', function ()
{
    return view('tampilan.beranda');
});

Route::get('/insert',function(){
    $stuRef = app('firebase.firestore')->database()->collection('Pengguna')->newDocument();
    $stuRef->set([
        'nama' => 'ian',
        'alamat' => 'gumuruh',
        'umur' => '18'
    ]);
});

//pengguna
Route::get('/pengguna', [HomeController::class, 'pengguna']);
Route::get('/create_pengguna', [HomeController::class, 'create_pengguna']);
Route::post('/pengguna/store', [HomeController::class, 'store_pengguna']);
Route::get('/delete/pengguna/{id}', [HomeController::class, 'hapus_pengguna']);
