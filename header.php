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

<body <?php body_class(); ?>>

    <header class="site-header">
        <div class="wrap">

            <a class="skip-link screen-reader-text" href="#skip-link-content"><?php esc_html_e( 'Skip to content', 'traveltripper' ); ?></a>

            <div class="site-header__logo">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
            </div> <?php

            // Should we decide to write a custom Walker, we might use this.
            // wp_nav_menu( array(
            //     'theme_location' => 'menu-primary',
            //     'container' => 'nav',
            //     'container_class' => 'site-header__nav'
            // ) );

            get_template_part( 'template-parts/menu', 'header' ); ?>

            <button class="menu-toggle-open"></button>

        </div>
    </header> <?php

    if ( ( is_single() && !is_singular( array( 'resources', 'news-and-press' ) ) ) || ( is_archive() && !is_post_type_archive( array( 'resources', 'news-and-press' ) ) ) || is_search() ) { ?>
        <section id="skip-link-content" class="page-header">
            <div class="wrap row">
                <div class="page-header__cta">
                    <p>Become an expert hotel marketer with our free resources.</p>
                    <div class="btn-holder">
                        <a class="btn btn-secondary-white" href="#">subscribe</a>
                    </div>
                </div>
            </div>
        </section> <?php
    }
