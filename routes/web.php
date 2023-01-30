<?php

use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\front\ZipperCategoryController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\Zipper\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $sliders = \App\Models\SliderItem::all();
    $categories = \App\Models\ZipperCategory::all();
    return view('front.index', compact('sliders', 'categories'));
});

Route::group(['prefix' => 'front', 'namespace' => 'front'], function () {
    Route::get('/category-zipper', [ZipperCategoryController::class, 'index'])->name('front.zipper-category');
});

Route::group(['prefix' => 'admin', 'namespace' => 'admin'], function () {
    Route::get('/', function () {
        return view('layouts.admin');
    })->name('admin.home');
    Route::group(['prefix' => 'slider'], function () {
        Route::get('/', [SliderController::class, 'index'])->name('admin.slider');
        Route::post('/store', [SliderController::class, 'store'])->name('admin.slider.store');
        Route::delete('/{id}', [SliderController::class, 'destroy'])->name('admin.slider.delete');
    });
    Route::group(['prefix' => 'categories'], function () {
        Route::get('/', [CategoryController::class, 'index'])->name('admin.categories');
        Route::post('/store', [CategoryController::class, 'store'])->name('admin.categories.store');
        Route::delete('/{id}', [CategoryController::class, 'destroy'])->name('admin.categories.delete');
        Route::get('/{id}', [CategoryController::class, 'show'])->name('admin.categories.show');
    });
    Route::group(['prefix' => 'products'], function () {
        Route::get('/', [ProductController::class, 'index'])->name('admin.products');
        Route::post('/store', [ProductController::class, 'store'])->name('admin.products.store');
        Route::post('/{id}/edit', [ProductController::class, 'edit'])->name('admin.products.edit');
        Route::delete('/{id}', [ProductController::class, 'destroy'])->name('admin.products.delete');
        Route::get('/search', [ProductController::class, 'search'])->name('admin.products.search');
    });
});
