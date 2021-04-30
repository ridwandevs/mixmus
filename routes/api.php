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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'auth', 'as' => 'auth'], function (){

    Route::post('/signin', ['App\Http\Controllers\Api\Auth\AuthController', 'signInWithEmail'])->name('.signin');

    Route::group(['prefix' => 'register', 'as' => '.register'], function () {

        Route::post('/email', ['App\Http\Controllers\Api\Auth\AuthController', 'registerWithEmail'])->name('.email');

    });



});


Route::post('/test', ['App\Http\Controllers\Api\Test\UploadController', 'upload']);
