<?php

namespace App\Http\Controllers;

use App\Post;
use App\Http\Requests\PostRequest;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class PostController extends Controller
{
    public function index(Post $post)
    {
        $posts = $post->getPaginateByLimit();
        return view('posts/index',compact("posts"));
    }
    
    public function show(Post $post)
    {
        return view('posts/show')->with(["post"=>$post]);
    }
    
    public function create()
    {
        return view('posts/create');
    }
    
    public function store(PostRequest $request, Post $post)
    {
        $input = $request['post'];
        $post->fill($input)->save();
        return redirect('/posts/' . $post->id);
    }
    
    public function edit(Post $post)
    {
        //dd($post);
        return view('posts/edit')->with(["post"=>$post]);
    }
    
    public function update(PostRequest $request, Post $post)
    {
        $input = $request['post'];
        //dd($input);
        $post->fill($input)->save();
        return redirect('/posts/' . $post->id);
    }
}
?>