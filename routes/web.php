<?php

use App\Http\Controllers\ProductMDBController;
use App\Http\Controllers\ProductSQLController;

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

Route::resource('/sql-products','ProductSQLController');

Route::get('/sql-products/search/{name}',[ProductSQLController::class,'search']);
Route::get('/sql-productdetails/{product_id}',[ProductSQLController::class,'productdetail']);

Route::get('/sql-categories',[ProductSQLController::class,'categories']);
Route::get('/sql-subcategories/{category_id}',[ProductSQLController::class,'subcategories']);
Route::get('/sql-subcategoriesproducts/{subcategory_id}',[ProductSQLController::class,'subcategoriesproducts']);
















////// MONGODB

Route::resource('/nosql/products','ProductMDBController');//// Wszytskie produkty
Route::get('/nosql/product/{_id}',[ProductMDBController::class,'productdetails']); ///Jeden produkt
Route::get('/nosql/categories',[ProductMDBController::class,'categories']); ////Wszytskie kategorie

///
///
///
///
Route::get('/nosql-search/{name}',[ProductMDBController::class,'search']);
Route::get('/nosql-subcategories/{category}',[ProductMDBController::class,'subcategories']);
Route::get('/nosql/subcategoriesindex/{subcategory}',[ProductMDBController::class,'subcategoriesindex']);





