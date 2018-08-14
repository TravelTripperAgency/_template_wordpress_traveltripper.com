<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Travel_Tripper
 */

?>

<footer class="site-footer">

    <div class="site-footer__top">
        <div class="wrap">

            <p class="site-footer__header">Dominate from search to stay.</p>

            <div class="logo-social">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo-footer.svg" alt="Travel Tripper Logo">
                <ul>
                    <li><a class="background-image linkedin" href="https://www.linkedin.com/company/travel-tripper/"></a></li>
                    <li><a class="background-image facebook" href="https://www.facebook.com/traveltripper/"></a></li>
                    <li><a class="background-image twitter" href="https://twitter.com/Travel_Tripper"></a></li>
                    <li><a class="background-image youtube" href="https://www.youtube.com/channel/UCyZzis2vQHWeUj2_XHP1-mg"></a></li>
                </ul>
            </div>

        </div>
    </div>

    <div class="site-footer__middle">
        <div class="wrap">

        <div class="d-none d-md-block">
            <p>Solutions</p>
            <nav>
                <ul>
                    <li class="menu-item"><a href="/solutions/booking-engine/">RezTrip CRS & Booking Engine</a></li>
                    <li class="menu-item"><a href="/solutions/hotel-websites/">TT Web - Hotel Website and Full-Service Agency</a></li>
                    <li class="menu-item"><a href="/solutions/digital-marketing/">Digital Marketing</a></li>
                    <li class="menu-item"><a href="#">Express Suite</a></li>
                    <li class="menu-item"><a href="#">Rate Match</a></li>
                    <li class="menu-item"><a href="/solutions/integrations/">Integrations</a></li>
                </ul>
            </nav>
        </div>

        <div class="d-none d-md-block">
            <p>Who We Serve</p>
            <nav>
                <ul>
                    <li class="menu-item"><a href="/who-we-serve/management-companies/">Hotel Groups & Management Companies</a></li>
                    <li class="menu-item"><a href="/who-we-serve/casinos/">Casinos & Gaming</a></li>
                    <li class="menu-item"><a href="/who-we-serve/independent/">Independent & Boutique Hotels</a></li>
                    <li class="menu-item"><a href="/solutions/partners/">Partners</a></li>
                </ul>
            </nav>
        </div>

        <div class="d-none d-md-block">
            <p>About</p>
            <nav>
                <ul>
                    <li class="menu-item"><a href="/about/">About Travel Tripper</a></li>
                    <li class="menu-item"><a href="/news-and-press/">News & Press</a></li>
                    <li class="menu-item"><a href="/about/careers/">Careers</a></li>
                </ul>
            </nav>
        </div>

        <div class="d-none d-md-block">
            <p>Resources</p>
            <nav>
                <ul>
                    <li class="menu-item"><a href="/blog/">Blog</a></li>
                    <li class="menu-item"><a href="#">Videos</a></li>
                    <li class="menu-item"><a href="#">Webinars</a></li>
                    <li class="menu-item"><a href="#">Case Studies</a></li>
                    <li class="menu-item"><a href="#">Slideshare</a></li>
                    <li class="menu-item"><a href="#">Infographics</a></li>
                </ul>
            </nav>
        </div>

        <div class="d-md-none">
            <p><a href="#">Request a Demo</a></p>
            <p><a class="text-white" href="/contact/">Contact</a></p>
            <p><a class="text-white" href="#">Client Login</a></p>
        </div>

        <div>
            <p class="d-none d-md-block mb-2"><a href="#">Request a Demo</a></p>
            <p>Travel Tripper Newsletter</a></p>
            <p class="font-weight-normal">Become an expert hotel marketer with our free resources.</p>
            <a class="btn btn-secondary-dark" href="#">subscribe</a>
        </div>

        </div>
    </div>

    <nav class="site-footer__bottom">
        <div class="wrap">
            <ul>
                <li class="menu-item"><a href="#">Help</a></li>
                <li class="menu-item"><a href="#">Site Map</a></li>
                <li class="menu-item"><a href="#">Terms & Conditions</a></li>
                <li class="menu-item"><a href="/privacypolicy/">Privacy Policy</a></li>
                <li class="menu-item"><a href="#">Cookies</a></li>
                <li class="menu-item d-none d-md-inline-block"><a href="/contact/">Contact</a></li>
                <li class="menu-item d-none d-md-inline-block"><a href="#">Client Login</a></li>
            </ul>
        </div>
    </nav>

</footer>

<div class="mobile-nav">
    <button class="menu-toggle-close"></button>
    <nav class="mobile-nav__main">
        <ul>
            <li class="menu-item menu-item-has-children">
                <div class="menu-item__category">
                    <a href="/solutions/">Solutions</a><a class="sub-menu-toggle" href="#"></a>
                </div>
                <ul class="sub-menu">
                    <li class="menu-item">
                        <a href="/solutions/booking-engine/">
                            <div class="sub-menu__icon">
                                <div class="background-icon reztrip"></div>
                            </div>
                            <div class="sub-menu__text">
                                <p class="sub-menu__link-text">RezTrip CRS - Booking Engine</p>
                            </div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="/solutions/hotel-websites/">
                            <div class="sub-menu__icon">
                                <div class="background-icon ttweb"></div>
                            </div>
                            <div class="sub-menu__text">
                                <p class="sub-menu__link-text">Travel Tripper Web</p>
                            </div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="/solutions/digital-marketing/">
                            <div class="sub-menu__icon">
                                <div class="background-icon digital-marketing"></div>
                            </div>
                            <div class="sub-menu__text">
                                <p class="sub-menu__link-text">Digital Marketing</p>
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
                            </div>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="menu-item menu-item-has-children">
                <div class="menu-item__category">
                    <a href="/who-we-serve/">Who We Serve</a><a class="sub-menu-toggle" href="#"></a>
                </div>
                <ul class="sub-menu">
                    <li class="menu-item">
                        <a href="/who-we-serve/management-companies/">
                            <div class="sub-menu__icon">
                                <div class="background-icon hotel-groups"></div>
                            </div>
                            <div class="sub-menu__text">
                                <p class="sub-menu__link-text">Hotel Groups & Management Companies</p>
                            </div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="/who-we-serve/casinos/">
                            <div class="sub-menu__icon">
                                <div class="background-icon casinos"></div>
                            </div>
                            <div class="sub-menu__text">
                                <p class="sub-menu__link-text">Casinos & Gaming</p>
                            </div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="/who-we-serve/independent/">
                            <div class="sub-menu__icon">
                                <div class="background-icon independent-hotels"></div>
                            </div>
                            <div class="sub-menu__text">
                                <p class="sub-menu__link-text">Independent & Boutique Hotels</p>
                            </div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="/solutions/partners/">
                            <div class="sub-menu__icon">
                                <div class="background-icon partners"></div>
                            </div>
                            <div class="sub-menu__text">
                                <p class="sub-menu__link-text">Partners</p>
                            </div>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="menu-item menu-item-has-children">
                <div class="menu-item__category">
                    <a href="/resources/">Resources</a><a class="sub-menu-toggle" href="#"></a>
                </div>
                <ul class="sub-menu">
                    <li class="menu-item">
                        <a href="/blog/">
                            <div class="sub-menu__text">
                                <p class="sub-menu__link-text">Blog</p>
                            </div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="#">
                            <div class="sub-menu__text">
                                <p class="sub-menu__link-text">Videos</p>
                            </div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="#">
                            <div class="sub-menu__text">
                                <p class="sub-menu__link-text">Webinars</p>
                            </div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="#">
                            <div class="sub-menu__text">
                                <p class="sub-menu__link-text">Case Studies</p>
                            </div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="#">
                            <div class="sub-menu__text">
                                <p class="sub-menu__link-text">Slideshare</p>
                            </div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="#">
                            <div class="sub-menu__text">
                                <p class="sub-menu__link-text">Infographics</p>
                            </div>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="menu-item menu-item-has-children">
                <div class="menu-item__category">
                    <a href="/about/">About</a><a class="sub-menu-toggle" href="#"></a>
                </div>
                <ul class="sub-menu">
                    <li class="menu-item">
                        <a href="/about/">
                            <div class="sub-menu__text">
                                <p class="sub-menu__link-text">About Travel Tripper</p>
                            </div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="/news-and-press/">
                            <div class="sub-menu__text">
                                <p class="sub-menu__link-text">News & Press</p>
                            </div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="/about/careers/">
                            <div class="sub-menu__text">
                                <p class="sub-menu__link-text">Careers</p>
                            </div>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
    <img src="<?php echo get_template_directory_uri(); ?>/images/logo-footer.svg" alt="Travel Tripper Logo">
    <p class="request-demo"><a href="#">Request a Demo</a></p>
    <nav class="mobile-nav__footer">
        <div class="wrap">
            <ul>
                <li class="menu-item"><a href="#">Help</a></li>
                <li class="menu-item"><a href="#">Site Map</a></li>
                <li class="menu-item"><a href="#">Terms & Conditions</a></li>
                <li class="menu-item"><a href="/privacypolicy/">Privacy Policy</a></li>
                <li class="menu-item"><a href="#">Cookies</a></li>
                <li class="menu-item"><a href="/contact/">Contact</a></li>
                <li class="menu-item"><a href="#">Client Login</a></li>
            </ul>
        </div>
    </nav>
</div>

<?php wp_footer(); ?>

</body>
</html>
