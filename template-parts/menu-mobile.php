<?php
/**
 * Template part for displaying the mobile navigation.
 *
 * @package Travel_Tripper
 */
?>

<div class="mobile-nav">

    <button class="menu-toggle-close"></button> <?php

    traveltripper_custom_menu( 'menu-mobile' ); ?>

    <img src="<?php echo get_template_directory_uri(); ?>/images/logo-footer.svg" alt="Travel Tripper Logo">
    <p class="request-demo"><a href="http://try.traveltripper.com/request-demo/">Request a Demo</a></p>

    <ul class="mobile-nav__social">
        <li><a class="background-image linkedin" href="https://www.linkedin.com/company/travel-tripper/" rel="nofollow"></a></li>
        <li><a class="background-image facebook" href="<?php if ( wp_is_mobile() ) { echo 'fb://traveltripper'; } else { echo 'https://www.facebook.com/traveltripper/'; } ?>" rel="nofollow"></a></li>
        <li><a class="background-image twitter" href="https://twitter.com/Travel_Tripper" rel="nofollow"></a></li>
        <li><a class="background-image youtube" href="https://www.youtube.com/channel/UCyZzis2vQHWeUj2_XHP1-mg" rel="nofollow"></a></li>
    </ul> <?php

    wp_nav_menu( array(
        'menu' => 'Footer Bottom',
        'container' => 'nav',
        'container_class' => 'site-footer__bottom'
    ) ); ?>

</div>
