<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class AdminPosts extends Controller
{

  /**
   * [index description]
   * @return [type] [description]
   */
    public function index(int $limit = 15)
    {
        $posts = Post::orderBy('created_at', 'desc')->take($limit)->get();
        return view('admin.posts.index', compact('posts'));
    }



  /**
   * [create description]
   * @return [type] [description]
   */
    public function create()
    {
        return view('admin.posts.create');
    }


  /**
   * [store description]
   * @param  Request $request [description]
   * @return [type]           [description]
   */
    public function store(Request $request)
    {
        Post::create($request->all());
        return redirect()->route('admin.posts.index')
          ->with('status', "Post Créé");
    }



  /**
   * [edit description]
   * @param  Post   $post [description]
   * @return [type]       [description]
   */
    public function edit(Post $post)
    {
        return view('admin.posts.edit', compact('post'));
    }


  /**
   * [update description]
   * @param  Request $request [description]
   * @param  Post    $post    [description]
   * @return [type]           [description]
   */
    public function update(Request $request, Post $post)
    {
        $post->update($request->all());
        return redirect()->route('admin.posts.index')
          ->with('status', "Post Updated");
    }



  /**
   * [destroy description]
   * @param  Post   $post [description]
   * @return [type]       [description]
   */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('admin.posts.index')
           ->with('status', "Post Supprimé");
    }

}
