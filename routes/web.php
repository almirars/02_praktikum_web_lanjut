<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\articleController;

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
    return ('Selamat Datang');
});

Route::get('/about', function () {
    return ('NIM: 1931710129 <br>
    Nama: Almira Rahma Sabita <br>
    Kelas: TSA WEB B');
});

Route::get('/article/1', function () {
    return ('Ini artikel 1');
});

Route::get('/article/2', function () {
    return ('Ini artikel 2');
});


// Route::get('article', [articleController::class, 'index']);
// Route::get('about', [articleController::class, 'about']);
