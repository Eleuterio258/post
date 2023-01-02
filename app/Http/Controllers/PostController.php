<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //create a new post
    public function store(Request $request)
    {
        $post = new Post;

        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();

         return response()->json($post, 201);

    }
    //list all posts

    public function index()
    {
        $posts = Post::all();
        return response()->json($posts);
    }
    //show a single post
    public function show($id)
    {
        $post = Post::find($id);
        return response()->json($post);
    }
    //update a post
    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $post->userId = $request->userId;
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();
        return response()->json($post);
    }
    //delete a post

    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();

                return response()->json('deleted', 200);

    }
}
