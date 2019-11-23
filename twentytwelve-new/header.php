<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="hfeed site">



	<header id="masthead" class="site-header" role="banner">

        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4">

                    <?php
                    $display_header_text = display_header_text();

                    $logo_src = get_theme_mod('logo_src');
                    //var_dump($logo_src);

                    if(!empty($logo_src)):
                        ?>
                        <div class="main-logo">
                            <a href="<?php echo esc_url(home_url()); ?>"><img src="<?php echo esc_url($logo_src);
                                ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>"></a>
                        </div><!-- /Logo -->
                    <?php

                    endif;

                    ?>

                    <?php

                    if($display_header_text):
                        ?>

                        <hgroup>
                            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                            <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
                        </hgroup>
                        <?php
                    endif;

                    ?>

                </div>
                <div class="col-md-8">

                    <nav id="site-navigation" class="main-navigation" role="navigation">
                        <button class="menu-toggle"><?php _e( 'Menu', 'twentytwelve' ); ?></button>
                        <a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentytwelve' ); ?>"><?php _e( 'Skip to content', 'twentytwelve' ); ?></a>
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'primary',
                                'menu_class'     => 'nav-menu',
                            )
                        );
                        ?>
                    </nav><!-- #site-navigation -->

                    <?php if ( get_header_image() ) : ?>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php header_image(); ?>" class="header-image" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" /></a>
                    <?php endif; ?>

                </div>

            </div>
        </div>
	</header><!-- #masthead -->

	<div id="main" class="wrapper">

        <?php //echo do_shortcode("[breadcrumb]"); ?>