<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Work;


class AdminWorks extends Controller
{
  /**
   * [index description]
   * @param  integer $limit [description]
   * @return [type]         [description]
   */
    public function index(int $limit = 40)
    {
        $works = Work::orderBy('created_at', 'desc')->take($limit)->get();
        return view('admin.works.index', compact('works'));
    }



  /**
   * [create description]
   * @return [type] [description]
   */
    public function create()
    {
        return view('admin.works.create');
    }



  /**
   * [store description]
   * @param  Request $request [description]
   * @return [type]           [description]
   */
    public function store(Request $request)
    {
    //  dd($request);
        Work::create($request->all())->tags()->sync($request->tags_id);
        // Tag::create($request->all());
        return redirect()->route('admin.works.index')
          ->with('status', "Work créé");
    }



  /**
   * [edit description]
   * @param  Work   $work [description]
   * @return [type]       [description]
   */
    public function edit(Work $work)
    {
        return view('admin.works.edit', compact('work'));
    }

  /**
   * [update description]
   * @param  Request $request [description]
   * @param  Work    $work    [description]
   * @return [type]           [description]
   */
    public function update(Request $request, Work $work)
    {
        $work->update($request->all());
        $work->tags()->sync($request->tags_id);
        return redirect()->route('admin.works.index')
          ->with('status', "Work Updated");
    }



  /**
   * [destroy description]
   * @param  Work   $work [description]
   * @return [type]       [description]
   */
    public function destroy(Work $work)
    {
        $work->tags()->detach();
        $work->delete();
        return redirect()->route('admin.works.index')
         ->with('status', "Work Supprimé");
    }
}
