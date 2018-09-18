<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Travel_Tripper
 */

// if ( ! is_active_sidebar( 'sidebar-primary' ) ) {
// 	return;
// } ?>

<aside class="sidebar sidebar-primary widget-area"> <?php

    // dynamic_sidebar( 'sidebar-primary' ); ?>

    <section class="widget widget_search">
        <h3 class="widget-title">Search</h3> <?php
        get_search_form(); ?>
    </section> <?php

    get_template_part( 'template-parts/query', 'events-sidebar' ); ?>

</aside>
