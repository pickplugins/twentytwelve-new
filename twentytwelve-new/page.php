<?php
/**
 * The template for displaying all pages
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

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div id="primary" class="site-content">
                <div id="content" role="main">

                    <?php
                    while ( have_posts() ) :
                        the_post();
                        ?>
                        <?php get_template_part( 'content', 'page' ); ?>
                        <?php comments_template( '', true ); ?>
                    <?php endwhile; // end of the loop. ?>

                </div><!-- #content -->
            </div><!-- #primary -->


        </div>
        <div class="col-md-4">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>


<?php get_footer(); ?>
