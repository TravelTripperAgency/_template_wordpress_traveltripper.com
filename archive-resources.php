<?php
/**
 * The template for displaying Resources archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package Travel_Tripper
 */

get_header(); ?>

<section class="page-header">
  <div class="wrap row">
    <div class="page-header__title-area">
      <h1 class="page-header__title">Resources</h1>
      <p class="page-header__description">Insights, knowledge, and information to help you dominate in the online travel space.</p>
    </div>
    <div class="page-header__cta">
      <p>Become an expert hotel marketer with our free resources.</p>
      <div class="btn-holder">
        <a class="btn btn-white" href="#">subscribe</a>
      </div>
    </div>
  </div>
</section>

<div class="content-sidebar-wrap">

    <main id="content" class="content">

        <h2 class="section-title">Resource Library</h2> <?php

        if ( have_posts() ) {

            // Start the Loop
        	while ( have_posts() ) : the_post();

                // Get the first category
                $categories = get_the_category();
                $category = $categories[0]->cat_name; ?>

                <article class="post">
                    <a href="<?php esc_url( the_permalink() ); ?>"><?php the_post_thumbnail(); ?></a>
                    <p class="category"><?php echo $category; ?></p>
                    <p class="post__title"><a href="<?php esc_url( the_permalink() ); ?>"><?php the_title(); ?></a></p>
                </article> <?php

            endwhile;

        }

        // Not even sure if this works as there are no resources.
        // the_posts_pagination(); ?>

    </main> <?php

    get_sidebar( 'primary' ); ?>

</div> <?php

get_template_part( 'template-parts/content', 'pre-footer-links' );

get_footer();
