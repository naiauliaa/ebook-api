<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController; 

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
Route::get('/me','App\Http\Controllers\AuthController@me');

Route::get('/ebook','App\Http\Controllers\BookController@index');
Route::post('/ebook', 'App\Http\Controllers\BookController@create');
Route::put('/ebook/{id}', 'App\Http\Controllers\BookController@update');
Route::delete('/ebook/{id}', 'App\Http\Controllers\BookController@delete');

 