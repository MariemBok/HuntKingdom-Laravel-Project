<?php

use App\Http\Controllers\backOffice\EventController;
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
//back office routes
Route::prefix('back')->group(function () {
    Route::get('/', function () {
        return view('backOffice/index');
    });
    //categoryRoute
    Route::controller(App\Http\Controllers\backOffice\CategoryController::class)->group(function () {
        Route::get('category', 'index');
        Route::get('category/create', 'create');
        Route::post('category', 'store');
        Route::get('category/{category}/edit', 'edit');
        Route::put('category/{category}', 'update');
        Route::delete('category/delete/{category}', 'destroy');
    });
    //ProductRoute
    Route::controller(App\Http\Controllers\backOffice\ProductController::class)->group(function () {
        Route::get('product', 'index');
        Route::get('product/create', 'create');
        Route::post('product', 'store');
        Route::get('product/{product}/edit', 'edit');
        Route::put('product/{product}', 'update');
        Route::delete('product/delete/{product}', 'destroy');
    });

    Route::controller(EventController::class)->group(function () {
        Route::get('events', 'index');
        Route::get('event/{id}', 'getEventById');

        Route::get('events/create', 'create');
        Route::post('event/store', 'store');
        Route::get('event/{id}/edit', 'edit');
        Route::post('event/update/{id}', 'update');
        Route::get('events/delete/{id}', 'delete');
    });
    Route::get('/event/add', function () {
        return view('backOffice/app-email');
    });

    Route::get('/app-email', function () {
        return view('backOffice/app-email');
    });
    Route::get('/app-event-calender', function () {
        return view('backOffice/app-event-calender');
    });

    Route::get('/app-profile', function () {
        return view('backOffice/app-profile');
    });
    Route::get('/table-basic', function () {
        return view('backOffice/table-basic');
    });
    Route::get('/table-export', function () {
        return view('backOffice/table-export');
    });
    Route::get('/form-basic', function () {
        return view('backOffice/form-basic');
    });
    Route::get('/form-validation', function () {
        return view('backOffice/form-validation');
    });
});
//front office routes
Route::prefix('/')->group(function () {
    //product-management Route
    Route::controller(\App\Http\Controllers\frontOffice\ProductController::class)->group(function () {
        Route::get('shop', 'index');
        Route::get('shop-details/{product}', 'showProductDetails');
        Route::get('shop/productByCategory/{idCategory}', 'productsByCategory');
        Route::GET('shop/sort-by', 'sort_by');

    });
    Route::get('/', function () {
        return view('frontOffice/index');
    });
    Route::get('/about', function () {
        return view('frontOffice/about');
    });
    Route::get('/blog', function () {
        return view('frontOffice/blog');
    });
    Route::get('/blog-details', function () {
        return view('frontOffice/blog-details');
    });
    Route::get('/checkout', function () {
        return view('frontOffice/checkout');
    });
    Route::get('/contact', function () {
        return view('frontOffice/contact');
    });
   /* Route::get('/shop-details', function () {
        return view('frontOffice/shop-details');
    });*/

    Route::get('/shopping-cart', function () {
        return view('frontOffice/shopping-cart');
    });
});
