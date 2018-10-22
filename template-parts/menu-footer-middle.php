<?php
/**
 * Template part for displaying the middle section of the footer navigation.
 *
 * @package Travel_Tripper
 */
?>

<div class="site-footer__middle">
    <div class="wrap"> <?php

        wp_nav_menu( array(
            'menu' => 'Footer Solutions',
            'container' => 'nav'
        ) );

        wp_nav_menu( array(
            'menu' => 'Footer Who We Serve',
            'container' => 'nav'
        ) );

        wp_nav_menu( array(
            'menu' => 'Footer About',
            'container' => 'nav'
        ) );

        wp_nav_menu( array(
            'menu' => 'Footer Resources',
            'container' => 'nav'
        ) ); ?>

        <nav class="d-md-none">
            <p><a href="http://try.traveltripper.com/request-demo/">Request a Demo</a></p>
            <p><a class="text-white" href="<?php echo get_site_url(); ?>/contact/">Contact</a></p>
        </nav>

        <div>
            <p class="d-none d-md-block mb-2"><a href="http://try.traveltripper.com/request-demo/">Request a Demo</a></p>
            <p>Travel Tripper Newsletter</a></p>
            <p class="font-weight-normal">Become an expert hotel marketer with our free resources.</p>
            <a class="btn btn-secondary-dark" href="http://eepurl.com/bI-pnv" rel="nofollow">subscribe</a>
        </div>

    </div>
</div>
