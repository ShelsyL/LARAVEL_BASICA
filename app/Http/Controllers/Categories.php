<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Categories extends Controller
{
    //
}



// /
//    * Affiche le formulaire d'ajout d'une nouvelle catégorie
//    *
//    * @return \Illuminate\Http\Response
//    */
//   public function create()
//   {
//      return view('admin.categories.addForm');
//   }

  // /
  //  * Ajout d'une catégorie dans la db.
  //  *
  //  * @param  \Illuminate\Http\Request  $request
  //  * @return \Illuminate\Http\Response
  //  */
  // public function store(Request $request)
  // {
  //      $request->validate([
  //         'name' => 'required',
  //          ]);
  //
  //     Categorie::create($request->all());
  //
  //     return redirect()->route('categories.index')
  //                      ->with('success','La catégorie a bien été créée.');
  // }
  //
  // /
  //  * Affiche le formulaire d'édition d'une categorie
  //  *
  //  * @param  Categorie  $categorie
  //  * @return \Illuminate\Http\Response
  //  */
  //  public function edit($id)
  //    {
  //        $categorie = Categorie::findOrFail($id);
  //        return view('admin.categories.editForm', compact('categorie'));
  //    }
  //
  // /
  //  * Mise à jour d'une catégorie dans la db
  //  *
  //  * @param  \Illuminate\Http\Request  $request
  //  * @param  Categorie  $categorie
  //  * @return \Illuminate\Http\Response
  //  */
  //
  //  public function update(Request $request, $id)
  //  {
  //      $validatedData = $request->validate([
  //          'name' => 'required',
  //      ]);
  //      Categorie::whereId($id)->update($validatedData);
  //
  //      return redirect()->route('categories.index')
  //                       ->with('success','La catégorie a bien été mise à jour');
  //  }
  //
  // /**
  //  * Suppression d'une catégories de la db
  //  *
  //  * @param  Categorie  $categorie
  //  * @return \Illuminate\Http\Response
  //  */
  // public function destroy($id)
  //   {
  //       $categorie = Categorie::findOrFail($id);
  //       $categorie->delete();
  //
  //       return redirect()->route('categories.index')
  //                      ->with('success','La catégorie a bien été supprimée');
  //   }
