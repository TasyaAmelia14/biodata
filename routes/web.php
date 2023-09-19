<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pesertadidikR;
use App\Http\Controllers\guruR;
use App\Http\Controllers\pesertadidikPDF;
use App\Http\Controllers\userC;

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

Route::get('pesertadidik/pdf',[pesertadidikPDF::class, 'pdf'])->middleware('auth');
Route::resource('pesertadidik', pesertadidikR::class) ;
Route::resource('guru', guruR::class)->middleware('auth');

Route::get('/', function () {
    return view ('dashboard');
})->middleware('auth');
Route::get('/adminlte', function () {
    return view ('adminlte');
});
Route::get('/dashboard', function () {
    return view ('dashboard');
})->middleware('auth');
Route::get('/login', function () {
    return view ('login');
});
Route::get('/register', function () {
    return view ('register');
});

Route::get('register',[userC::class, 'register'])->name('register');
Route::get('login',[userC::class, 'login'])->name('login');

Route::post('register', [userC::class, 'register_action'])->name('register.action');
Route::post('login', [userC::class, 'login_action'])->name('login.action');

Route::get('logout',[userC::class, 'logout'])->name('logout');