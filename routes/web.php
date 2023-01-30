<?php

use App\Http\Controllers\admin\ContactController;
use App\Http\Controllers\admin\PartnerAdminController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\front\PartnerFrontController;
use App\Http\Controllers\front\ZipperCategoryController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\Zipper\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $sliders = \App\Models\SliderItem::all();
    $categories = \App\Models\ZipperCategory::orderBy('created_at', 'desc')->paginate(3);
    $partners = \App\Models\Partner::all();
    return view('front.index', compact('sliders', 'categories', 'partners'));
});

Route::group(['prefix' => 'front', 'namespace' => 'front'], function () {
    Route::get('/category-zipper', [ZipperCategoryController::class, 'index'])->name('front.zipper-category');
    Route::group(['prefix' => 'contact'], function () {
        Route::post('/store', [ContactController::class, 'store'])->name('front.contact.store');
    });
    Route::group(['prefix' => 'partner'], function () {
        Route::post('/partner', [PartnerFrontController::class, 'index'])->name('front.partner.index');
    });
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
    Route::group(['prefix' => 'partners'], function () {
        Route::get('/', [PartnerAdminController::class, 'index'])->name('admin.partners');
        Route::post('/store', [PartnerAdminController::class, 'store'])->name('admin.partners.store');
        Route::post('/{id}/edit', [PartnerAdminController::class, 'edit'])->name('admin.partners.edit');
        Route::delete('/{id}', [PartnerAdminController::class, 'destroy'])->name('admin.partners.delete');

    });
});
