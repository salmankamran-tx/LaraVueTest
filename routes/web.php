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

Route::get('/',  function() {
    return view('welcome');
});

 // Vue Components Routes
    Route::get('/create', function(){
          $user_id = Auth::id();
          $username = App\User::find($user_id)->name;
          $user_role = App\User::find($user_id)->role;
           return view('vueapp')
           ->with('username' , $username)
           ->with('user_role' , $user_role);
   });
   Route::get('/allposts', function(){
          return view('vueapp');
  });

  Route::get('/laravueposts', function(){
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

// for showing all laraVueposts
Route::get('/laravueposts' , 'PostController@lara_vue_posts');

// route get method for logout
Route::get('/logout', 'Auth\LoginController@logout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
