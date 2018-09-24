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

// Route::get('/home', function () {
//     return view('frontend.home');
// });
Route::get('/home', 'FrontendController@getHome');

Route::group(['prefix' => 'product'], function(){

	Route::get('/','ProductController@getProduct');

	Route::get('add','ProductController@getAddProduct');
	Route::post('add','ProductController@postAddProduct');

	Route::get('edit/{id}','ProductController@getEditProduct');
	Route::post('edit/{id}','ProductController@postEditProduct');

	Route::get('delete/{id}','ProductController@getDeleteProduct');


});

	// Route::get('/abc', 'abc@getIndex');
Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
