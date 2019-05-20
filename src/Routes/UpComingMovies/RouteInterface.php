<?php

namespace App\Routes\UpComingMovies;

interface RouteInterface extends \App\Routes\RouteInterface {

	/**
	 * @param HandlerInterface $handler
	 *
	 * @return Route
	 */
	public function setHandler( HandlerInterface $handler );

	/**
	 * @return HandlerInterface
	 */
	public function getHandler();
}