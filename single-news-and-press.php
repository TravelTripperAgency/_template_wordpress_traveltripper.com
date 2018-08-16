<?php
/**
 * The template for displaying News and Press posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 * @package Travel_Tripper
 */

get_header(); ?>

<section class="page-header">
    <div class="wrap row">
        <div class="page-header__title-area">
            <p class="page-header__title">News & Press</p>
            <p class="page-header__description">Travel Tripper in the news and our latest press releases and announcements</p>
        </div>
        <div class="page-header__cta">
            <p>Become an expert hotel marketer with our free resources.</p>
            <div class="btn-holder">
                <a class="btn btn-white" href="#">subscribe</a>
            </div>
        </div>
    </div>
</section>

<main id="content" class="content"> <?php

    while ( have_posts() ) : the_post(); ?>

        <article class="post">

            <header class="entry-header">
                <a class="back" href="<?php echo get_site_url(); ?>/news-and-press/">← Back to the Newsroom</a>
                <h1 class="entry-title"><?php the_title(); ?></h1>
                <time class="entry-time" datetime="<?php the_time('c'); ?>"><?php the_time('F j, Y'); ?></time>
            </header>

            <figure> <?php
                the_post_thumbnail(); ?>
            </figure> <?php

            the_content(); ?>

            <footer class="entry-footer">
                <a class="back" href="<?php echo get_site_url(); ?>/news-and-press/">← Back to the Newsroom</a>
            </footer>

        </article> <?php

    endwhile; ?>

</main>

<section class="pre-footer-links">
    <a class="pre-footer-link" href="#">
      <div class="pre-footer-link__wrapper">
        <img class="pre-footer-link__image" src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-resources.svg" alt="Resources icon">
        <p class="pre-footer-link__headline">Resources</p>
        <p class="pre-footer-link__description">Insights, knowledge, and information to help you dominate the online travel space.<span></span></p>
      </div>
    </a>
    <a class="pre-footer-link" href="/blog/">
      <div class="pre-footer-link__wrapper">
        <img class="pre-footer-link__image" src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-blog.svg" alt="Blog icon">
        <p class="pre-footer-link__headline">Blog</p>
        <p class="pre-footer-link__description">The latest in hotel marketing and distribution trends for independent hotels.<span></span></p>
      </div>
    </a>
    <a class="pre-footer-link" href="/about/careers/">
      <div class="pre-footer-link__wrapper">
        <img class="pre-footer-link__image" src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-careers.svg" alt="Careers icon">
        <p class="pre-footer-link__headline">Careers</p>
        <p class="pre-footer-link__description">We're always on the lookout for talented and ambitious individuals looking to join our growing team.<span></span></p>
      </div>
    </a>
</section> <?php

get_footer();
