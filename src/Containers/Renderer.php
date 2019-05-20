<?php

namespace App\Containers;

use Slim\App;

class Renderer {

	private $app;

	public function __construct( App $app ) {
		$this->app = $app;
	}

	public function set() {
		$container = $this->app->getContainer();

		$container['renderer'] = function ( $c ) {
			$settings = $c->get( 'settings' )['renderer'];

			return new \Slim\Views\PhpRenderer( $settings['template_path'] );
		};
	}
}