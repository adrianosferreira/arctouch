<?php

namespace App\Routes\UpComingMovies;

use App\TMDB\Collections\Movies;
use App\TMDB\Routes\UpComingMovies\Handler;

class Factory {

	public function create( \Slim\App $app ) {
		return ( new Route( $app ) )->setHandler( ( new Handler() )->setMovies( new Movies() ) );
	}
}