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
    View::composer('*', function($view)
    {
        $main_categories = \App\Category::where('parent_id','=',0)->orderBy('name')->get();
        $sub_categories = \App\Category::where('parent_id','!=',0)->orderBy('name')->get();
        $view->with('main_categories', $main_categories);
        $view->with('sub_categories',$sub_categories);
    });

    Route::get('test', function () {
        return view('test');
    });

    Route::auth();

    Route::get('/', 'PagesController@index');

    Route::resource('products', 'ProductController');

    Route::resource('categories', 'CategoryController');

    Route::resource('customers', 'CustomerController');

    Route::post('/upload/product-image', 'UploadController@product_image');

    Route::get('/customer-info/create', 'CustomerController@info_create');
    Route::post('/customer-info/create', 'CustomerController@info_store');

});

