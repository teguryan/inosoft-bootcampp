<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ProductController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/index1','App\Http\Controllers\ItemController@index');
Route::get('/index2',[ItemController::class,'index2']);
Route::get('/item/form',[ItemController::class,'itemForm']);
Route::post('/item/post',[ItemController::class,'itemPost']);
Route::get('/item/{itemName}',[ItemController::class,'item']);

Route::get('/product',[ProductController::class,'index']);
Route::get('/product/form',[ProductController::class,'create']);
Route::post('/product/store',[ProductController::class,'store']);
