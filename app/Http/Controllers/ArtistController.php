<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Artist;
use App\Models\Category;

class ArtistController extends Controller
{
    public function index()
    {
        $artists = Artist::all();
        return view('artist.index', compact('artists'));
    }

    public function create()
    {
        $category = Category::all;
        return view('artist.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max255',
            'url' => 'required',
            'description' => 'required',
            'status' => 'required'

        ]);

        $artist = Artist::create($validated);
        $artist->categories()->sync($request->category);

        return redirect('artists')->with('succès, artiste ajouté avec succès');
    }

    public function show(Artist $artist)
    {
        return view('artist.show', compact('artist'));
    }

    public function edit(Artist $artist)
    {
        $categories = Category::all();
        return view('artist.edit', compact('artist', 'categories'));
    }

    public function update(Request $request, Artist $artist)
    {
        $validated = $request->validate([
            'name' => 'required',
            'url' => 'required',
            'description' => 'required'
        ]);

        $artist->update($validated);

        $artist->category()->sync($request->categories);

        return redirect('artists')->with('success', 'artiste modifié avec succès');
    }

    public function destroy(Artist $artist)
    {
        $artist->delete();
        return redirect('artists')->with('success', 'Artiste supprimé avec succès');
    }
}
