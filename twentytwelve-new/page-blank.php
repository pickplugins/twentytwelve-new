<?php
/**
 * Template Name: Blank page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>



    <?php
    while ( have_posts() ) :
        the_post();

        the_content();
        ?>


    <?php endwhile; // end of the loop. ?>


<?php get_footer(); ?>
