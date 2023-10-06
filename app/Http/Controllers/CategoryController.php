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
        return view('atelierdusud.categories.index', compact('categories'));
    }

    public function create()
    {
        //retourne une vue nommée category.create, donc un formulaire

        return view('atelierdusud.categories.index');
    }


    public function store(Request $request)
    {
        //la methode validate Verifie les données que l'utilisateur à envoyé à partir d'un formulaire
        //ma variable validated retourne un tableau

        $validated = $request->validate([
            'name' => 'required|max255',
            'status' => 'required'
        ]);

        // crée une représentation d'un enregistrement dans une table de donnée, remplissage de champ
        //je crée un nouvel objet de type category

        $category = new Category;

        //on assigne à chaque colonne de ma table category les données de mon validate qui est un tableau
        //Attention comme c'est un tableau  que l'on récupère donc on met entre crochet ['name...']

        $category->nom = $validated['name'];
        $category->statut = $validated['status'];

        //sauvegarde dans la base de donnée

        $category->save();

        //redirige l'utilisateur vers la page d'index des categories
        return redirect('categories.index');

    }

    public function show(Category $category)
    {
        //  renvoie une vue de la catégories demandé
        return view('atelierdusud.categories.show');
    }
    public function edit(Category $category)
    {
        //renvoie une vue de la catégorie demandé
        return view('atelierdusud.categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        //Verifie les données que l'utilisateur à envoyé à partir d'un formulaire
        $validated = $request->validate([
            'name' => 'required|max255',
            'status' => 'required'
        ]);

        $category->nom = $validated['name'];
        $category->statut = $validated['status'];

        //sauvegarde dans la base de donnée

        $category->save();

        //redirige l'utilisateur vers la page d'index des categories
        return redirect('categories.index');

    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect('categories.index');
    }

}
