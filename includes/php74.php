<?php

namespace WCVienna\example;

/**
 * Demo of selected features added in PHP 7.4
 */
class php74 {
	/**
	 * @var string
	 */
	private static string $somestring = 'some string';

	/**
	 * Returns the given string.
	 *
	 * @param string|null $some_string Some string.
	 * @return string|null
	 */
	public static function null_coalescing_assign( string $some_string ): void {
		/*
		if ( ! isset( self::$somestring ) ) {
			self::$somestring = $some_string();
		}
		 */

		self::$somestring ??= $some_string;
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