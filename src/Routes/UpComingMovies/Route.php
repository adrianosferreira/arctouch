<?php

namespace App\Routes\UpComingMovies;

class Route implements RouteInterface {

	private $app;
	private $handler;

	public function __construct( \Slim\App $app ) {
		$this->app = $app;
	}

	public function addRoute() {
		$that = $this;
		$this->app->get( '/movies', function ( \Psr\Http\Message\ServerRequestInterface $request, \Psr\Http\Message\ResponseInterface $response ) use ( $that ) {
			return  $response->withJson( $that->getHandler()->get() );
		} );
	}

	public function setHandler( HandlerInterface $handler ) {
		$this->handler = $handler;

		return $this;
	}

	/**
	 * @return HandlerInterface
	 */
	public function getHandler() {
		return $this->handler;
	}
}