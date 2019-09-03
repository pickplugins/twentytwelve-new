<?php


add_action('site_content_home','site_content_home_top_search_box');

function site_content_home_top_search_box(){

    ?>


    <section class="home-big-search-box p-5">

        <div class="container">
            <div class="row">
                <div class="col-12 py-5">
                    <?php

                    echo do_shortcode('[job_bm_big_search]');

                    ?>
                </div>
            </div>
        </div>


    </section>

    <style type="text/css">
        .home-big-search-box{
            background: url("https://image.freepik.com/free-vector/blue-technology-circuit-diagram-with-glowing-line-lights_1017-17266.jpg");
            background-repeat: repeat;
            /* background-size: 100%; */
            background-position-y: center;
        }



    </style>
    <?php

}


add_action('site_content_home','site_content_home_category_list');

function site_content_home_category_list(){

    ?>


    <section class="home-category-list p-5">

        <div class="container">
            <div class="row">
                <div class="col-12 py-5">

                    category_list

                </div>
            </div>
        </div>


    </section>

    <style type="text/css">




    </style>
    <?php

}


add_action('site_content_home','site_content_home_job_archive');

function site_content_home_job_archive(){

    ?>


    <section class="home-category-list p-5">

        <div class="container">
            <div class="row">
                <div class="col-8">

                    <?php

                    echo do_shortcode('[job_bm_archive display_pagination="no"]');

                    ?>

                </div>

                <div class="col-4">

                    job_archive side

                </div>

            </div>
        </div>


    </section>

    <style type="text/css">




    </style>
    <?php

}

add_action('site_content_home','site_content_home_company_slider');

function site_content_home_company_slider(){

    ?>


    <section class="home-category-list p-5">

        <div class="container">
            <div class="row">
                <div class="col-12 py-5">

                    company_slider

                </div>
            </div>
        </div>


    </section>

    <style type="text/css">




    </style>
    <?php

}


add_action('site_content_home','site_content_home_blogs');

function site_content_home_blogs(){

    ?>
    <section class="home-blogs ">

        <div class="container">
            <div class="row">
                <div class="col-12">

                    <h2 class="home-blogs-header text-center my-4">Latest Blogs</h2>
                    <div class=" home-blogs-list row">

                        <div class="home-blogs-list-item col-4">
                            <div class="item-thumbnail"></div>
                            <h3 class="item-title"><a href="">Hello post title 1</a> </h3>
                            <p class="item-excerpt">As a developer at our headquarters in Dupont Circle, you’ll develop responsive themes for WordPress. You’ll use Sass, Bundler and Grunt (past experience with these preferred, but not necessarily required) to automate what you can, so you can focus on writing clean, performant code</p>
                            <div class="item-meta">
                                <span class="meta-author">Nur Hasan</span>
                                <span class="meta-date">12/09/2019</span>
                            </div>
                        </div>

                        <div class="home-blogs-list-item col-4">
                            <div class="item-thumbnail"></div>
                            <h3 class="item-title"><a href="">Hello post title 1</a> </h3>
                            <p class="item-excerpt">As a developer at our headquarters in Dupont Circle, you’ll develop responsive themes for WordPress. You’ll use Sass, Bundler and Grunt (past experience with these preferred, but not necessarily required) to automate what you can, so you can focus on writing clean, performant code</p>
                            <div class="item-meta">
                                <span class="meta-author">Nur Hasan</span>
                                <span class="meta-date">12/09/2019</span>
                            </div>
                        </div>

                        <div class="home-blogs-list-item col-4">
                            <div class="item-thumbnail"></div>
                            <h3 class="item-title"><a href="">Hello post title 1</a> </h3>
                            <p class="item-excerpt">As a developer at our headquarters in Dupont Circle, you’ll develop responsive themes for WordPress. You’ll use Sass, Bundler and Grunt (past experience with these preferred, but not necessarily required) to automate what you can, so you can focus on writing clean, performant code</p>
                            <div class="item-meta">
                                <span class="meta-author">Nur Hasan</span>
                                <span class="meta-date">12/09/2019</span>
                            </div>
                        </div>


                    </div>

                    <div class="m-5 text-center"><a href="">Read Blogs</a> </div>

                </div>
            </div>
        </div>



    </section>


    <style type="text/css">

        section{}
        .section-title{}


        .home-blogs{}
        .home-blogs-header{}
        .home-blogs-list{}
        .home-blogs-list-item{}
        .item-thumbnail{}
        .item-title{}
        .item-excerpt{}
        .item-meta{}
        .meta-author{}
        .meta-date{}
    </style>

    <?php

}