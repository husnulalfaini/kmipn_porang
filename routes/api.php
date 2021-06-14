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

//route yang mengarah ke AuthController untuk register dan login user
Route::post('register', 'Api\AuthController@register');
Route::post('login', 'Api\AuthController@login');

//route yang mengarah ke SensorController untuk menerima data hardware dan mengirim data ke android
Route::get('kirimdata', 'Api\SensorController@kirimdata');
Route::post('terimadata', 'Api\SensorController@terimadata');
