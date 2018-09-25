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

$tags = get_terms( 'resource_tag' );
if ( !empty( $tags ) ) { ?>
    <ul class="filter">

        <li class="tag-filter cat-item cat-item-all current" data-cat-id=""><a href="<?php echo get_site_url(); ?>/resources/"><span class="control"><?php echo esc_html( 'All', 'traveltripper' ); ?></span></a></li> <?php

        foreach ( $tags as $tag ) :
            $term_link = get_term_link( $tag, $tags ); ?>
            <li class="tag-filter cat-item cat-item-<?php echo $tag->term_id; ?>" data-cat-id="<?php echo $tag->term_id; ?>"><a href="<?php echo $term_link; ?>"><span class="control"><?php echo $tag->name; ?></span></a></li> <?php
        endforeach;

        wp_reset_postdata(); ?>

    </ul> <?php
}


    // dynamic_sidebar( 'sidebar-resources' ); ?>

    <section class="widget widget_search">
        <h3 class="widget-title">Search</h3> <?php
        get_search_form(); ?>
    </section> <?php

    get_template_part( 'template-parts/query', 'events-sidebar' ); ?>

</aside>
