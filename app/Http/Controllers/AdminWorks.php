<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Work;


class AdminWorks extends Controller {

/**
 * [index description]
 * @return [type] [description]
 */
  public function index() {
    return view('admin.works.index');
  }
}
