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

Route::get('/', 'ShopController@index');
Route::get('/post/{post}','ShopController@show');
Route::get('/add-post','ShopController@addPost');
Route::post('/store', 'ShopController@store');
Route::get('/category-page','ShopController@category');
Route::get('/delete/{post}','ShopController@delete');
Route::get('/update/{post}','ShopController@update');
Route::patch('/shopupdate/{post}','ShopController@shopUpdate');
Route::post('/post/{post}/comment','CommentController@addComment');
Route::get('/table','ShopController@table');
Route::get('/addPost2', 'ShopController@addPost2');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


