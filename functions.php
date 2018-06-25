<?php
//
// Recommended way to include parent theme styles.
//  (Please see http://codex.wordpress.org/Child_Themes#How_to_Create_a_Child_Theme)
//  
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {

	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css', [ 'bootstrap', 'jquery' ] );
	wp_enqueue_style( 'child-style',
		get_stylesheet_directory_uri() . '/style.css',
		[ 'parent-style' ]
	);

	wp_enqueue_style( 'bsm', '	https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' );
	wp_enqueue_script( 'bjm', '	https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', [ 'jquery' ] );

	wp_enqueue_script( 'ptc', get_theme_file_uri() . '/amg.js', [ 'jquery', 'bootstrap', 'chosen' ] );
	wp_enqueue_script( 'sweetalertjs', 'https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js' );
	wp_enqueue_style( 'sweetalert_css', 'https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css' );


}

//
// Your code goes below
//

/**
 * Adding ACF options page
 */
if ( function_exists( 'acf_add_options_page' ) ) {
	acf_add_options_page();
}
add_action( 'woocommerce_before_checkout_form', 'wsu_add_checkout_content', 12 );

