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

Route::get('/', function () {
    return view('pages.frontend.index');
});

Route::get('/contact-us', function () {
    return view('pages.frontend.contact-us');
});


Route::get('/category-politics', function () {
    return view('pages.frontend.category-politics');
});
Route::get('/category-fashion', function () {
    return view('pages.frontend.category-fashion');
});
