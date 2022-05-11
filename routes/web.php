<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route Login
Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('/', [LoginController::class, 'loginAkun']);
Route::get('/beranda', [LoginController::class, 'beranda'])->middleware('auth');
Route::get('/regist', [LoginController::class, 'regist']);
Route::post('/regist', [LoginController::class, 'registerAkun']);
Route::post('/logout', [LoginController::class, 'logoutAkun']);
