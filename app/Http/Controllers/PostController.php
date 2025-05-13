<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Dsipaly a listing of resorce
        //fetch all post from teh database
        $posts = Post::all();

        //return the posts to the view 
        return view('posts.index', [
            'posts'=>$posts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $posts =new Post;
        $posts->title = $request->input('title');
        $posts->slug = $request->input('slug');
        $posts->content = $request->input('content');

        $posts->save();
        return redirect()->route('posts.index')->with('succe');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
