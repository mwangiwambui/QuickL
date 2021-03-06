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
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Route;

Route::get('/','FrontController@index')->name('home');
Route::get('/items','FrontController@items')->name('items');
Route::get('items/{product}','FrontController@item')->name('item');
Route::get('/complete','FrontController@feedback')->name('feedback');
Route::get('/about','FrontController@about')->name('about');
Route::get('/faq','FrontController@faq')->name('faq');
Route::get('/contact','FrontController@contact')->name('contact');
Route::get('/404','FrontController@error')->name('error');

Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');

Route::resource('/cart', 'CartController');
Route::get('/cart/add-item/{id}', 'CartController@addItem')->name('cart.addItem');
Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){
    Route::post('toggledeliver/{orderId}','OrderController@toggledeliver')->name('toggle.deliver');
    Route::post('toggleaccepted/{industryId}','IndustryController@toggleaccepted')->name('toggle.accepted');
    Route::get('/',function(){
        return view('admin.index');
    })->name('admin.index');

    Route::post('product/image-upload/{productId})','ProductsController@uploadImages');
    Route::resource('product','ProductsController');
    Route::resource('category','CategoriesController');
    Route::resource('users','UsersController');
    Route::get('orders/{type?}', 'OrderController@Orders');
    Route::get('requests/{type?}', 'IndustryController@Industries');


});
Route::resource('request','IndustryController');
Route::resource('address','AddressController');
//Route::get('checkout','CheckoutController@step1');
Route::group(['middleware' => 'auth'], function (){
    Route::get('shipping-info','CheckoutController@shipping')->name('checkout.shipping');
    Route::get('requests','FrontController@request')->name('industry.request');
});

Route::get('payment','CheckoutController@payment')->name('checkout.payment');
Route::post('store-payment','CheckoutController@storePayment')->name('payment.store');

Route::post('/login/custom' ,'LoginController@login')->name('login.custom');

Route::any('/search',function(){
    $q = Input::get ( 'q' );
    $user = \App\Product::where('name','LIKE','%'.$q.'%')->orWhere('description','LIKE','%'.$q.'%')->get();
    if(count($user) > 0)
        return view('front.search')->withDetails($user)->withQuery ( $q );
    else return view ('front.search')->withMessage('No Details found. Try to search again !');
});

