<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeCController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\AuController;
use App\Http\Controllers\ContactController;



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
//     return ('Selamat Datang');
// });

// Route::get('/about', function () {
//     return ('NIM: 1931710129 <br>
//     Nama: Almira Rahma Sabita <br>
//     Kelas: TSA WEB B');
// });

// Route::get('/article/{id}', function ($id) {
//     return ('Ini artikel '. $id);
// });

// Route::get('/', [PageController::class, 'index']);
// Route::get('post', [PageController::class, 'about']);
// Route::get('post/{id}', [PageController::class, 'articles']);

// Route::get('/', [HomeController::class, 'index']);
// Route::get('/', [AboutController::class, 'index']);
// Route::get('/{id}', [ArticleController::class, 'show']);


// Route::get('/', function () {
//     return view ('welcome');
// });

// Route::get('/home', [HomeCController::class, 'index']);

// Route::prefix('category')->group(function (){
//     Route::get('/{id}', [ProductController::class, 'products']);
// });

// Route::get('/news/{id?}', [NewsController::class, 'news']);

// Route::prefix('program')->group(function (){
//     Route::get('/{id}', [ProgramController::class, 'program']);
// });

// Route::get('/aboutUs', [AuController::class, 'about']);

// Route::resource('contactUs', ContactController::class);