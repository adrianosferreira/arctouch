<?php

namespace App\Routes\UpComingMovies;

use App\Collections\MoviesInterface;
use App\Models\Movie;

interface HandlerInterface extends \App\Routes\HandlerInterface {

	/**
	 * @return Movie[]
	 */
	public function get();
	public function setMovies( MoviesInterface $movies );

	/**
	 * @return MoviesInterface
	 */
	public function getMovies();
}