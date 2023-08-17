<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\LacakPesananController;
use App\Http\Controllers\UpdateStatusController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::name('auth.')->group(function (){
    Route::get('/login', [LoginController::class, 'index'])->name('index')->middleware('guest');
    Route::post('/login', [LoginController::class, 'login'])->name('login');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
});

Route::name('register.')->group(function (){
    Route::get('/register', [RegisterController::class, 'index'])->name('index');
    Route::post('/register', [RegisterController::class, 'create'])->name('create');
});

Route::get('/', [HomeController::class, 'index']);
Route::resource('/lacak', LacakPesananController::class);

Route::resource('/order', OrderController::class);
Route::resource('/update-status', UpdateStatusController::class);

Route::get('/katalog', function () {
    return view('catalog');
});
Route::get('/detail-katalog', function () {
    return view('detail-catalog');
});
