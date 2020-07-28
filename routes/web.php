<?php

use App\Product;
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
Route::get("/admin",function (){
    return view("admin");
})->name("adminHome");
Route::resource("/admin/product","ProductController");
Route::resource("/admin/employee","EmployeeController");

Auth::routes();


/*clientes*/
Route::get('/client', function () {
    return view('client');
})->name('client');
Route::get('/client/dealings', function () {
    return view('clients.dealings');
});
Route::get('/client/comments', function () {
    return view('clients.comments');
});
Route::get('/client/man', function () {
    $products = Product::all();
    return view('clients.man',["products" => $products]);
});
