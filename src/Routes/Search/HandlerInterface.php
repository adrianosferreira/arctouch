<?php

namespace App\Routes\Search;

use App\Collections\MoviesInterface;
use App\Models\Movie;

interface HandlerInterface extends \App\Routes\HandlerInterface {

	/**
	 * @param string $query
	 *
	 * @return Movie[]
	 */
	public function get( $query );
	public function setMovies( MoviesInterface $movies );

	/**
	 * @return MoviesInterface
	 */
	public function getMovies();
}