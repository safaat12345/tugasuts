<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\stmikController;
use App\Http\Controllers\pegawaiController;
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
    return view('welcome');
});


Route::get('/stmik',[stmikController::class, 'index']);

Route::get('/registrasi',[stmikController::class, 'login']);


Route::get('/login', function () {
    return view('Auth.Login');
})->name('login')->middleware('guest');

Route::prefix('auth')->controller(LoginController::class)->group(function () {
    Route::post('/login', 'login')->name('auth.loginproccess');
    Route::get('/logout', 'logout')->name('logout');
});

Route::middleware('auth')->group(function () {
    Route::get('/', [DashboardController::class, 'index']);


    Route::get('/pegawai', [pegawaiController::class, 'index'])->name('pegawai.index');
    Route::get('/create', [pegawaiController::class, 'create'])->name('pegawai.create');
    Route::post('/createpegawai', [pegawaiController::class, 'store'])->name('pegawai.store');

    Route::get('/edit/{id}', [pegawaiController::class, 'edit'])->name('pegawai.edit');

    Route::post('/update/{id}', [pegawaiController::class, 'update'])->name('pegawai.update');

    Route::get('/delete/{id}', [pegawaiController::class, 'delete'])->name('pegawai.delete');
});