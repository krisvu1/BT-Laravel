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



Route::get('/Product', function () {
    return view('ProductSingle');
})->name('Product');

Route::get('/HomePage', function () {
    return view('HomePage2');

} )->name('HomePage');


Route::get('/Layout', function () {
    return view('layout/layout');

} )->name('Layout');