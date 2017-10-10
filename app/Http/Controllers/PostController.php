<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }


    public function create(Post $post)
    {
        return view('posts.create');
    }


    public function store()
    {
        $this->validate(
            request(),
            [
                'title' => 'required|min:3',
                'body' => 'required'
            ]);

        Post::create(request(['title', 'body']));

        return redirect('/');
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }

}
