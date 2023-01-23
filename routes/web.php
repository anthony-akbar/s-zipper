<?php

use App\Http\Controllers\ArticlesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard.index');
});

Route::group(['prefix'=>'admin'], function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('admin.home');
   Route::group(['prefix'=>'articles'], function () {
       Route::get('/', [ArticlesController::class, 'index'])->name('admin.articles');
   });
});
