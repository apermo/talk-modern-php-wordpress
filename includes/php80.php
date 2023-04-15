<?php

namespace WCVienna\example;


/**
 * Demo of selected features added in PHP 8.0
 */
class php80 {

	/**
	 * @var int|float
	 */
	private static int|float $somenumber = 8.0;

	/**
	 *
	 * @param int|float $somenumber
	 * @return void
	 */
	public static function set_somenumber( int|float $somenumber ): void {
		self::$somenumber = $somenumber;
	}

	public static function match( string|float|int $some_value): string {
		return match ( $some_value ) {
			'Yes' => "This is the way",
			'8.0', 8.0, 8 => "Eight",
			default => 'ok, no clue',
		};
	}

	public static function nullsafe( Object $some_obj ): void {
		echo $some_obj?->post_title;
	}

	public static function string_contains( string $haystack, string $needle ): bool {
		// No more strpos( $haystack, $needle !== false
		return str_contains( $haystack, $needle );
	}
}