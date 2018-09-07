<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Travel_Tripper
 */

if ( ! is_active_sidebar( 'sidebar-primary' ) ) {
	return;
} ?>

<aside class="sidebar sidebar-primary widget-area"> <?php
    dynamic_sidebar( 'sidebar-primary' ); ?>

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

    get_template_part( 'template-parts/query', 'popular-posts' ); ?>

</aside>

<!-- TODO: Remove the below before pushing to production. -->

<!-- <aside class="sidebar sidebar-primary widget-area">

  <section class="widget widget-search">
    <h3 class="widget-title">Blog Search</h3>

    <form class="widget-search__form">
      <input type="search" placeholder="Search">
      <input type="submit" value="Search">
    </form>

  </section>

  <section class="widget popular-content">
    <h3 class="widget-title">Popular Articles</h3>

    <div class="row">

      <div class="popular-content__item">
        <p><a href="/post/">What Google's mobile-first indexing plan for 2018 means for hotel websites</a></p>
      </div>

      <div class="popular-content__item">
        <p><a href="/post/">5 ways hotels can use behavioral economics to improve conversion rates</a></p>
      </div>

      <div class="popular-content__item">
        <p><a href="/post/">What Booking.com's marketing budget shift means for hotels and the digital advertising landscape</a></p>
      </div>

      <div class="popular-content__item">
        <p><a href="/post/">Evolving in a digital world where convenience is the new loyalty</a></p>
      </div>

    </div>

  </section>

  <section class="widget widget-category">
    <h3 class="widget-title">Filter by Category</h3>

    <select>
      <option value="#">Guest Engagement</option>
      <option value="#">Travel Trends</option>
      <option value="#">Hospitality Industry</option>
      <option value="#">Metasearch</option>
      <option value="#">Hotel Distribution</option>
    </select>
  </section>

  <section class="widget widget-events events">
    <div class="wrap">

      <div class="widget-title"><h3>Upcoming Events</h3></div>

      <div class="row">

        <div class="event">
          <p class="event__date">MARCH 12-14</p>
          <p class="event__title">HT-NEXT – SAN DIEGO</p>
        </div>

        <div class="event">
          <p class="event__date">APRIL 11-13</p>
          <p class="event__title">HITEC - AMSTERDAM</p>
        </div>

        <div class="event">
          <p class="event__date">MAY 15-17</p>
          <p class="event__title">International Hotel Technology Forum (IHTF) - SPAIN</p>
        </div>

        <div class="event">
          <p class="event__date">JUNE 18-21</p>
          <p class="event__title">HITEC - HOUSTON</p>
        </div>

      </div>

    </div>
  </section>

</aside> -->
