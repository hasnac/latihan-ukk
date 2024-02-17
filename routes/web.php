<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
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

Route::get('/', function () {
    return view('landing');
});
Route::get('/listbook', function () {
    return view('user.list_book');
});
Route::get('listbook/fiksi', function () {
    return view('user.fiksi');
});
Route::get('/detailbook', function () {
    return view('user.detail');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});

Route::get('/koleksi', function () {
    return view('user.koleksi');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/report', function () {
    return view('report.index');
});
Route::get('report/all', function () {
    return view('report.one');
});
