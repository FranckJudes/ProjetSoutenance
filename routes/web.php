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

Route::get('login', function () {
    return view('FontEnd.login');
});
Route::get('register', function () {
    return view('FontEnd.register');
});
Route::get('PageImportImage', function () {
    return view('Admin.PageImportImage');
});
Route::get('PageImportExcel', function () {
    return view('Admin.PageImportExcel');
});
Route::get('/', function () {
    return view('Admin.DashboardAcceuil');
});