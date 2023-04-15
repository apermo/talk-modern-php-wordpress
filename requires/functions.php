<?php

namespace WCVienna\example;

/**
 * Returns the title, if the given post is published.
 *
 * @param \WP_Post $post The WordPress post object.
 * @return string
 */
function get_title( \WP_Post $post ) {
	if ( $post->post_status === 'publish' ) {
		return $post->post_title;
	}

	return 'Beitrag ist nicht öffentlich lesbar';
}

