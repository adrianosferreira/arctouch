<?php

namespace App\Routes\Main;

use App\Routes\RouteFactoryInterface;
use Slim\App;

class Factory implements RouteFactoryInterface {

	public function create( App $app ) {
		return new Route( $app );
	}
}