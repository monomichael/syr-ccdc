<?php
/**
* This file contains functions for the syr-ccdc theme.
*
*/

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
