<?php

namespace App\Routes\Search;

use Slim\App;

class Route implements RouteInterface {

	private $app;
	private $handler;

	public function __construct( App $app ) {
		$this->app = $app;
	}

	public function addRoute() {
		$that = $this;
		$this->app->get( '/search', function ( \Psr\Http\Message\ServerRequestInterface $request, \Psr\Http\Message\ResponseInterface $response ) use ( $that ) {
			return  $response->withJson( $that->getHandler()->get( $request->getParam( 'query' ), $request->getParam( 'limit' ) ) );
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