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
            </div>

            <nav class="site-header__nav">
                <ul>
                    <li class="menu-item menu-item-has-children">
                        <a href="<?php echo get_site_url(); ?>/solutions/">Solutions</a>
                        <ul class="sub-menu">
                            <li class="menu-item">
                                <a href="<?php echo get_site_url(); ?>/solutions/booking-engine/">
                                    <div class="sub-menu__icon">
                                <div class="background-icon reztrip"></div>
                                </div>
                                <div class="sub-menu__text">
                                    <p class="sub-menu__link-text">RezTrip CRS - Booking Engine</p>
                                    <p class="sub-menu__link-description">The industry's most innovative website platform and booking engine</p>
                                </div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="<?php echo get_site_url(); ?>/solutions/hotel-websites/">
                                    <div class="sub-menu__icon">
                                        <div class="background-icon ttweb"></div>
                                    </div>
                                    <div class="sub-menu__text">
                                        <p class="sub-menu__link-text">Travel Tripper Web</p>
                                        <p class="sub-menu__link-description">Beautiful hotel websites driving higher guest engagement and increased conversions</p>
                                    </div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="<?php echo get_site_url(); ?>/solutions/digital-marketing/">
                                    <div class="sub-menu__icon">
                                        <div class="background-icon digital-marketing"></div>
                                    </div>
                                    <div class="sub-menu__text">
                                        <p class="sub-menu__link-text">Digital Marketing</p>
                                        <p class="sub-menu__link-description">Digital marketing and distribution strategy that expands your hotel's global reach</p>
                                    </div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="#">
                                    <div class="sub-menu__icon">
                                        <div class="background-icon express-suite"></div>
                                    </div>
                                    <div class="sub-menu__text">
                                        <p class="sub-menu__link-text">Express Suite</p>
                                        <p class="sub-menu__link-description">All-in-one website and booking engine soltition for small to medium-sized properties</p>
                                    </div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="#">
                                    <div class="sub-menu__icon">
                                        <div class="background-icon rate-match"></div>
                                    </div>
                                    <div class="sub-menu__text">
                                        <p class="sub-menu__link-text">Rate Match</p>
                                        <p class="sub-menu__link-description">Innovative price checking tool that integrates into your website</p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children">
                        <a href="<?php echo get_site_url(); ?>/who-we-serve/">Who We Serve</a>
                        <ul class="sub-menu">
                            <li class="menu-item">
                                <a href="<?php echo get_site_url(); ?>/who-we-serve/management-companies/">
                                    <div class="sub-menu__icon">
                                        <div class="background-icon hotel-groups"></div>
                                    </div>
                                    <div class="sub-menu__text">
                                        <p class="sub-menu__link-text">Hotel Groups & Management Companies</p>
                                        <p class="sub-menu__link-description">Best-in-class brand and multi-property management</p>
                                    </div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="<?php echo get_site_url(); ?>/who-we-serve/casinos/">
                                    <div class="sub-menu__icon">
                                        <div class="background-icon casinos"></div>
                                    </div>
                                    <div class="sub-menu__text">
                                        <p class="sub-menu__link-text">Casinos & Gaming</p>
                                        <p class="sub-menu__link-description">Serve you most loyal guests just as easily online as offline.</p>
                                    </div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="<?php echo get_site_url(); ?>/who-we-serve/independent/">
                                    <div class="sub-menu__icon">
                                        <div class="background-icon independent-hotels"></div>
                                    </div>
                                    <div class="sub-menu__text">
                                        <p class="sub-menu__link-text">Independent & Boutique Hotels</p>
                                        <p class="sub-menu__link-description">All-in-one complete e-commerce solution</p>
                                    </div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="<?php echo get_site_url(); ?>/who-we-serve/partners/">
                                    <div class="sub-menu__icon">
                                        <div class="background-icon partners"></div>
                                    </div>
                                    <div class="sub-menu__text">
                                        <p class="sub-menu__link-text">Partners</p>
                                        <p class="sub-menu__link-description">Full packaged white-label booking engine solutions</p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children">
                        <a href="<?php echo get_site_url(); ?>/resources/">Resources</a>
                        <ul class="sub-menu">
                            <li class="menu-item">
                                <a href="#">
                                    <div class="sub-menu__icon">
                                        <div class="background-icon webinar"></div>
                                    </div>
                                    <div class="sub-menu__text">
                                        <p class="sub-menu__link-text">Webinars</p>
                                    </div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="#">
                                    <div class="sub-menu__icon">
                                        <div class="background-icon case-studies"></div>
                                    </div>
                                    <div class="sub-menu__text">
                                        <p class="sub-menu__link-text">Case Studies</p>
                                    </div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="#">
                                    <div class="sub-menu__icon">
                                        <div class="background-icon slideshare"></div>
                                    </div>
                                    <div class="sub-menu__text">
                                        <p class="sub-menu__link-text">Slideshare</p>
                                    </div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="#">
                                    <div class="sub-menu__icon">
                                        <div class="background-icon infographic"></div>
                                    </div>
                                    <div class="sub-menu__text">
                                        <p class="sub-menu__link-text">Infographics</p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <div class="menu-item__category">
                            <a href="<?php echo get_site_url(); ?>/blog/">Blog</a>
                        </div>
                    </li>
                    <li class="menu-item menu-item-has-children">
                        <a href="<?php echo get_site_url(); ?>/about/">About</a>
                        <ul class="sub-menu">
                            <li class="menu-item">
                                <a href="<?php echo get_site_url(); ?>/about/">
                                    <div class="sub-menu__text">
                                        <p class="sub-menu__link-text">About Travel Tripper</p>
                                    </div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="<?php echo get_site_url(); ?>/news-and-press/">
                                    <div class="sub-menu__text">
                                        <p class="sub-menu__link-text">News & Press</p>
                                    </div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="<?php echo get_site_url(); ?>/about/careers/">
                                    <div class="sub-menu__text">
                                        <p class="sub-menu__link-text">Careers</p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>

            <div class="site-header__cta">
                <a class="btn btn-header" href="#">Request a Demo</a>
                <a class="client-login" href="#"><span class="background-image"></span>Client Login</a>
                <button class="menu-toggle-open"></button>
            </div>

        </div>
    </header> <?php

    if ( is_single() && !is_singular( array( 'resources', 'news-and-press' ) ) ) { ?>
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
