<?php

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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});


Route::group([], function() {
   Route::get('/posts', 'API\PostsController@index')->name('posts.index');
   Route::get('/posts/{post}', 'API\PostsController@show')->name('posts.show');

   Route::get('/users', 'API\UsersController@index')->name('users.index');
   Route::get('/users/{user}', 'API\UsersController@show')->name('users.show');

   Route::get('/channels', 'API\ChannelsController@index')->name('channels.index');
   Route::get('/channels/{channel}', 'API\ChannelsController@show')->name('channels.show');
});