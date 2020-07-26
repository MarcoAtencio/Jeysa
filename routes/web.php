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
Route::get('/', 'HomeController@index')->name('home');

Route::resource("/admin/product","ProductController");

Route::resource("/admin","AdminController");




Route::get('/Administrador/ProductRegist', function () {
    return view('products.ProductRegist');
});
Route::get('/Administrador', function () {
    return view('admin');
});
Route::get('/Administrador/ProductUpdate', function () {
    return view('products.ProductUpdate');
});
Route::get('/Administrador/ProductList', function () {
    return view('products.ProductList');
});
Route::get('/Administrador/ProductUpdate', function () {
    return view('products.ProductUpdate');
});
Route::get('/Administrador/ProductDelete', function () {
    return view('products.ProductDelete');
});
Route::get('/Administrador/Coment', function () {
    return view('coments.coment');
});


/*COMENTARIOS*/



Auth::routes();


