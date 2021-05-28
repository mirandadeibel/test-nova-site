<?php

namespace App\Http\Controllers;

use App\Models\Director;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function getMoviesByDirector($directorId)
    {
        $director = Director::findOrFail($directorId);

        return view('director-movies', [
            'director' => $director
        ]);
    }
}
