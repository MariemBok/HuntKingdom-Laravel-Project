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
    Route::get('/shop-details', function () {
        return view('frontOffice/shop-details');
    });
    Route::get('/shop', function () {
        return view('frontOffice/shop');
    });
    Route::get('/shopping-cart', function () {
        return view('frontOffice/shopping-cart');
    });

});





