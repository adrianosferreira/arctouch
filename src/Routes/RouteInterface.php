<?php

namespace App\Routes;

use Slim\App;

interface RouteInterface {

	public function __construct( App $app );
	public function addRoute();
}