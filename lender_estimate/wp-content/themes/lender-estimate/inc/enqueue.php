<?php



/**

 * Enqueue scripts and styles.

 */



function lender_scripts() {

	// Theme stylesheet.

	wp_enqueue_style( 'lender-style', get_stylesheet_uri() );


	wp_enqueue_style( 'lender-owl-carousel', get_theme_file_uri('/assets/css/owl.carousel.min.css'), array(), '1.0' );

	wp_enqueue_style( 'lender-style-css', get_theme_file_uri('/assets/css/custom.css'), array(), '1.0' );

	wp_enqueue_style( 'lender-responsive', get_theme_file_uri('/assets/css/responsive.css'), array(), '1.0' );












	



	

	wp_enqueue_script( 'jquery-js', get_theme_file_uri('/assets/js/jquery-min.js'), array(), '1.0', true );

    wp_enqueue_script( 'owl-js', get_theme_file_uri('/assets/js/owl.carousel.min.js'), array(), '1.0', true );

 	wp_enqueue_script( 'custom-js', get_theme_file_uri('/assets/js/custom.js'), array(), '1.0', true );


 	



}

add_action( 'wp_enqueue_scripts', 'lender_scripts' );

