<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artist;


class ArtistController extends Controller
{
    public function index()
    {
        // la methode all récupère toute les données de la table Artist de la base de données et les stocke dans une variable $artists
        $artists = Artist::all();
        // SELECT * FROM artists;
        return view('atelierdusud.artists.index', compact('artists'));
        // renvoie une vue avec toute les données de la table Artist
    }

    public function create()
    {
        //CREATE TABLE Artists (ArtistId int, Name varchar(255), Description varchar(255), Url)

        //retourne une vue nommée artist.create, donc un formulaire
        return view('atelierdusud.artists.create');


    }

    public function store(Request $request)
    {

        //la methode validate Verifie les données que l'utilisateur à envoyé à partir d'un formulaire
        //ma variable validated retourne un tableau
        $validated = $request->validate([
            'name' => 'required|max:255',
            'url ' => 'required',
            'description' => 'required',
            'status' => 'required'
        ]);
        // crée une représentation d'un enregistrement dans une table de donnée, remplissage de champ
        //je crée un nouvel objet de type artist
        $artist = new Artist;
        //on assigne à chaque colonne de ma table artist les données de mon validate qui est un tableau
        //Attention comme c'est un tableau  que l'on récupère donc on met entre crochet ['name...']
        $artist->name = $validated['name'];
        $artist->url = $validated['url'];
        $artist->description = $validated['description'];
        $artist->status = $validated['status'];
        //sauvegarde dans la base de donnée
        $artist->save();


        //redirige l'utilisateur vers la page d'index des artistes
        return redirect('atelierdusud.artists.index');
    }

    public function show(Artist $artist)
    {
        //renvoie une vue de l'artiste demandé
        return view('atelierdusud.artists.show', compact('artist'));
    }

    public function edit(Artist $artist)
    {
        //renvoie une vue de l'artiste demandé
        return view('atelierdusud.artists.edit', compact('artist'));
    }

    public function update(Request $request, Artist $artist)
    {
        //Verifie les données que l'utilisateur à envoyé à partir d'un formulaire
        $validated = $request->validate([
            'nom' => 'required|max(255)',
            'url' => 'required',
            'description' => 'required',
            'status' => 'required'

        ]);


        // Mette à jour les propriétés de l'artiste avec les données soumises
        $artist->name = $validated['name'];
        $artist->url = $validated['url'];
        $artist->description = $validated['description'];
        $artist->status = $validated['status'];

        //sauvegarde l'artiste dans la base de données
        $artist->save();

        // Redirige l'utilisateur vers la page d'index des artistes avec un message de succès

        return redirect('atelierdusud.artists.index');

    }


    public function destroy(Artist $artist)
    {
        $artist->delete();
        return redirect('atelierdusud.artists.index');
    }
}
