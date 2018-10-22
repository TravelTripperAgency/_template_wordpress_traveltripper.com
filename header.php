<?php
/**
 * The header partial
 *
 * This template part displays the <head> and site-header sections
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package Travel_Tripper
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>> <?php

    google_tag_manager_noscript(); ?>

    <header class="site-header">
        <div class="wrap">

            <a class="skip-link screen-reader-text" href="#skip-link-content"><?php esc_html_e( 'Skip to content', 'traveltripper' ); ?></a>

            <div class="site-header__logo">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
            </div> <?php

            // Once we write a custom Walker, we will use this.
            // wp_nav_menu( array(
            //     'theme_location' => 'menu-header',
            //     'container' => 'nav',
            //     'container_class' => 'site-header__nav'
            // ) );

            get_template_part( 'template-parts/menu', 'header' ); ?>

        </div>
    </header> <?php

    if ( ( is_single() && !is_singular( 'news-and-press' ) ) || ( is_archive() && !is_post_type_archive( array( 'resources', 'news-and-press' ) ) ) || is_search() || ( is_page() && !is_page_template() && !is_front_page() ) ) { ?>
        <section id="skip-link-content" class="page-header">
            <div class="wrap row">
                <div class="page-header__cta">
                    <p>Become an expert hotel marketer with our free resources.</p>
                    <div class="btn-holder">
                        <a class="btn btn-secondary-white" href="http://eepurl.com/bI-pnv" rel="nofollow">subscribe</a>
                    </div>
                </div>
            </div>
        </section> <?php
    }
