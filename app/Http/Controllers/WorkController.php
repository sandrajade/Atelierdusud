<?php

namespace App\Http\Controllers;

use App\Models\Work;
use Illuminate\Http\Request;

/**
 * Class WorkController
 * @package App\Http\Controllers
 */
class WorkController extends Controller
{
    /**
     * Display a listing of the work resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // La méthode all récupère toute les données de ma table Work de la base de donnée
        $works = Work::all();

        // Renvoie la vue avec toute les données de ma table Work
        return view('atelierdusud.works.index', compact('works'));
    }


    /**
     * Display the form to create a new work resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        // Retourne une vue nommée works.create, donc un formulaire
        return view('atelierdusud.works.create');
    }

    /**
     * Store a newly created work resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // la méthode validate vérifie les données que l'utilisateur à envoyé à partir d'un formulaire
        // Ma variable validated retourne un tableau
        $validated = $request->validate([
            'url' => 'required',
            'title' => 'required|max:255',
            'description' => 'required',
            'category_id' => 'required',
            'status' => 'required'
        ]);

        // Crée une représentation d'un enregistrement dans une table de donnée, remplissage de champ

        // Je crée un nouvel objet de type work
        $work = new Work;

        // On assigne à chaque colonne de ma table artist les données de mon validate qui est un tableau
        // Attention comme c'est un tableau  que l'on récupère donc on met entre crochet ['name...']
        $work->url = $validated['url'];
        $work->title = $validated['title'];
        $work->description = $validated['description'];
        $work->category_id = $validated['category_id'];
        $work->status = $validated['status'];

        // Sauvegarde dans la base de donnée
        $work->save();

        // Redirige l'utilisateur vers la page d'index des oeuvres
        return redirect('atelierdusud.works.index');
    }

    /**
     * Display the specified work resource.
     *
     * @param  \App\Models\Work  $work
     * @return \Illuminate\View\View
     */
    public function show(Work $work)
    {
        // Renvoie une vue de l'oeuvre demandé
        return view('atelierdusud.works.show', compact('work'));
    }

    /**
     * Display the form to edit a specified work resource.
     *
     * @param  \App\Models\Work  $work
     * @return \Illuminate\View\View
     */
    public function edit(Work $work)
    {
        // Renvoie une vue de l'artiste demandé
        return view('atelierdusud.works.edit', compact('work'));
    }

    /**
     * Update the specified work resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Work  $work
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Work $work)
    {
        // Vérifie les données que l'utilisateur à envoyé à partir d'un formulaire
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

        // Sauvegarde dans la base de donnée
        $work->save();

        // Redirige l'utilisateur vers la page d'index des oeuvres
        return redirect('atelierdusud.works.index');
    }

    /**
     * Remove the specified work resource from storage.
     *
     * @param  \App\Models\Work  $work
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Work $work)
    {
        $work->delete();
        return redirect('atelierdusud.works.index');
    }
}
