<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Auth;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth::id();
        $user_role = User::find($user_id)->role;

        if($user_role == 'admin'){
          $posts = Post::all();
        }

        else{
        $posts = User::find($user_id)->posts;             // getting the posts of user who is currently logged in.
        //$posts = $posts->orderByDesc('id');
      }
        return $posts;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //getting the user_id who is currently logged in
        $user_id = Auth::id();

        $posts = new Post();
        $posts->user_id = $user_id;
        $posts->title = $request->title;
        $posts->body = $request->body;

        $posts->save();
        return $posts;

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $post->title = $request->e_title;
        $post->body = $request->e_body;

        $post->save();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
      $post = Post::find($id)->delete();

    }

    public function lara_vue_posts(){
      $posts = Post::all();
      // $users_id = Post::select('user_id')->where('id' ,'>' ,0)->get();
      // $usernames = User::find($users_id)->map->only(['name']);
      //  dd($usernames);
      return $posts;
    }
}
