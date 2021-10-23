<?php

namespace Rattanak\Posts\Http\Controllers;
use Rattanak\Posts\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('posts::posts.index', compact('posts'));
    }

    public function show()
    {
        //
    }

    public function store()
    {

        // Assume the authenticated user is the post's author

        Post::create([
            'title' => 'package expert',
            'body' => 'learning package',
            'author' => 'Borey'
        ]);

        return 'success';
    }
}
