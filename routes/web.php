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

Route::get('/back', function () {
    return view('backOffice/index');
});
Route::get('/', function () {
    return view('frontOffice/index');
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

