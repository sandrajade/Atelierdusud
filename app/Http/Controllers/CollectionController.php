<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Collection;

class CollectionController extends Controller
{
    public function index()

    {
         // la methode all récupère toute les données de la table collection de la base de données et les stocke dans une variable $collection
        $collections = Collection::all();
        //renvoie une vue avec toute les données de la table collection
        return view('atelierdusud.collections.index', compact('collections'));
    }

    public function create()
    {
           //retourne une vue nommée collections.create, donc un formulaire
        return view('atelierdusud.collections.create');
    }

    public function store(Request $request)

     //la methode validate Verifie les données que l'utilisateur à envoyé à partir d'un formulaire
        //ma variable validated retourne un tableau

    {
        $validated = $request->validate([
            'url ' => 'required',
            'title' => 'required|max:255',
            'description' => 'required',
        ]);
             // crée une représentation d'un enregistrement dans une table de donnée, remplissage de champ
        //je crée un nouvel objet de type collection

        $collection = new collection;
      //on assigne à chaque colonne de ma table artist les données de mon validate qui est un tableau
        // Attention comme c'est un tableau  que l'on récupère donc on met entre crochet ['url..']
        $collection->url = $validated['url'];
        $collection->name = $validated['title'];
        $collection->description = $validated['description'];
    //sauvegarde dans la base de donnée
        $collection->save();
 //redirige l'utilisateur vers la page d'index des collections
        return redirect('collections.index');
    }

    public function show(Collection $collection)
    {
    //renvoie une vue de la'collection demandé
    return view('atelierdusud.collections.show', compact('artist'));
    }
public function edit(Collection $collection)
{
    return view ('atelierdusud.collections.edit', compact('collection'));
}

public function update (Request $request, Collection $collection)
{
        //Verifie les données que l'utilisateur à envoyé à partir d'un formulaire

        $validated = $request->validate([
            'url ' => 'required',
            'title' => 'required|max:255',
            'description' => 'required',
        ]);

         // Mette à jour les propriétés de l'artiste avec les données soumises

        $collection->url = $validated['url'];
        $collection->name = $validated['title'];
        $collection->description = $validated['description'];


     //sauvegarde dans la base de donnée
        $collection->save();
     //redirige l'utilisateur vers la page d'index des collections
         return redirect('collections.index');
}

public function destroy(Collection $collection)
{
    $collection->delete();

    return redirect('collections.index');
}

}
