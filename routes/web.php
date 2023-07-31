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

Route::get('/test', function () {

    $zelenka_api = new \App\Classes\Zelenka\ZelenkaApi();

    dd($zelenka_api->getItemsList());

});

Route::get('/', [\App\Http\Controllers\IndexController::class, 'index'])->name('index');

// Products
Route::get('/products/{product}', [\App\Http\Controllers\ProductsController::class, 'show'])->name('product.show');

// Reviews
Route::get('/reviews', [\App\Http\Controllers\ReviewsController::class, 'index'])->name('review');
Route::post('/reviews', [\App\Http\Controllers\ReviewsController::class, 'store'])->name('review.store');

// Orders
Route::get('/orders', [\App\Http\Controllers\OrdersController::class, 'index'])->name('order.index');
Route::post('/orders/get', [\App\Http\Controllers\OrdersController::class, 'index'])->name('order.get');

// Purchase
Route::post('/product/buy/{product}', [\App\Http\Controllers\ProductsController::class, 'buy'])->name('product.buy');
Route::get('/purchase/product/{invoice}', [\App\Http\Controllers\ProductsController::class, 'getPurchaseDetails'])->name('purchase.details');

// Info pages
Route::get('/guarantee', [\App\Http\Controllers\PagesController::class, 'guarantee'])->name('page.guarantee');
Route::get('/activation', [\App\Http\Controllers\PagesController::class, 'activation'])->name('page.activation');
Route::get('/rules', [\App\Http\Controllers\PagesController::class, 'rules'])->name('page.rules');
Route::get('/scammers', [\App\Http\Controllers\PagesController::class, 'scammers'])->name('page.scammer');

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

    Route::group(['prefix' => 'settings'], function () {

        Route::get('/', [\App\Http\Controllers\Admin\SettingsController::class, 'index'])->name('admin.setting.index');
        Route::put('/', [\App\Http\Controllers\Admin\SettingsController::class, 'update'])->name('admin.setting.update');

    });

    Route::group(['prefix' => 'zelenka'], function () {

        Route::get('/', [\App\Http\Controllers\Admin\ZelenkaController::class, 'index'])->name('admin.zelenka.index');
        Route::get('/parse', [\App\Http\Controllers\Admin\ZelenkaController::class, 'parse'])->name('admin.zelenka.parse');

    });

    Route::group(['prefix' => 'scammers'], function () {

        Route::get('/', [\App\Http\Controllers\Admin\ScammersController::class, 'index'])->name('admin.scammer.index');
        Route::get('/create', [\App\Http\Controllers\Admin\ScammersController::class, 'create'])->name('admin.scammer.create');
        Route::post('/', [\App\Http\Controllers\Admin\ScammersController::class, 'store'])->name('admin.scammer.store');
        Route::get('/{scammer}', [\App\Http\Controllers\Admin\ScammersController::class, 'edit'])->name('admin.scammer.edit');
        Route::put('/{scammer}', [\App\Http\Controllers\Admin\ScammersController::class, 'update'])->name('admin.scammer.update');
        Route::delete('/{scammer}', [\App\Http\Controllers\Admin\ScammersController::class, 'delete'])->name('admin.scammer.delete');

    });

    Route::group(['prefix' => 'instructions'], function () {

        Route::get('/', [\App\Http\Controllers\Admin\InstructionsController::class, 'index'])->name('admin.instruction.index');
        Route::get('/create', [\App\Http\Controllers\Admin\InstructionsController::class, 'create'])->name('admin.instruction.create');
        Route::post('/', [\App\Http\Controllers\Admin\InstructionsController::class, 'store'])->name('admin.instruction.store');
        Route::get('/{instruction}', [\App\Http\Controllers\Admin\InstructionsController::class, 'edit'])->name('admin.instruction.edit');
        Route::put('/{instruction}', [\App\Http\Controllers\Admin\InstructionsController::class, 'update'])->name('admin.instruction.update');
        Route::delete('/{instruction}', [\App\Http\Controllers\Admin\InstructionsController::class, 'delete'])->name('admin.instruction.delete');

    });

    Route::group(['prefix' => 'pages'], function () {

        Route::get('/', [\App\Http\Controllers\Admin\PagesController::class, 'index'])->name('admin.page.index');
        Route::get('/create', [\App\Http\Controllers\Admin\PagesController::class, 'create'])->name('admin.page.create');
        Route::post('/', [\App\Http\Controllers\Admin\PagesController::class, 'store'])->name('admin.page.store');
        Route::get('/edit/{page}', [\App\Http\Controllers\Admin\PagesController::class, 'edit'])->name('admin.page.edit');
        Route::put('/{page}', [\App\Http\Controllers\Admin\PagesController::class, 'update'])->name('admin.page.update');
        Route::delete('/{page}', [\App\Http\Controllers\Admin\PagesController::class, 'delete'])->name('admin.page.delete');
        Route::get('/data', [\App\Http\Controllers\Admin\PagesController::class, 'data'])->name('admin.page.data');

    });

});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/{page}', [\App\Http\Controllers\PagesController::class, 'showPage'])->name('page.show');
