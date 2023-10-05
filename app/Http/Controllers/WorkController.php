<?php

namespace App\Http\Controllers;

use App\Models\work;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    //
    public function index()

    {
        //La methode all recupère toute les données de ma table Work de la base de donnée
        $works = Work::all();
        //renvoie la vue avec toute les données de ma table Work
        return view('works.index', 'works');
    }

    public function create()
    {
        return view('works.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'artist-id' => 'required',
            'title' => 'required|max:255',
            'description' => 'required',
            'url' => 'required'
        ]);

        $work->save();

        Work::create($validated);

        return redirect('works')->with('succès', 'oeuvre ajouté avec succès');
    }

    public function show(string $id)
    {
    //
    }

    public function edit(Work $work)
    {
        return view('works.edit', compact('work'));
    }

    public function update(Request $request, Work $work)
    {
        $work->category_id = $request->category_id;
        $work->title = $request->title;
        $work->description = $request->description;
        $work->url = $request->url;
        if ($request->status == 'on') {
            $work->status = 1;
        }else {
            $work->status = 0;
        }

        $work->update();

        return redirect()->route('works.index');

    }

    public function destroy(Work $work)
    {
        $work->delete();

        return redirect()->route('works.index');
    }
}

