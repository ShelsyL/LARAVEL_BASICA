<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Work;

class Works extends Controller {

/**
 * [show description]
 * @param  Work   $work [description]
 * @return [type]       [description]
 */
  public function show (Work $work) {
    return view('works.show', compact('work'));
  }

  /**
   * [more description]
   * @param  Request $request [description]
   * @return [type]           [description]
   */
  public function more(Request $request){

    $limit = (isset($request->limit)) ? $request->limit : 6;

    $works = Work::orderBy('created_at','desc')
                  ->take($limit)
                  ->offset($request->offset)
                  ->get();

      return view('works._list', compact('works'));
      // return "CoucouPhp";
  }
}
