<?php

use App\Http\Controllers\Auth\AuthentificationController;
use App\Http\Controllers\Auth\DisplayController;
use App\Http\Controllers\Auth\ImportationController;
use Illuminate\Support\Facades\Route;

Route::get('user', function () {
    return view('FontEnd.User');
});


Route::get('dashboard', function () {
    return view('Admin.DashboardAcceuil');
});

//Controller UPLoad Image
Route::controller(ImportationController::class)->group(function(){
    Route::get('PageImportImage','index')->name('PageImportImage');
    Route::post('ajoutDocument','store')->name('ajouter'); 
    Route::get('deleteImage/{id}','deleteImage')->name('delete');
    Route::get('/','indexPage')->name('indexPage');
    Route::get('search','search')->name('searchData');
    Route::get('PageImportExcel','PageImportExcel')->name('PageImportExcel');
    Route::get('viewID/{id}','viewImageId')->name('viewImageId');

});

// Display Controller
Route::controller(DisplayController::class)->group(function(){
    Route::get('display','display')->name('display');
    Route::get('viewUpload/{id}','viewUpload')->name('viewUpload');

});

// Authenfication Controller

Route::controller(AuthentificationController::class)->group(function(){
     Route::get('login','login')->name('login');
     Route::get('register','register')->name('register');
});