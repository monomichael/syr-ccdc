<?php
/**
* This file contains functions for the syr-ccdc theme.
*
*/
include 'includes/navwalker.php';

/*
* Enqueues front end scripts and styles.
*/
function syr_ccdc_scripts_styles() {
    // Load Bootstrap minified CSS file.
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.2.0' );
    
    // Load Bootstrap minified JavaScript file.
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '3.2.0' );
    
    // Load our main stylesheet.
    wp_enqueue_style('style', get_stylesheet_directory_uri() . '/style.css', array('ccdc-css') ,'1.0');
}

add_action('wp_enqueue_scripts', 'syr_ccdc_scripts_styles');

if ( ! function_exists( 'syr_ccdc_theme_setup' ) ):
function syr_ccdc_theme_setup() {
		// Adds the main menu
		register_nav_menus( array(
  			'main-menu' => __( 'Main Menu', 'syr_ccdc' ),
		) );
	}
endif;

add_action( 'after_setup_theme', 'syr_ccdc_theme_setup' );

