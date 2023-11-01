<?php

namespace App\Http\Controllers;

use App\Models\Artist;

class FrontController extends Controller
{

    function indexArtists()
    {
        $artists = Artist::where('status', true)->get();
        return view('artists', compact('artists'));
    }

    function showArtist(Artist $artist)
    {
        return view('artist', compact('artist'));
    }

}
