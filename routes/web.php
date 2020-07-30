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

Route::get("/admin",function (){
    return view("admin");
})->name("adminHome");
Route::resource("/admin/product","ProductController");
Route::resource("/admin/employee","EmployeeController");

Auth::routes();


/*clientes*/
Route::get('/', function () {
    return view('client');
})->name('client');
Route::get('/dealings', function () {
    return view('clients.dealings');
});
Route::get('/politics', function () {
    return view('clients.politics');
});
Route::get('/comments', function () {
    return view('clients.comments');
});
Route::resource('/man','ProductMan')->only(["index", "show"]);
Route::resource('/woman','ProductWoman')->only(["index", "show"]);



