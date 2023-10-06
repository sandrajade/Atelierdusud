<?php

namespace App\Http\Controllers;

use App\Models\Work;
use App\Models\Category;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    //
    public function index()

    {
        //La methode all recupère toute les données de ma table Work de la base de donnée
        $works = Work::all();
        //renvoie la vue avec toute les données de ma table Work
        return view('atelierdusud.works.index', compact('works'));
    }

    public function create()
    {
            //retourne une vue nommée works.create, donc un formulaire
        return view('atelierdusud.works.create');
    }

    public function store(Request $request)
    {

        //la methode validate Verifie les données que l'utilisateur à envoyé à partir d'un formulaire
        //ma variable validated retourne un tableau

        $validated = $request->validate([
            'url' => 'required',
            'title' => 'required|max:255',
            'description' => 'required',
            'category_id' => 'required',
            'status' => 'required'

        ]);
        // crée une représentation d'un enregistrement dans une table de donnée, remplissage de champ
        //je crée un nouvel objet de type work

        $work = new Work;

           //on assigne à chaque colonne de ma table artist les données de mon validate qui est un tableau
        //Attention comme c'est un tableau  que l'on récupère donc on met entre crochet ['name...']

        $work->url = $validated['url'];
        $work->title = $validated['title'];
        $work->description = $validated['description'];
        $work->category_id = $validated['category_id'];
        $work->status = $validated['status'];

        //sauvegarde dans la base de donnée

        $work->save();

          //redirige l'utilisateur vers la page d'index des oeuvres

        return redirect('atelierdusud.works.index');
    }

    public function show(Work $work)
    {
    //renvoie une vue de l'oeuvre demandé
    return view('atelierdusud.works.show', compact('work'));
    }

    public function edit(Work $work)
    {
          //renvoie une vue de l'artiste demandé
        return view('atelierdusud.works.edit', compact('work'));
    }

    public function update(Request $request, Work $work)
    {

          //Verifie les données que l'utilisateur à envoyé à partir d'un formulaire
          $validated = $request->validate([
            'url' => 'required',
            'title' => 'required|max:255',
            'description' => 'required',
            'category_id' => 'required',
            'status' => 'required'
        ]);

    // Mette à jour les propriétés de l'artiste avec les données soumises


        $work->url = $validated['url'];
        $work->title = $validated['title'];
        $work->description = $validated['description'];
        $work->category_id = $validated['category_id'];
        $work->status = $validated['status'];

       //sauvegarde dans la base de donnée

       $work->save();

       //redirige l'utilisateur vers la page d'index des oeuvres

     return redirect('atelierdusud.works.index');
    }

    public function destroy(Work $work)
    {
        $work->delete();

        return redirect('atelierdusud.works.index');
    }
}

