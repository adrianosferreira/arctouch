<?php

namespace App\TMDB\Routes\UpComingMovies;

use App\Collections\MoviesInterface;
use App\Models\Movie;
use App\Routes\UpComingMovies\HandlerInterface;
use App\TMDB\TMDB;
use App\TMDB\Utils\ParseGenres;

class Handler implements HandlerInterface {

	/**
	 * @var MoviesInterface
	 */
	private $movies;

	/**
	 * @return Movie[]
	 */
	public function get() {
		$response = ( new \App\Request\Handler() )->get( sprintf( '%smovie/upcoming?api_key=%s&language=en-US', TMDB::MAIN_API_URL, TMDB::API_KEY ) );
		$data     = json_decode( $response, true );

		return $this->movies->getAll( ( new ParseGenres() )->parse( $data['results'] ) );
	}

	public function setMovies( MoviesInterface $movies ) {
		$this->movies = $movies;

		return $this;
	}

	public function getMovies() {
		return $this->movies;
	}
}