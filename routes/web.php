<?php

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
Route::get('/product/display', 'ProductController@showAll');
Route::post('/product/save', 'ProductController@saveNew');
Route::get("products/{id}", "ProductController@show");
Route::get("/products/list", "ProductController@list");
Route::post("/products/create", "ProductController@create");
Route::put("/products/{id}", "ProductController@update");
Route::get("products", "ProductController@index");
Route::post("products", "ProductController@store");
Route::group(["prefix"=>"/products"], function(){
	Route::get("/all", "ProductController@all");
	Route::get("/bag", "ProductController@bag");
	Route::get("/latest", "ProductController@latest");
	Route::get("/discounts", "ProductController@discounts");
});

Route::group(["prefix"=>"admin", "middleware"=>"mustAdmin"], function(){
	Route::get("/dashboard", "DashboardController@index");
	Route::get("/orders", "DashboardController@index");
	// definisi route lainnya di sini
});
Route::resource("categories", "CategoryController");
Route::group(["prefix" => "latihan"], function(){
Route::get("/kategori/all", "CategoryController@index");
Route::get("/kategori/search", "CategoryController@search");
Route::get("/kategori/{id}/delete", "CategoryController@delete");
Route::get("/kategori/{id}/restore", "CategoryController@restore");
Route::get("/kategori/{id}/permanent-delete",
"CategoryController@permanentDelete");
Route::view("layouts", "child");
});
Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
