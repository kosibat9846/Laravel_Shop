<?php

use App\Http\Controllers\ProductMDBController;
use App\Http\Controllers\ProductSQLController;

use App\Models\MDB\Products;
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


////// MySQL

Route::get('/', function () {
    return view('welcome');
});

Route::resource('sql-products','ProductSQLController');

Route::get('sql-products/search/{name}',[ProductSQLController::class,'search']);
Route::get('sql-productdetails/{product_id}',[ProductSQLController::class,'productdetail']);
Route::get('sql-categories',[ProductSQLController::class,'categories']);
Route::get('sql-subcategories/{category_id}',[ProductSQLController::class,'subcategories']);



////// MONGODB

Route::resource('nosql/products','ProductMDBController');

Route::get('nosql/categories',[ProductMDBController::class,'categories']);





