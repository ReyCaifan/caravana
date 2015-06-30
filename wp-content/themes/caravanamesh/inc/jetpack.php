<?php
/**
 * Jetpack Compatibility File
 * See: https://jetpack.me/
 *
 * @package caravanaMesh
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function caravanamesh_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'caravanamesh_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function caravanamesh_jetpack_setup
add_action( 'after_setup_theme', 'caravanamesh_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function caravanamesh_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function caravanamesh_infinite_scroll_render
