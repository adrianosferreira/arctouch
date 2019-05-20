<?php

namespace App\Request;

class Handler {

	/**
	 * @param $url
	 *
	 * @return mixed
	 */
	public function get( $url ) {
		$curl = curl_init();

		curl_setopt_array( $curl, [
			CURLOPT_RETURNTRANSFER => 1,
			CURLOPT_URL            => $url,
		] );

		$resp = curl_exec( $curl );
		curl_close( $curl );

		return $resp;
	}
}