<?php

namespace App\Models;

class Movie {

	public $name;
	public $poster;
	public $backdropImage;
	public $releaseDate;
	public $overview;
	public $genre;
	public $id;

	/**
	 * @return int
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * @param int $id
	 *
	 * @return $this
	 */
	public function setId( $id ) {
		$this->id = $id;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * @param string $name
	 *
	 * @return Movie
	 */
	public function setName( $name ) {
		$this->name = $name;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getPoster() {
		return $this->poster;
	}

	/**
	 * @param string $poster
	 *
	 * @return Movie
	 */
	public function setPoster( $poster ) {
		$this->poster = $poster;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getBackdropImage() {
		return $this->backdropImage;
	}

	/**
	 * @param string $backdropImage
	 *
	 * @return Movie
	 */
	public function setBackdropImage( $backdropImage ) {
		$this->backdropImage = $backdropImage;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getReleaseDate() {
		return $this->releaseDate;
	}

	/**
	 * @param string $releaseDate
	 *
	 * @return Movie
	 */
	public function setReleaseDate( $releaseDate ) {
		$this->releaseDate = $releaseDate;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getOverview() {
		return $this->overview;
	}

	/**
	 * @param string $overview
	 *
	 * @return Movie
	 */
	public function setOverview( $overview ) {
		$this->overview = $overview;

		return $this;
	}

	/**
	 * @return array
	 */
	public function getGenre() {
		return $this->genre;
	}

	/**
	 * @param array $genre
	 *
	 * @return Movie
	 */
	public function setGenre( $genre ) {
		$this->genre = $genre;

		return $this;
	}
}