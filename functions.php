<?php
/**
 * Storefront child functions.php
 *
 * @package storefront-child
 */

/**
 * Get parent theme and child theme's styles.
 */

add_action( 'wp_enqueue_scripts', 'storefront_child_enqueue_styles' );

function storefront_child_enqueue_styles() {
	
    /* Always load active theme's style.css. */
    wp_enqueue_style( 'style', get_stylesheet_uri() );
}


/**
 * Remove parent theme styles.
 * If you don no want any parent styles uncomment the function below
 */

/*
add_action( 'wp_enqueue_scripts', 'storefront_child_dequeue_styles', 11 );

function storefront_child_dequeue_styles() {
	
    wp_dequeue_style( 'storefront-style' );

}
*/

