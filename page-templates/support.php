<?php
/**
 * The template for displaying the support page (support form)
 *
 * Template Name: Support
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package Travel_Tripper
 */

get_header(); ?>

<section id="skip-link-content" class="page-header">
  <div class="wrap row">
    <div class="page-header__title-area">
      <h1 class="page-header__title"><?php the_title(); ?></h1> <?php
      if ( get_field( 'header_description' ) ) { ?>
          <p class="page-header__description"><?php the_field( 'header_description' ); ?></p> <?php
      } ?>
    </div>
  </div>
</section>

<section class="wrap form">

    <form id="support-form" action="https://webto.salesforce.com/servlet/servlet.WebToCase?encoding=UTF-8" method="POST">
        <input type=hidden name="orgid" value="00D36000000Y9cx">
        <input type=hidden name="retURL" value="https://www.traveltripper.com/support-thank-you/"> <?php

        // NOTE: The below fields are optional debugging elements. Move them outside this php block if you wish to test in debug mode.
        // <input type="hidden" name="debug" value=1>
        // <input type="hidden" name="debugEmail" value="melody@traveltripper.com"> ?>

        <label for="name" class="form-label form-label-top">Contact Name<span class="form-required"> * </span></label>
        <input  id="name" maxlength="80" name="name" class="form-textbox" size="20" type="text" required="" />
        <br>
        <label for="company" class="form-label form-label-top">Company<span class="form-required"> * </span></label>
        <input  id="company" maxlength="80" name="company" class="form-textbox" size="20" type="text" required="" />
        <br>
        <label for="email" class="form-label form-label-top">Email<span class="form-required"> * </span></label>
        <input  id="email" maxlength="80" name="email" class="form-textbox" size="20" type="email" required="" />
        <br>
        <label for="phone" class="form-label form-label-top">Phone<span class="form-required"> * </span></label>
        <input  id="phone" maxlength="40" name="phone" class="form-textbox" size="20" type="text" required="" />
        <br>
        <label class="form-label form-label-top">Product Type:<span class="form-required"> * </span></label>
        <div class="form-input-wide">
            <select  id="00N3600000T3vOH" name="00N3600000T3vOH" title="Product Type" class="form-textbox form-dropdown" required="">
                <option value="">--None--</option>
                <option value="Booking Engine">Booking Engine</option>
                <option value="Call Center">Call Center</option>
                <option value="Channel Manager">Channel Manager</option>
                <option value="Direct Connect">Direct Connect</option>
                <option value="GDS">GDS</option>
                <option value="Meta Search">Meta Search</option>
                <option value="PMS Interface">PMS Interface</option>
                <option value="Reztrip Admin">Reztrip Admin</option>
                <option value="SEO">SEO</option>
                <option value="Tracking">Tracking</option>
                <option value="Website">Website</option>
                <option value="Other">Other</option>
            </select>
        </div>

        <label for="subject" class="form-label form-label-top">Subject<span class="form-required"> * </span></label>
        <input  id="subject" class="form-textbox" maxlength="80" name="subject" size="20" type="text" required="" />
        <br>
        <label for="description" class="form-label form-label-top">Description<span class="form-required"> * </span></label>
        <textarea name="description" rows="5" class="form-textbox" required=""></textarea>
        <br>
        <div class="g-recaptcha" data-theme="light" data-sitekey="6Lc6ZD8UAAAAAAbR8HVE5bojfaxtZdrHF0lsOGn7"></div>
        <div id="grecaptcharesponseError"></div>
        <br>
        <input type="submit" class="submit-btn" name="submit">

    </form>

</section> <?php

get_template_part( 'template-parts/content', 'pre-footer-links' );

get_footer();
