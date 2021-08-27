<?php

namespace App\View\Components;

use App\Models\Movie;
use Illuminate\View\Component;

class MovieCard extends Component
{
    public $movie;

    /**
     * Create a new component instance.
     *
     * @param Movie $movie
     */
    public function __construct(Movie $movie)
    {
        $this->movie = $movie;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.movie-card');
    }
}
