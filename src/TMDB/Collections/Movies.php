<?php

namespace App\TMDB\Collections;

use App\Collections\MoviesInterface;
use App\Models\Movie;
use App\TMDB\TMDB;

class Movies implements MoviesInterface {

	/**
	 * @param array $data
	 * @param int   $limit
	 *
	 * @return Movie[]
	 */
	public function getAll( array $data, $limit = 20 ) {
		$movies  = array();
		$counter = 0;

		foreach ( $data as $movie ) {
			$movies[] = ( new Movie() )
				->setName( $movie['title'] )
				->setBackdropImage( TMDB::IMAGE_BASE_URL . $movie['backdrop_path'] )
				->setGenre( $movie['genre_ids'] )
				->setOverview( $movie['overview'] )
				->setReleaseDate( $movie['release_date'] )
				->setPoster( TMDB::IMAGE_BASE_URL . $movie['poster_path'] )
				->setId( $movie['id'] );

			$counter ++;

			if ( $limit && $counter >= $limit ) {
				break;
			}
		}

		return $movies;
	}
}