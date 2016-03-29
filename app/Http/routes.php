<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware' => ['web']], function () {

    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('test', function () {
        return view('test');
    });

    Route::auth();

    Route::get('/home', 'HomeController@index');

    Route::resource('products', 'ProductController');

    Route::resource('categories', 'CategoryController');

    Route::resource('customers', 'CustomerController');

    Route::post('/upload/product-image', 'UploadController@product_image');

    Route::get('/customer-info/create', 'CustomerController@info_create');
    Route::post('/customer-info/create', 'CustomerController@info_store');

});

