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

<aside class="sidebar sidebar-resources widget-area"> <?php

    $tags = get_terms( 'resource_tag' );
    if ( !empty( $tags ) ) { ?>
        <section class="widget tag-filter">

            <h3 class="widget-title">Resource Type</h3>

            <nav class="sidebar__nav">
                <ul>

                    <li class="menu-item<?php if ( get_current_url() == get_site_url() . '/resources/' ) { echo ' current-menu-item'; } ?>"><a href="<?php echo get_site_url(); ?>/resources/">View All</a></li> <?php

                    foreach ( $tags as $tag ) :
                        $term_link = get_term_link( $tag, $tags ); ?>
                        <li class="menu-item<?php if ( get_current_url() == $term_link ) { echo ' current-menu-item'; } ?>"><a href="<?php echo $term_link; ?>"><?php echo $tag->name; ?></a></li> <?php
                    endforeach;

                    wp_reset_postdata(); ?>

                </ul>
            </nav>

        </section> <?php
    }

    // dynamic_sidebar( 'sidebar-resources' ); ?>

    <section class="widget widget_search">
        <h3 class="widget-title">Search</h3> <?php
        get_search_form(); ?>
    </section> <?php

    get_template_part( 'template-parts/query', 'events-sidebar' ); ?>

</aside>
