<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class Posts extends Controller
{
    public function index(INT $limit = 6) {
      $posts = Post::orderBy('created_at', 'desc')
      -> take($limit)
      -> get();
      return view('posts.index', compact('posts'));
    }
}
