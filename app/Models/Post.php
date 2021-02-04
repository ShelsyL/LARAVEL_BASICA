<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content', 'categorie_id'];

    /**
     * GETTER de la categorie à qui appartient ce post.
     */
    public function categorie(){
      return $this->belongsTo('App\Models\Categorie');
}

// Ajout d'un enregistrement
  public function add(Request $request) {
      $post = new Post;
      $post->title = $request->title;
      $post->content = $request->content;
      $post->categorie_id = $request->categorie_id;
      $post->save();
    }

}
