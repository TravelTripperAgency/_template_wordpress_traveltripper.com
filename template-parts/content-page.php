<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Travel_Tripper
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <header class="entry-header">
        <h1 class="entry-title"><?php the_title(); ?></h1>
    </header> <?php

    if ( has_post_thumbnail() ) { ?>
        <figure> <?php
            the_post_thumbnail(); ?>
        </figure> <?php
    }

    the_content(); ?>

</article> <?php
