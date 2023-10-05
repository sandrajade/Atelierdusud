<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
          // la methode all récupère tous les données de la table Category de la base de données et les stocke dans une variable $category
        $categories = Category::all();
        //retourne la vue de l'ensemble de de la table category
        return view('category.index', compact('categories'));
    }

    public function create(Request $request)
    {
       $validated = $request->validate([
        'name' =>'required',
        'status'=> 'required'
       ]);

        $category = new Category;
        $category -> name = $request->name;
        $category -> statut = $request->name;

        $category->save();

         //redirige l'utilisateur vers la page d'index des categories
         return redirect('categories')->with('succes', 'categorie crée avec succès');
    }


    public function store(Request $request)

    {
    
        $category->name = $request->name;


        $category->save();

        return redirect()->route('categories.index');
    }

    public function show(string $id)
    {

    }
public function edit(Category $category)
{
    return view ('category.edit', compact('category'));
}

public function update (Request $request, Category $category)
{
    $category->name = $request->name;

    $category->update();

    return redirect()->route('category.index');

}

public function destroy(Category $category)
{
    $category->delete();
    return redirect('artists')->with('success', 'Artiste supprimé avec succès');
}

}
