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

    get_template_part( 'template-parts/query', 'popular-articles' ); ?>

    <section class="widget widget_categories">
        <h3 class="widget-title">Filter by Category</h3>
        <form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
            <label class="screen-reader-text" for="cat">Filter by Category</label>
            <div class="dropdown-wrap"> <?php
                wp_dropdown_categories( array(
                    'show_option_none' => __( 'Select category' ),
                    'orderby' => 'name',
                    'value_field' => 'term_id'
                ) ); ?>
            </div>
        </form>
        <script>
            var dropdown = document.getElementById('cat');
            function onCatChange() {
                if ( dropdown.options[dropdown.selectedIndex].value > 0 ) {
                    location.href = "<?php echo esc_url( home_url( '/' ) ); ?>?cat="+dropdown.options[dropdown.selectedIndex].value;
                }
            }
            dropdown.onchange = onCatChange;
        </script>
    </section> <?php

    get_template_part( 'template-parts/query', 'events-sidebar' ); ?>

</aside>
