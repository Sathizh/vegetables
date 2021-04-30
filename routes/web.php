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
    return view('layout.base');
});
Route::get('/purchase', function () {
    return view('purchase.purchase');
});
Route::get('/purchase_list', function () {
    return view('purchase.purchase_list');
});
Route::get('/new_purchse', function () {
    return view('purchase.new');
});
