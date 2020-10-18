<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view ('post.index')
                ->with(['posts'=> $posts]);
    }
}
