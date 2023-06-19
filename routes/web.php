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
    return view('welcome');
});
Route::get('/about', function () {
    return view('about.index');
});
Route::get('/contact', function () {
    return view('contact.index');
});
Route::get('/vitamin-c', function () {
    return view('detail-product.vitaminC');
});
Route::get('/norvask', function () {
    return view('detail-product.norvask');
});
Route::get('/sanmol', function () {
    return view('detail-product.sanmol');
});
