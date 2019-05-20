<?php

namespace App\Routes\Search;

use App\TMDB\Collections\Movies;
use App\TMDB\Routes\Search\Handler;
use Slim\App;

class Factory {

	public function create( App $app ) {
		return ( new Route( $app ) )->setHandler( ( new Handler() )->setMovies( new Movies() ) );
	}
}