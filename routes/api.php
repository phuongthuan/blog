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
   Route::get('/posts', 'API\PostsController@index')->name('api.posts.index');
   Route::get('/posts/{post}', 'API\PostsController@show')->name('api.posts.show');
   Route::post('/posts', 'API\PostsController@store')->name('api.posts.store');
   Route::put('/posts/{post}', 'API\PostsController@update')->name('api.posts.update');
   Route::delete('/posts/{post}', 'API\PostsController@destroy')->name('api.posts.destroy');

   Route::get('/users', 'API\UsersController@index')->name('api.users.index');
   Route::get('/users/{user}', 'API\UsersController@show')->name('api.users.show');

   Route::get('/channels', 'API\ChannelsController@index')->name('api.channels.index');
   Route::get('/channels/{channel}', 'API\ChannelsController@show')->name('api.channels.show');
});