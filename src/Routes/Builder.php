<?php

namespace App\Routes;

use Slim\App;

class Builder {

	private $app;

	public function __construct( App $app ) {
		$this->app = $app;
	}

	public function registerRoutes() {
		$routes_factory = array(
			\App\Routes\Main\Factory::class,
			\App\Routes\UpComingMovies\Factory::class,
			\App\Routes\Search\Factory::class
		);

		foreach( $routes_factory as $factory ) {
			$route_obj = ( new $factory() )->create( $this->app );

			if ( ! $route_obj instanceof RouteInterface ) {
				continue;
			}

			$route_obj->addRoute();
		}
	}
}