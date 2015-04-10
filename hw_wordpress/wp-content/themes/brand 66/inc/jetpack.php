<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package epixx
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function epixx_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'epixx_jetpack_setup' );
