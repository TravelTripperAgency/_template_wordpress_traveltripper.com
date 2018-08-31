<?php
/**
 * The template for displaying the contact page
 *
 * Template Name: Contact
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package Travel_Tripper
 */

get_header(); ?>

<section id="skip-link-content" class="page-header">
  <div class="wrap row">
    <div class="page-header__title-area">
      <h1 class="page-header__title"><?php the_title(); ?></h1>
      <p class="page-header__description"><?php the_field( 'header_description' ); ?></p>
    </div>
  </div>
</section>

<section class="wrap contact-details">

    <div class="email">
      <div class="email__customer-support">
        <p class="title">Customer Support</p>
        <p>CRS and Booking Engine: <a href="mailto:support@traveltripper.com">support@traveltripper.com</a></p>
        <p>Travel Tripper Web: <a href="mailto:web@traveltripper.com">web@traveltripper.com</a></p>
        <p>Digital Marketing: <a href="mailto:dgs@traveltripper.com">dgs@traveltripper.com</a></p>
      </div>

      <div class="email__sales">
        <p class="title">Sales Inquiries</p>
        <p>To learn more about Travel Tripper or to request a demo, contact us today.</p>
        <p>North and South America: <a href="mailto:ussales@traveltripper.com">ussales@traveltripper.com</a></p>
        <p>Europe, Middle East and Africa: <a href="mailto:uksales@traveltripper.com">uksales@traveltripper.com</a></p>
        <p>Asia or Australia: <a href="mailto:apacsales@traveltripper.com">apacsales@traveltripper.com</a></p>
      </div>

      <div class="email__marketing">
        <p class="title">Marketing Inquiries</p>
        <p>For press requests or partnership-related inquiries, please contact <a href="mailto:marketing@traveltripper.com">marketing@traveltripper.com</a></p>
      </div>
    </div>

    <div class="form">

        <p>For all other inquiries, including partnerships, careers, and more, please use the following form:</p>

        <form action="https://submit.jotform.me/submit/71853446382462/" method="post" name="form_71853446382462"
            id="71853446382462" accept-charset="utf-8">
            <input type="hidden" name="formID" value="71853446382462">

            <label class="form-label form-label-top" id="label_15" for="input_15">Your Name<span class="form-required">*</span></label>

            <div class="row">
                <input type="text" id="first_13" name="q13_name[first]" class="col-md-6 form-textbox validate[required]" size="10" value="" data-component="first" placeholder="First Name" required>
                <input type="text" id="last_13" name="q13_name[last]" class="col-md-6 form-textbox validate[required]" size="15" value="" data-component="last" placeholder="Last Name" required>
            </div>

            <label class="form-label form-label-top form-label-auto" id="label_16" for="input_16">E-mail Address<span class="form-required">*</span></label>
            <input type="email" id="input_14" name="q14_email" class="form-textbox validate[required, Email]" size="30" value="" data-component="email" required>

            <label class="form-label form-label-top form-label-auto" id="label_26" for="input_26">Subject<span class="form-required">*</span></label>
            <div class="form-dropdown-wrap">
                <select class="form-dropdown" id="input_26" name="q26_howCan">
                    <option value="I'm interested in using Travel Tripper products and services">I'm interested in using Travel Tripper products and services</option>
                    <option value="I'm a current client and I need help with my account">I'm a current client and I need help with my account</option>
                    <option value="I'm interested in offering my products or services to Travel Tripper">I'm interested in offering my products or services to Travel Tripper</option>
                    <option value="I have an issue with my hotel reservation">I have an issue with my hotel reservation</option>
                    <option value="I'm in the media and have a question">I'm in the media and have a question</option>
                    <option value="Other">Other</option>
                </select>
            </div>

            <label class="form-label form-label-top form-label-auto" id="label_17" for="input_17">Your Message<span class="form-required">*</span></label>
            <textarea id="input_7" class="form-textarea validate[required]" name="q7_yourMessage" cols="40" rows="6" data-component="textarea" required></textarea>

            <button id="input_2" type="submit" class="btn btn-primary form-submit-button" data-component="button">Send Message</button>

            <input type="hidden" id="simple_spc" name="simple_spc" value="71853446382462">

            <script type="text/javascript">
                document.getElementById("si" + "mple" + "_spc").value = "71853446382462-71853446382462";
            </script>
        </form>

        <script type="text/javascript">JotForm.ownerView=true;</script>

      <!-- <form>
        <label>Your Name</label>
        <div class="row">
          <div class="col-md-6">
            <input>
          </div>
          <div class="col-md-6">
            <input>
          </div>
        </div>

        <label>Email Address</label>
        <input>

        <label>Subject</label>
        <input>

        <label>Message</label>
        <textarea></textarea>

        <input class="btn btn-primary" type="submit" name="submit" value="Send Message">

      </form> -->

    </div>

</section>

<section class="locations">

    <div class="wrap">
        <p class="section-title">Office Locations</p>
    </div>

    <div class="row">

      <div class="location america">
        <div class="location__wrap">
          <p class="title">North America</p>
          <p>370 Lexington Avenue, Suite 1601</p>
          <p>New York, NY 10017</p>
          <p>United States</p>
          <p>+1.212.683.6161</p>
        </div>
      </div>

      <div class="location europe">
        <div class="location__wrap">
          <p class="title">Europe</p>
          <p>WeWork​, 1 Primrose Street</p>
          <p>London​, EC2A 2EX​</p>
          <p>United Kingdom</p>
          <p>+44-02038085753</p>
        </div>
      </div>

      <div class="location asia">
        <div class="location__wrap">
          <p class="title">Asia/India</p>
          <p>Quadrant 4, Level 5, Module A1 & A2</p>
          <p>Cyber Towers, Hitech City,</p>
          <p>Hyderabad, Telengana</p>
          <p>India</p>
          <p>+91 40 300 24444</p>
        </div>
      </div>

    </div>

</section> <?php

get_template_part( 'template-parts/content', 'pre-footer-links' );

get_footer();
