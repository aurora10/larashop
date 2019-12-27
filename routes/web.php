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

//Route::get('/', function () {
//    return view('shop.index');
//});

//Route::get('add-to-cart/{id}', 'ProductController@getAddToCart')->name('product.addToCart');

Route::get('add-to-cart/{id}', [
    'uses' => 'ProductController@getAddToCart',
    'as' => 'product.addToCart'
]);

Route::get('shopping-cart', [
    'uses' => 'ProductController@getCart',
    'as' => 'product.cart'
]);

Route::resource('/', 'ProductController');

Route::group(['prefix' => 'user'], function() {

    Route::group(['middleware' => 'guest'],function() {

        Route::get('signin','UsersController@getSignin');
        Route::post('signin','UsersController@postSignin')->name('user.signin');


        Route::resource('/signup', 'UsersController');
    });

    Route::group(['middleware' => 'auth'],function() {
        Route::get('logout', 'UsersController@getLogout')->name('user.logout');
        Route::get('profile' ,'UsersController@getProfile')->name('user.profile');
    });


});




