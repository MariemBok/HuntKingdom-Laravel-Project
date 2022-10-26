<?php

use App\Http\Controllers\backOffice\EventController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for p which
| contains the "web" middleware group. Now create something great!
|
*/
//back office routes
Route::prefix('back')->group(function () {
    Route::get('/', function () {
        return view('backOffice/index');
    });
    //categoryRoute
    Route::controller(
        \App\Http\Controllers\backOffice\CategoryController::class
    )->group(function () {
        Route::get('category', 'index');
        Route::get('category/create', 'create');
        Route::post('category', 'store');
        Route::get('category/{category}/edit', 'edit');
        Route::put('category/{category}', 'update');
        Route::delete('category/delete/{category}', 'destroy');
    });
    //ProductRoute
    Route::controller(
        \App\Http\Controllers\backOffice\ProductController::class
    )->group(function () {
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
    Route::controller(
        \App\Http\Controllers\frontOffice\ProductController::class
    )->group(function () {
        Route::get('shop', 'index');
        Route::get('shop-details/{product}', 'showProductDetails');
        Route::get('shop/productByCategory/{idCategory}', 'productsByCategory');
        Route::GET('shop/sort-by', 'sort_by');
        Route::post('add_cart/{id}', 'add_cart');
        Route::GET('show_cart', 'show_cart');
        Route::GET('remove_cart/{id}', 'remove_cart');




    });
    Route::get('/', function () {
        return view('frontOffice/index');
    });
    Route::get('/about', function () {
        return view('frontOffice/about');
    });

    Route::resource('comments', App\Http\Controllers\CommentController::class);

//CATEGORY POST
    Route::resource('categories', App\Http\Controllers\CategoryPostController::class);
//POST
     Route::resource('posts', App\Http\Controllers\PostsController::class);

    Route::get('/blog-details', function () {
        return view('frontOffice/posts/show');
    });
    Route::get('/checkout', function () {
        return view('frontOffice/checkout');
    });
    Route::get('/contact', function () {
        return view('frontOffice/contact');
    });

    Route::get('/shopping-cart', function () {
        return view('frontOffice/shopping-cart');
    });
    Route::controller(
        App\Http\Controllers\frontOffice\EventController::class
    )->group(function () {
        Route::get('events', 'index');
        Route::get('events/participate/{id}', 'participate');
    });
});

Route::get('/dashboard', function () {
    return view('frontOffice/index');
})
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

require __DIR__ . '/auth.php';

Route::controller(
    \App\Http\Controllers\PostsController::class
)->group(function () {
    Route::get('blog/postByCategory/{idCategory}', 'postsByCategory');
});
Route::get('/posts/pdf', [PostsController::class, 'createPDF']);
