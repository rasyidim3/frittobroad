<?php

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

Route::get('/', function () {
    return view('admin.home');
});

Route::get('/home', function () {
    return view('admin.home');
});


Route::get('/table_user', function () {
    return view('pages.user.table_user');
});

Route::get('/table_admin', function () {
    return view('pages.admin.table_admin');
});

Route::get('/kelolauser', function () {
    return view('kelola_user.kelola_user');
});

Route::get('/formvalidasi', function () {
    return view('pages.whatsapp.broadcast');
});




