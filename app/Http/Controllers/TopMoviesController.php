<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class TopMoviesController extends Controller
{
    public function maxVotes(){
        $movies = Movie::where('vote', > , 2);
        return view('topFilms',compact("movies"));
    }
}
