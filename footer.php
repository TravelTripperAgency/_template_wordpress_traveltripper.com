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
    </div> <?php

    get_template_part( 'template-parts/menu', 'footer-middle' );

    get_template_part( 'template-parts/menu', 'footer-bottom' ); ?>

</footer> <?php

get_template_part( 'template-parts/menu', 'mobile' );

wp_footer(); ?>

</body>
</html>
