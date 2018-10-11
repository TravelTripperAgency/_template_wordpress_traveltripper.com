<?php
/**
 * Template part for displaying the header navigation.
 *
 * @package Travel_Tripper
 */
?>

<nav class="site-header__nav">
    <ul>
        <li class="menu-item menu-item-has-children<?php if ( get_current_url() == get_site_url() . '/solutions/' ) { echo ' current-menu-item'; } ?>">
            <a href="<?php echo get_site_url(); ?>/solutions/">Solutions</a>
            <ul class="sub-menu">
                <li class="menu-item<?php if ( get_current_url() == get_site_url() . '/solutions/booking-engine/' ) { echo ' current-menu-item'; } ?>">
                    <a href="<?php echo get_site_url(); ?>/solutions/booking-engine/">
                        <div class="sub-menu__icon">
                    <div class="background-icon reztrip"></div>
                    </div>
                    <div class="sub-menu__text">
                        <p class="sub-menu__link-text">RezTrip CRS & Booking Engine</p>
                        <p class="sub-menu__link-description">The industry's most innovative reservations system and booking engine</p>
                    </div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="<?php echo get_site_url(); ?>/solutions/hotel-website-design/">
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
                    <a href="<?php echo get_site_url(); ?>/solutions/hotel-digital-marketing/">
                        <div class="sub-menu__icon">
                            <div class="background-icon digital-marketing"></div>
                        </div>
                        <div class="sub-menu__text">
                            <p class="sub-menu__link-text">Digital Marketing</p>
                            <p class="sub-menu__link-description">Digital marketing innovation and strategy that expands your hotel's global reach</p>
                        </div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="<?php echo get_site_url(); ?>/solutions/rate-match/">
                        <div class="sub-menu__icon">
                            <div class="background-icon rate-match"></div>
                        </div>
                        <div class="sub-menu__text">
                            <p class="sub-menu__link-text">Rate Match</p>
                            <p class="sub-menu__link-description">Innovative price-checking tool that guarantees price parity with the OTAs</p>
                        </div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item menu-item-has-children<?php if ( get_current_url() == get_site_url() . '/who-we-serve/' ) { echo ' current-menu-item'; } ?>">
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
                            <p class="sub-menu__link-description">Serve your most loyal guests just as easily online as offline</p>
                        </div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="<?php echo get_site_url(); ?>/who-we-serve/independents/">
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
        <li class="menu-item menu-item-has-children<?php if ( get_current_url() == get_site_url() . '/resources/' ) { echo ' current-menu-item'; } ?>">
            <a href="<?php echo get_site_url(); ?>/resources/">Resources</a>
            <ul class="sub-menu">
                <li class="menu-item">
                    <a href="<?php echo get_site_url(); ?>/resources/tag/webinars/">
                        <div class="sub-menu__text">
                            <p class="sub-menu__link-text">Webinars</p>
                        </div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="<?php echo get_site_url(); ?>/resources/tag/vlogs/">
                        <div class="sub-menu__text">
                            <p class="sub-menu__link-text">Vlogs</p>
                        </div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="<?php echo get_site_url(); ?>/resources/tag/podcasts/">
                        <div class="sub-menu__text">
                            <p class="sub-menu__link-text">Podcasts</p>
                        </div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="<?php echo get_site_url(); ?>/resources/tag/infographics/">
                        <div class="sub-menu__text">
                            <p class="sub-menu__link-text">Infographics</p>
                        </div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="<?php echo get_site_url(); ?>/resources/tag/slideshares/">
                        <div class="sub-menu__text">
                            <p class="sub-menu__link-text">Slideshares</p>
                        </div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item<?php if ( get_current_url() == get_site_url() . '/blog/' ) { echo ' current-menu-item'; } ?>">
            <a href="<?php echo get_site_url(); ?>/blog/">Blog</a>
        </li>
        <li class="menu-item menu-item-has-children<?php if ( get_current_url() == get_site_url() . '/about/' ) { echo ' current-menu-item'; } ?>">
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
                    <a href="<?php echo get_site_url(); ?>/contact/">
                        <div class="sub-menu__text">
                            <p class="sub-menu__link-text">Contact</p>
                        </div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="https://www.linkedin.com/jobs/search/?f_C=242998&locationId=OTHERS.worldwide" rel="nofollow" target="_blank">
                        <div class="sub-menu__text">
                            <p class="sub-menu__link-text">Careers</p>
                        </div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="btn-header menu-item">
            <a href="http://try.traveltripper.com/request-demo/?utm_source=website&utm_content=navbar">Request a Demo</a>
        </li>
        <li class="client-login menu-item menu-item-has-children">
            <a>Client Login</a>
            <ul class="sub-menu">
                <li class="menu-item">
                    <a href="https://us.reztripadmin.com/">
                        <div class="sub-menu__text">
                            <p class="sub-menu__link-text">RezTrip</p>
                        </div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="https://asia.reztripadmin.com/">
                        <div class="sub-menu__text">
                            <p class="sub-menu__link-text">RezTrip - Asia</p>
                        </div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="https://www.traveltripper.io/">
                        <div class="sub-menu__text">
                            <p class="sub-menu__link-text">TT Web</p>
                        </div>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</nav>
