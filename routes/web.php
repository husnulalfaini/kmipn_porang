<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'MasterController@login');

Route::get('/profile', 'MasterController@profile');
Route::get('/profile', 'MasterController@profile');
Route::get('/riwayat_lahan', 'MasterController@riwayat_lahan');
Route::get('/notifikasi', 'MasterController@notifikasi');
