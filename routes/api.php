<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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





Route::prefix('cart')->group(function(){
    Route::post('add','Frontend\CartController@store' );
    Route::post('delete','Frontend\CartController@destroy');
    Route::post('update','Frontend\CartController@update');

    Route::get('show','Frontend\CartController@show' );
});

