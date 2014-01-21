<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package Marc Jasmin
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function marc_jasmin_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'marc_jasmin_jetpack_setup' );
