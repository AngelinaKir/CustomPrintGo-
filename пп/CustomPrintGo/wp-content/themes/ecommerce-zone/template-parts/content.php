<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Ecommerce Zone
 */

$ecommerce_zone_post_page_title =  get_theme_mod( 'ecommerce_zone_post_page_title', 1 );
$ecommerce_zone_post_page_meta =  get_theme_mod( 'ecommerce_zone_post_page_meta', 1 );
$ecommerce_zone_post_page_thumb = get_theme_mod( 'ecommerce_zone_post_page_thumb', 1 );
$ecommerce_zone_post_page_content =  get_theme_mod( 'ecommerce_zone_post_page_content', 1 );
?>

<div class="col-lg-6 col-md-6 col-sm-6">
    <article id="post-<?php the_ID(); ?>" <?php post_class('article-box'); ?>>
        <header class="entry-header">
            <?php if ($ecommerce_zone_post_page_title == 1 ) {?>
                <?php the_title('<h3 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h3>');?>
                <hr>
            <?php }?>
            <?php if ('post' === get_post_type()) : ?>
                <?php if ($ecommerce_zone_post_page_meta == 1 ) {?>
                    <div class="entry-meta">
                        <?php
                        ecommerce_zone_posted_on();
                        ?>
                    </div>
                <?php }?>
            <?php endif; ?>
        </header>
        <?php if ($ecommerce_zone_post_page_thumb == 1 ) {?>
            <?php if(has_post_thumbnail()){
            the_post_thumbnail();
            } else{?>
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/slider.png" alt="" />
          <?php } ?>
        <?php }?>
        <?php if ($ecommerce_zone_post_page_content == 1 ) {?>
            <div class="entry-summary">
                <p><?php echo wp_trim_words( get_the_content(), esc_attr(get_theme_mod('ecommerce_zone_post_page_excerpt_length', 30)) ); ?><?php echo esc_html(get_theme_mod('ecommerce_zone_post_page_excerpt_suffix','[...]')); ?></p>
                <?php

                    wp_link_pages(array(
                        'before' => '<div class="page-links">' . esc_html__('Pages:', 'ecommerce-zone'),
                        'after' => '</div>',
                    ));
                ?>
            </div>
        <?php }?>
        <footer class="entry-footer">
            <?php ecommerce_zone_entry_footer(); ?>
        </footer>
    </article>
</div>