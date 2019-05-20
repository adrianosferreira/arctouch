<?php

namespace App\Collections;

use App\Models\Movie;

interface MoviesInterface {

	/**
	 * @param array $data
	 * @param int   $limit
	 *
	 * @return Movie[]
	 */
	public function getAll( array $data, $limit = 20 );
}