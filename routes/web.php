<?php

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

Route::get('/', [\App\Http\Controllers\IndexController::class, 'index'])->name('index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['prefix' => 'admin'], function () {

    Route::get('/', \App\Http\Controllers\Admin\IndexController::class)->name('admin.index');

    Route::group(['prefix' => 'categories'], function () {

        Route::get('/', [\App\Http\Controllers\Admin\CategoriesController::class, 'index'])->name('admin.category.index');
        Route::get('/create', [\App\Http\Controllers\Admin\CategoriesController::class, 'create'])->name('admin.category.create');
        Route::post('/', [\App\Http\Controllers\Admin\CategoriesController::class, 'store'])->name('admin.category.store');
        Route::get('/edit/{category}', [\App\Http\Controllers\Admin\CategoriesController::class, 'edit'])->name('admin.category.edit');
        Route::put('/{category}', [\App\Http\Controllers\Admin\CategoriesController::class, 'update'])->name('admin.category.update');
        Route::delete('/{category}', [\App\Http\Controllers\Admin\CategoriesController::class, 'delete'])->name('admin.category.delete');
        Route::get('/data', [\App\Http\Controllers\Admin\CategoriesController::class, 'data'])->name('admin.category.data');

    });

    Route::group(['prefix' => 'products'], function () {

        Route::get('/', [\App\Http\Controllers\Admin\ProductsController::class, 'index'])->name('admin.product.index');
        Route::get('/create', [\App\Http\Controllers\Admin\ProductsController::class, 'create'])->name('admin.product.create');
        Route::post('/', [\App\Http\Controllers\Admin\ProductsController::class, 'store'])->name('admin.product.store');
        Route::get('/edit/{product}', [\App\Http\Controllers\Admin\ProductsController::class, 'edit'])->name('admin.product.edit');
        Route::put('/{product}', [\App\Http\Controllers\Admin\ProductsController::class, 'update'])->name('admin.product.update');
        Route::delete('/{product}', [\App\Http\Controllers\Admin\ProductsController::class, 'delete'])->name('admin.product.delete');
        Route::get('/data', [\App\Http\Controllers\Admin\ProductsController::class, 'data'])->name('admin.product.data');

        Route::post('/images/upload', [\App\Http\Controllers\Admin\ProductsController::class, 'imagesUpload'])->name('admin.product.images.upload');

    });

    Route::group(['prefix' => 'reviews'], function () {

        Route::get('/', [\App\Http\Controllers\Admin\ReviewsController::class, 'index'])->name('admin.review.index');
        Route::get('/create', [\App\Http\Controllers\Admin\ReviewsController::class, 'create'])->name('admin.review.create');
        Route::post('/', [\App\Http\Controllers\Admin\ReviewsController::class, 'store'])->name('admin.review.store');
        Route::get('/edit/{review}', [\App\Http\Controllers\Admin\ReviewsController::class, 'edit'])->name('admin.review.edit');
        Route::put('/{review}', [\App\Http\Controllers\Admin\ReviewsController::class, 'update'])->name('admin.review.update');
        Route::delete('/{review}', [\App\Http\Controllers\Admin\ReviewsController::class, 'delete'])->name('admin.review.delete');
        Route::get('/data', [\App\Http\Controllers\Admin\ReviewsController::class, 'data'])->name('admin.review.data');

    });

    Route::group(['prefix' => 'promotions'], function () {

        Route::get('/', [\App\Http\Controllers\Admin\PromotionsController::class, 'index'])->name('admin.promotion.index');
        Route::get('/create', [\App\Http\Controllers\Admin\PromotionsController::class, 'create'])->name('admin.promotion.create');
        Route::post('/', [\App\Http\Controllers\Admin\PromotionsController::class, 'store'])->name('admin.promotion.store');
        Route::get('/edit/{promotion}', [\App\Http\Controllers\Admin\PromotionsController::class, 'edit'])->name('admin.promotion.edit');
        Route::put('/{promotion}', [\App\Http\Controllers\Admin\PromotionsController::class, 'update'])->name('admin.promotion.update');
        Route::delete('/{promotion}', [\App\Http\Controllers\Admin\PromotionsController::class, 'delete'])->name('admin.promotion.delete');
        Route::get('/data', [\App\Http\Controllers\Admin\PromotionsController::class, 'data'])->name('admin.promotion.data');

    });

});
