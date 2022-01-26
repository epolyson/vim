<?php

namespace App\Http\Controllers;

use App\Post;
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
    
    public function create(Post $post)
    {
        return view('posts/create')->with(["post"=>$post]);
    }
}
?>