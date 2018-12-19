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

    get_template_part( 'template-parts/query', 'popular-articles' );

    $categories = get_categories();
    if ( !empty( $categories ) ) { ?>
        <section class="widget widget_categories">

            <h3 class="widget-title">Filter by Category</h3>

            <nav class="sidebar__nav">
                <ul> <?php

                    foreach ( $categories as $category ) :
                        $term_link = esc_url( get_category_link( $category->term_id ) ); ?>
                        <li class="menu-item<?php if ( get_current_url() == $term_link ) { echo ' current-menu-item'; } ?>"><a href="<?php echo $term_link; ?>"><?php echo esc_html( $category->name ); ?></a></li> <?php
                    endforeach;

                    wp_reset_postdata(); ?>

                </ul>
            </nav>

        </section> <?php
    }

    get_template_part( 'template-parts/query', 'events-sidebar' ); ?>

</aside>
