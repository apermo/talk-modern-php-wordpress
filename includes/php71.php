<?php

namespace WCVienna\example;

/**
 * Demo of selected features added in PHP 7.1
 */
class php71 {

	/**
	 * Returns the given string.
	 *
	 * @param string|null $some_string Some string.
	 * @return string|null
	 */
	public static function type_hints_nullable( ?string $some_string ): ?string {
		return $some_string;
	}

	/**
	 * Echos the given string.
	 *
	 * @param string $echo_me String to echo.
	 * @return void
	 */
	public static function return_type_void( string $echo_me ): void {
		echo $echo_me;
	}
}