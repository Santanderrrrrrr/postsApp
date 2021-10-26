<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PosterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('posts');
    }
    
    public function get(Request $request)
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        return response()->json($posts);
    }
    
    public function store(Request $request)
    {
        $post = Post::create($request->all());
    
        return response()->json($post);
    }
    
    public function delete($id)
    {
        Post::destroy($id);
    
        return response()->json("ok");
    }
}
