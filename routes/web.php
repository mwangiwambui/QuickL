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


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/','FrontController@index')->name('home');
Route::get('/item','FrontController@item')->name('item');
Route::get('/items','FrontController@items')->name('items');
Route::get('/about','FrontController@about')->name('about');
Route::get('/faq','FrontController@faq')->name('faq');
Route::get('/contact','FrontController@contact')->name('contact');
Route::get('/404','FrontController@error')->name('error');
Route::get('/logout', 'Auth\LoginController@logout')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/cart', 'CartController');
Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){
    Route::get('/',function(){
        return view('admin.index');
    })->name('admin.index');
    Route::resource('product','ProductsController');
    Route::resource('category','CategoriesController');
});