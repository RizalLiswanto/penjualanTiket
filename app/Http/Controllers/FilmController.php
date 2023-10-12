<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function index()
    {
        
        $film = Film::all();
        
        $data = [
            'film'=> $film
        ];
        return view('film/film-index',$data);
        
    }
}
