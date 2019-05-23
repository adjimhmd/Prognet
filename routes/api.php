<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['middleware' => ['json.response']], function () {

    // Route::middleware('auth:api')->get('/user', function (Request $request) {
    //     return $request->user();
    // });

    // public routes
    Route::get('/', function() {return "Oke";});
    Route::get('/user', 'Api\AuthController@home')->name('home.api');
    Route::post('/login', 'Api\AuthController@login')->name('login.api');
    Route::post('/register', 'Api\AuthController@register')->name('register.api');
    Route::get('/product', 'Api\ProductController@index')->name('product.api');
    Route::get('/email/verify', 'Auth\VerificationController@show')->name('verification.notice');
    Route::get('/email/verify/{id}', 'Auth\VerificationController@verify')->name('verification.verify');
    Route::get('/email/resend', 'Auth\VerificationController@resend')->name('verification.resend');
    Route::get('/details', 'Api\AuthController@details');

    // private routes
    Route::middleware('auth:api')->group(function () {
        Route::get('/logout', 'Api\AuthController@logout')->name('logout');
    });

});