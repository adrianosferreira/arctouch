<?php

namespace App\TMDB\Utils;

use App\Request\Handler;
use App\TMDB\TMDB;

class ParseGenres {

	/**
	 * @param array $data
	 *
	 * @return array
	 */
	public function parse( $data ) {
		$genres = ( new Handler() )->get( sprintf( '%sgenre/movie/list?api_key=%s&language=en-US', TMDB::MAIN_API_URL, TMDB::API_KEY ) );
		$genres = json_decode( $genres );
		$genres = $genres->genres;

		foreach( $data as $key => $item ) {
			 $data[ $key ]['genre_ids'] = $this->getGenreNames( $data[ $key ]['genre_ids'], $genres );
		}

		return $data;
	}

	/**
	 * @param array $ids
	 * @param array $genres
	 *
	 * @return string
	 */
	private function getGenreNames( $ids, $genres ) {
		$genreNames = [];
		foreach ( $genres as $genre ) {
			if ( in_array( $genre->id, $ids, true ) ) {
				return $genreNames[] = $genre->name;
			}
		}

		return implode(', ', $genreNames );
	}
}