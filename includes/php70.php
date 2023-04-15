<?php


namespace WCVienna\example;

define( 'SOME_ARRAY', [ 'This', 'is', 'possible', 'from', 'php7.0' ] );

/**
 * Demo of selected features added in PHP 7.0
 */
class php70 {

	/**
	 * Returns the given string.
	 *
	 * Demo for Type Hints.
	 *
	 * Type hints for custom classes exist since
	 *
	 * @param string $some_string Some string.
	 * @return string
	 */
	public static function type_hints( string $some_string ): string {
		return $some_string;
	}

	public static function null_coalescing( $some_var ) {
		/*
		if ( isset( $some_var ) ) {
			return $some_var;
		} else {
			return 'Some var is null';
		}
		*/

		// return isset( $some_var ) ? $some_var : 'Some var is null';

		return $some_var ?? 'Some var is null';
	}
}