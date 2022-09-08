<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class TopMoviesController extends Controller
{
    public function maxVotes(){
        $movies = Movie::where('vote','>',9.0)->orderBy('vote','DESC')->get();
        return view('topMovies',compact("movies"));
    }
}
