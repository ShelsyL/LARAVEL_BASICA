<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
// use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class Posts extends Controller {

  /**
   * [index description]
   * @param  integer $limit [description]
   * @return [type]         [description]
   */
  public function index(INT $limit = 4) {
    $posts = Post::orderBy('created_at', 'desc')
                // ->latest()
                // ->take($limit)
                ->paginate($limit);
                // ->get();
    // $posts = DB::table('posts')->paginate(4);
    return view('posts.index', compact('posts'));

      // 'posts' => DB:table('posts')->paginate(4)
      //

  }

  // public function pagination(){
  //   $pages =  DB::table('posts')->paginate(4);
  // }


  /**
   * [show description]
   * @param  Post   $post [description]
   * @return [type]       [description]
   */
  public function show (Post $post) {
    return view('posts.show', compact('post'));
  }
}
