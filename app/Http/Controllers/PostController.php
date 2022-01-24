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
}
?>