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
    return view('home');
})->name("home");

Route::get('/products', function () {
    $data = config("pasta-type");
    $products = [];
    foreach ($data as $key => $value) {
        $value["id"] = $key; 
        $products[$value["tipo"]][]  = $value; 
    }
    return view('products', ["products" => $products]);
})->name("products");

Route::get('/news', function () {
    return view('news');
})->name("news");

Route::get('/products/show/0', function () {
    $product = config("pasta-type.0");
    return view('products/single-product', ["data" => $product]);
})->name("single-product");
