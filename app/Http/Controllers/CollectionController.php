<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Collection;

class CategoryController extends Controller
{
    public function index()

    {
         // la methode all récupère toute les données de la table collection de la base de données et les stocke dans une variable $collection
        $collections = Category::all();
        //renvoie une vue avec toute les données de la table collection
        return view('collection.index', compact('collections'));
    }

    public function create()
    {
        return view('collection.create');
    }

    public function store(Request $request)

    {
        $collection = new collection;
        $collection->name = $request->name;
        $collection->description = $request->description;

       
        $category->save();

        return redirect()->route('collections.index');
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

    return redirect()->route('category.index');
}

}
