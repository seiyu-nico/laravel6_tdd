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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('customers', 'Api\CustomerController@index');
Route::post('customers', 'Api\CustomerController@store');
Route::get('customers/{customer_id}', 'Api\CustomerController@show');
Route::put('customers/{customer_id}', 'Api\CustomerController@update');
Route::delete('customers/{customer_id}', 'Api\CustomerController@destroy');

Route::get('reports', function () {});
Route::post('reports', function () {});
Route::get('reports/{report_id}', function () {});
Route::put('reports/{report_id}', function () {});
Route::delete('reports/{report_id}', function () {});
