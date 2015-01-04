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

        <div class="header-container">
            <header id="primary-header">
                    <nav class="navbar navbar-ccdc" role="navigation">
                            <div class="navbar-inner">
                                    <div class="container">
                                        <strong class="logo">
                                            <a href="/"><img width="300" height="100" alt="Enfold Flat Business Demo" src="wp-content/themes/syr-ccdc/img/infosec.png"></a>
                                        </strong>

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
                                                'menu_class'      => 'main-menu main-nav',
                                                'walker'          => new syr_ccdc_Walker_Nav_Menu()
                                        ) ); ?>
                                    </div>
                            </div>
                    </nav>

                    <div class="header">
                        <div class="container">
                            <h1>InfoSec Club</h1>
                            <h2>Syracuse University</h2>
                            <h2>Lorem ipsum. Lorem ipsum.</h2>
                        </div>
                    </div>
            </header>
        </div>

<div id="main-content">
    <div class="container">
        <div class="border-element border-arrow-down">
            <div class="border-outer">
                <div class="border-inner">
                </div>
            </div>
        </div>
