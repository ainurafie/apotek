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
Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/register', function () {
    return view('auth.register');
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
Route::get('/shop', function () {
    return view('shop.index');
});
Route::get('/cart', function () {
    return view('cart.index');
});
Route::get('/checkout', function () {
    return view('cart.checkout');
});
Route::get('/qris', function () {
    return view('cart.qris');
});
Route::get('/myorder', function () {
    return view('cart.myorder');
});
Route::get('/pembayaran-success', function () {
    return view('cart.pembayaran-success');
});
Route::get('/privacy-police', function () {
    return view('about.privacy-police');
});
Route::get('/terms-conditions', function () {
    return view('about.terms-conditions');
});
