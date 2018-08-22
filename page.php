<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package Travel_Tripper
 */

get_header(); ?>

<main id="content" class="content"> <?php

	while ( have_posts() ) : the_post();

		get_template_part( 'template-parts/content', 'page' );

	endwhile; ?>

</main> <?php

get_footer();
