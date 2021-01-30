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
}
