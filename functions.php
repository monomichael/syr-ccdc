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
    wp_enqueue_style('syr-ccdc-style', get_template_directory_uri() . '/style.css', array() ,'1.0');
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

function syr_ccdc_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Blog Sidebar', 'syr_ccdc' ),
        'id' => 'sidebar-blog',
        'description' => __( 'Widgets in this area will be shown on blog and posts pages.', 'syr_ccdc' ),
        'before_title' => '<h1>',
        'after_title' => '</h1>',
    ) );

    register_sidebar( array(
        'name' => __( 'Footer Widget One', 'syr_ccdc' ),
        'id' => 'sidebar-footer-1',
        'description' => __( 'Found at the bottom of every page. Left Footer Widget.', 'syr_ccdc' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

    register_sidebar( array(
        'name' => __( 'Footer Widget Two', 'syr_ccdc' ),
        'id' => 'sidebar-footer-2',
        'description' => __( 'Found at the bottom of every page. Center Left Footer Widget.', 'syr_ccdc' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => "</aside>",
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

    register_sidebar( array(
        'name' => __( 'Footer Widget Three', 'syr_ccdc' ),
        'id' => 'sidebar-footer-3',
        'description' => __( 'Found at the bottom of every page. Center Right Footer Widget.', 'syr_ccdc' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => "</aside>",
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

    register_sidebar( array(
        'name' => __( 'Footer Widget Four', 'syr_ccdc' ),
        'id' => 'sidebar-footer-4',
        'description' => __( 'Found at the bottom of every page. Right Footer Widget.', 'syr_ccdc' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => "</aside>",
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
}

add_action( 'widgets_init', 'syr_ccdc_widgets_init' );

/* Register customized search form
 * @todo HTML5 
 */
function syr_ccdc_search_form( $form ) {
    $form = '<form role="search" method="get" id="searchform" class="searchform" action="' . home_url( '/' ) . '" >
    <div><label class="screen-reader-text" for="s">' . __( 'Search for:' ) . '</label>
    <input type="text" value="' . get_search_query() . '" name="s" id="s" placeholder="Search" />
    <button type="submit" id="searchsubmit"><span class="glyphicon glyphicon-search"></span></button>
    </div>
    </form>';

    return $form;
}

add_filter( 'get_search_form', 'syr_ccdc_search_form' );
