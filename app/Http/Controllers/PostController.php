<?php

namespace App\Http\Controllers;

use App\Services\Contracts\PostServiceInterface;
use Illuminate\Http\Request;
use App\models\Post;
use Illuminate\Cache\RateLimiting\Limit;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view ('post.index')
                ->with(['posts'=> $posts]);
    }
}
