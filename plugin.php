<?php
/**
 * WCVIE Modern PHP Example plugin
 *
 * Plugin Name: WCVIE Modern PHP Example plugin
 * Version:     0.1.0
 */

namespace WCVienna\example;

if ( ! defined( 'ABSPATH' ) ) {
	header( 'Status: 403 Forbidden' );
	header( 'HTTP/1.1 403 Forbidden' );
	exit();
}

if ( is_readable( __DIR__ . '/vendor/autoload.php' ) ) {
	require_once __DIR__ . '/vendor/autoload.php';
}

//echo get_title( get_post( 1 ) );

//exit();