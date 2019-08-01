<?php

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

 // Vue Components Routes
    Route::get('/create', function(){
           return view('vueapp');
   });
   Route::get('/allposts', function(){
          return view('vueapp');
  });


// Laravel Controller Routes

// For Creating Posts
Route::post('/createPost' , 'PostController@store');
// For Listing All Posts
Route::get('/posts' , 'PostController@index');
// For Editing
Route::post('/editPost/{id}', 'PostController@update');
// For Deleting Post
Route::post('/deletePost/{id}' , 'PostController@destroy');
