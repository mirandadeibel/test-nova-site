<?php

namespace App\View\Components;

use App\Models\Movie;
use Illuminate\View\Component;

class MovieList extends Component
{
    const MOVIE_LIMIT = 8;

    public $movies;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->movies = Movie::orderBy('released_at')->limit(self::MOVIE_LIMIT)->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.movie-list');
    }
}
