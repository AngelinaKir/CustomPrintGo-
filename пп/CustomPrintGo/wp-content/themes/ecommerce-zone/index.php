<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Ecommerce Zone
 */

get_header();
?>
    <div class="container">
        <div class="row my-4">
            <div id="primary" class="content-area col-lg-9 col-md-9">
                <main id="main" class="site-main ">
                    <div class="row">
                        <?php if (have_posts()) { 
                            if (is_home() && !is_front_page()) : ?>
                                <header>
                                    <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                                </header>
                            <?php endif; ?>
                            
                            <?php /* Start the Loop */
                            while (have_posts()) :
                                the_post();

                                get_template_part( 'template-parts/content',get_post_format());

                            endwhile;

                            if( get_theme_mod('ecommerce_zone_post_page_pagination',1) == 1){ 
                                the_posts_navigation();
                            }

                        } else {

                            get_template_part('template-parts/content', 'none');

                        } ?>
                    </div>
                </main>
            </div>
            <aside id="secondary" class="widget-area col-lg-3 col-md-3">
                <div class="sidebar ">
                    <?php dynamic_sidebar( 'sidebar-1' ); ?>
                </div>
            </aside>
        </div>
    </div>
<?php

get_footer();