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
Route::get('categories', 'CategoriesController@index');
Route::get('categories/{id}', 'CategoriesController@show');
Route::post('categories', 'CategoriesController@store');
Route::put('categories/{id}', 'CategoriesController@update');
Route::delete('categories/{id}', 'CategoriesController@destroy');

Route::get('products', 'ProductsController@index');
Route::get('products/{id}', 'ProductsController@show');
Route::post('products', 'ProductsController@store');
Route::put('products/{id}', 'ProductsController@update');
Route::delete('products/{id}', 'ProductsController@destroy');
