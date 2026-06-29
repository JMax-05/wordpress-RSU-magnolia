<?php
/**
 * Travel Blogging functions
 */

if ( ! function_exists( 'travel_blogging_setup' ) ) :
function travel_blogging_setup() {

    load_theme_textdomain( 'travel-blogging', get_template_directory() . '/languages' );

	// Set up the WordPress core custom background feature.
    add_theme_support( 'custom-background', apply_filters( 'travel_blogging_custom_background_args', array(
	    'default-color' => 'ffffff',
	    'default-image' => '',
    ) ) );

	/**
	 * About Theme Function
	 */
	require get_theme_file_path( '/about-theme/about-theme.php' );

	/**
	 * Customizer
	 */
	require get_template_directory() . '/inc/customizer.php';	
}
endif; 
add_action( 'after_setup_theme', 'travel_blogging_setup' );

if ( ! function_exists( 'travel_blogging_styles' ) ) :
	function travel_blogging_styles() {
		// Register theme stylesheet.
		wp_register_style('travel-blogging-style',
			get_template_directory_uri() . '/style.css',array(),
			wp_get_theme()->get( 'Version' )
		);

		// Scroll to top CSS and JS
		wp_enqueue_style( 'dashicons' );
		
		wp_enqueue_style( 'scroll-to-top-style',
			get_template_directory_uri() . '/assets/css/scroll-to-top.css',
			array(),
			wp_get_theme()->get('Version')
		);

		wp_enqueue_script( 'scroll-to-top-js',
			get_template_directory_uri() . '/assets/js/scroll-to-top.js',
			array(),
			wp_get_theme()->get('Version'),
			true
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'travel-blogging-style' );

		wp_enqueue_script( 'travel-blogging-custom-script', get_theme_file_uri( '/assets/js/custom-script.js' ), array( 'jquery' ), true );
	}
endif;
add_action( 'wp_enqueue_scripts', 'travel_blogging_styles' );