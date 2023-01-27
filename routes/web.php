<?php

use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\Zipper\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $sliders = \App\Models\SliderItem::all();
    return view('dashboard.index', compact('sliders'));
});

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('admin.home');
    Route::group(['prefix' => 'slider'], function () {
        Route::get('/', [SliderController::class, 'index'])->name('admin.slider');
        Route::post('/store', [SliderController::class, 'store'])->name('admin.slider.store');
    });
});
