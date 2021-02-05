<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

class Posts extends Controller
{

/**
 * [index description]
 * @param  integer $limit [description]
 * @return [type]         [description]
 */
  public function index(INT $limit = 4) {
    $posts = Post::orderBy('created_at', 'desc')
                ->paginate($limit);
    return view('posts.index', compact('posts'));
  }



/**
 * [show description]
 * @param  Post   $post [description]
 * @return [type]       [description]
 */
  public function show (Post $post) {
    return view('posts.show', compact('post'));
  }


}
