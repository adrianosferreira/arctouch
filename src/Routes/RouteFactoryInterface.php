<?php

namespace App\Routes;

use Slim\App;

interface RouteFactoryInterface {

	/**
	 * @param \Slim\App $app
	 *
	 * @return RouteInterface
	 */
	public function create( App $app );
}