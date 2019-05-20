<?php

namespace App\Routes\Main;

use App\Routes\RouteInterface;
use Slim\App;

class Route implements RouteInterface {

	private $app;

	public function __construct( App $app ) {
		$this->app = $app;
	}

	public function addRoute() {
		$this->app->get( '/app', function ( \Psr\Http\Message\ServerRequestInterface $request, \Psr\Http\Message\ResponseInterface $response ) {
			return $this->renderer->render( $response, 'index.html', [] );
		} );
	}
}