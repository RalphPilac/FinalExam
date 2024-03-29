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
Route::get('/product','App\Http\Controllers\ProductController@view');
Route::get('/category','App\Http\Controllers\CategoryController@view');
Route::get('/edit/{id}','App\Http\Controllers\ProductController@edit');    
Route::get('/delete/{id}','App\Http\Controllers\ProductController@delete'); 
Route::get('/add','App\Http\Controllers\ProductController@add');    
Route::post('/add-new','App\Http\Controllers\ProductController@addnew');    

