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

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function() {
	Route::get('/', 'AuthAdmin\HomeController@index')->name('admin');
	Route::get('/login', 'AuthAdmin\LoginController@showLoginForm')->name('admin.login');
	Route::post('/login', 'AuthAdmin\LoginController@login')->name('admin.login.submit');
	Route::post('/logout', 'AuthAdmin\LoginController@logout')->name('admin.logout');
	Route::get('/register', 'AuthAdmin\RegisterController@showRegistrationForm')->name('admin.register');
	Route::post('/register', 'AuthAdmin\RegisterController@register')->name('admin.register.submit');
	Route::resource('/product_categories', 'Admin\ProductCategoriesController');
	Route::resource('/product', 'Admin\ProductController');
	Route::resource('/courier', 'Admin\CourierController');
	Route::resource('/transaction', 'Admin\TransactionController@index');
	Route::get('/gambar', 'Admin\ProductController@gambar');
	Route::post('/gambar', 'Admin\ProductController@gambarUpload');
});
