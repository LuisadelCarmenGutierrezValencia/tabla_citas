<?php

use App\Http\Controllers\AgendaController;
use Illuminate\Support\Facades\Auth;
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


use App\Http\Controllers\CitaController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('citas', CitaController::class);
Route::resource('agenda', AgendaController::class);
Route::get('/nuevalista', function () {
    return view('nuevalista');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
