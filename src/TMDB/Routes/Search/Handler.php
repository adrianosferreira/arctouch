<?php

namespace App\TMDB\Routes\Search;

use App\Collections\MoviesInterface;
use App\Routes\Search\HandlerInterface;
use App\TMDB\TMDB;
use App\TMDB\Utils\ParseGenres;

class Handler implements HandlerInterface {

	/**
	 * @var MoviesInterface
	 */
	private $movies;

	public function get( $query, $limit = 20 ) {
		$response = ( new \App\Request\Handler() )->get( sprintf( '%ssearch/movie?api_key=%s&language=en-US&query=%s',  TMDB::MAIN_API_URL, TMDB::API_KEY, urlencode( $query ) ) );
		$data     = json_decode( $response, true );

		return $this->movies->getAll( ( new ParseGenres() )->parse( $data['results'] ), $limit );
	}

	public function setMovies( MoviesInterface $movies ) {
		$this->movies = $movies;

		return $this;
	}

	public function getMovies() {
		return $this->movies;
	}
}