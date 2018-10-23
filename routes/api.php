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

// List Posts
Route::get('posts', 'PostsController@index');

// List singlePost
Route::get('post/{id}', 'PostsController@show');

// Create newPost
Route::post('post', 'PostsController@store');

// UpdatePost
Route::put('post/{id}', 'PostsController@gates');

// DeletePost
Route::delete('post/{id}', 'PostsController@destroy');


