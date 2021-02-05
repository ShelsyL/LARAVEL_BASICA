<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content', 'client_id', 'inSlider', 'image'];


    /**
     * GETTER du client à qui appartient ce work.
     * @return [type] [description]
     */
    public function client(){
    return $this->belongsTo('App\Models\Client');
    }



    /**
     * GETTER des tags du work.
     * @return [type] [description]
     */
    public function tags() {
      return $this->belongsToMany('App\Models\Tag', 'works_has_tags');
    }



    /**
     * Ajout d'un enregistrement
     * @param Request $request [description]
     */
      public function add(Request $request) {
          $work = new Work;
          $work->title = $request->title;
          $work->content = $request->content;
          $work->client_id = $request->client_id;
          $work->inSlider = $request->inSlider;

          $work->save();
        }

}
