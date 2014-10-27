<?php
/**
* Header template
*
* @package WordPress
* @subpackage syr-ccdc
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
        <head>
                <meta charset="<?php bloginfo( 'charset' ); ?>">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title><?php wp_title( '|', true, 'right' ); bloginfo('name'); ?></title>
                <link rel="profile" href="http://gmpg.org/xfn/11">
                <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"><?php
                wp_head(); ?>
        </head>
        <body <?php body_class(); ?>>

        <header id="primary-header">
                <nav class="navbar navbar-default" role="navigation">
                        <div class="navbar-inner">
                                <div class="container">
                                        <a class="navbar-brand" href="<?php echo site_url(); ?>" title="<?php esc_attr( bloginfo('name') ); ?>"><?php bloginfo('name'); ?></a>
                                        <div class="navbar-header">
                                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                                                        <span class="sr-only">Toggle navigation</span>
                                                        <span class="icon-bar"></span>
                                                        <span class="icon-bar"></span>
                                                        <span class="icon-bar"></span>
                                                </button>
                                        </div><?php 
                                        wp_nav_menu( array(
                                                'container_class' => 'collapse navbar-collapse navbar-right navbar-ex1-collapse',
                                                'menu_class'      => 'nav navbar-nav',
                                                'menu_id'         => 'main-menu',
                                                'walker'          => new syr_ccdc_Walker_Nav_Menu()
                                        ) ); ?>
                                </div>
                        </div>
                </nav>
        </header>
