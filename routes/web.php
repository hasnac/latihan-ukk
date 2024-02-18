<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PinjamController;
use App\Http\Controllers\ViewController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [ViewController::class, 'index']);
Route::get('/listbook', function () {
    return view('user.list_book');
});
Route::get('listbook/fiksi', function () {
    return view('user.fiksi');
});
Route::get('/detailbook', function () {
    return view('user.detail');
});
Route::group(['middleware' => ['auth', 'checkrole:admin,staff']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::resource('/buku', BukuController::class);
    Route::resource('/pinjam', PinjamController::class);
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});
Route::group(['middleware' => ['auth', 'checkrole:user,admin,staff']], function () {
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/listbook', function () {
        return view('user.list_book');
    });
});
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'login_action'])->name('login.action');
Route::get('/register', [LoginController::class, 'create']);
Route::post('/register', [LoginController::class, 'register'])->name('register');
Route::get('/koleksi', function () {
    return view('user.koleksi');
});



Route::get('/report', function () {
    return view('report.index');
});
Route::get('report/all', function () {
    return view('report.one');
});
