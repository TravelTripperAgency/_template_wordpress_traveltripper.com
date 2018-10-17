<?php
/**
 * The template for displaying News and Press posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 * @package Travel_Tripper
 */

get_header(); ?>

<section id="skip-link-content" class="page-header">
    <div class="wrap row">
        <div class="page-header__title-area">
            <p class="page-header__title">News & Press</p>
            <p class="page-header__description">Travel Tripper in the news and our latest press releases and announcements</p>
        </div>
        <div class="page-header__cta">
            <p>Become an expert hotel marketer with our free resources.</p>
            <div class="btn-holder">
                <a class="btn btn-white" href="http://eepurl.com/bI-pnv" rel="nofollow">subscribe</a>
            </div>
        </div>
    </div>
</section>

<main class="content"> <?php

    while ( have_posts() ) : the_post(); ?>

        <article class="post">

            <header class="entry-header">
                <a class="back" href="<?php echo get_site_url(); ?>/news-and-press/">← Back to the Newsroom</a> <?php
                the_title( '<h1 class="entry-title">', '</h1>' );
                traveltripper_posted_on(); ?>
            </header> <?php

            if ( has_post_thumbnail() ) { ?>
                <figure> <?php
                    the_post_thumbnail(); ?>
                </figure> <?php
            }

            the_content(); ?>

            <footer class="entry-footer">
                <a class="back" href="<?php echo get_site_url(); ?>/news-and-press/">← Back to the Newsroom</a>
            </footer>

        </article> <?php

    endwhile; ?>

</main> <?php

get_template_part( 'template-parts/content', 'pre-footer-links' );

get_footer();
