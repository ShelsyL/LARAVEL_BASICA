<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class AdminPosts extends Controller {

/**
 * [index description]
 * @return [type] [description]
 */
 public function index(int $limit = 15) {
     $posts = Post::orderBy('created_at', 'desc')
                 ->take($limit)
                 ->get();
     return view('admin.posts.index', compact('posts'));
 }

  public function create(){
    return view('admin.posts.create');
  }

  public function store(Request $request){
    Post::create($request->all());
    return redirect()->route('admin.posts.index');
         // ->with('status', "Record added");
  }
}
