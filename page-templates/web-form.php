<?php
/**
 * The template for displaying the order form page
 *
 * Template Name: Web Order Form
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package Travel_Tripper
 */

get_header(); ?>

<script>
    var budgetPlatinumTwelveMonths = 2400;
    var budgetGoldTwelveMonths = 1600;
    var budgetSilverTwelveMonths = 850;
    var budgetPlatinumOneTime = 28800;
    var budgetGoldOneTime = 19200;
    var budgetSilverOneTime = 10200;
    var budgetPlatinumMonthly = 1320;
    var budgetGoldMonthly = 880;
    var budgetSilverMonthly = 465;
    var performancePlatinum = 2200;
    var performanceGold = 1600;
    var performanceSilver = 1200;
    var performanceBronze = 600;
    var performanceBasic = 300;
    var ada = 200;
    var cmsPlatinum = 400;
    var cmsGold = 300;
    var cmsSilver = 200;
    var contentMarketingEight = 1800;
    var contentMarketingFour = 1000;
    var contentMarketingTwo = 550;
    var contentMarketingOne = 300;
    var socialMediaOneDay = 1500;
    var socialMediaThreeWeek = 950;
    var socialMediaOneWeek = 500;
    var yext = 100;
    var liveChat = 100;
    var copywriting = 300;
    var photographyTen = 3000;
    var photographyTwenty = 4000;
    var photographyThirty = 5000;
    var translationsCustomer = 500;
    var translationsGoogle = 850;
</script>

<a id="edit-mode" class="btn edit" href="javascript:void(0);">Edit Document</a>

<a class="btn print" href="javascript:window.print();">Print</a>

<div class="payment-calculator">
    <p id="payment-one-time"></p>
    <p id="payment-first-year"></p>
    <p id="payment-second-year"></p>
</div>

<header class="order-form-header wrap">
    <img src="<?php echo get_template_directory_uri(); ?>/images/logo-order-form.svg" alt="Travel Tripper Logo">
    <h1>Website Order Form</h1>
</header>

<section class="summary wrap">

    <p class="section-title">1. Summary</p>

    <div class="row">
        <div class="column">
            <p>Customer Name</p>
        </div>
        <div class="column">
            <input name="customer-name" type="text" placeholder="Legal Name of Customer (contracting party)">
            <!-- <textarea type="text" placeholder="Legal Name of Customer (contracting party)" rows="1"></textarea> -->
        </div>
    </div>

    <div class="row">
        <div class="column">
            <p>Customer Address</p>
        </div>
        <div class="column">
            <input type="text" placeholder="Company Address">
        </div>
    </div>

    <div class="row">
        <div class="column">
            <p>Hotel Name(s)</p>
        </div>
        <div class="column">
            <input type="text" placeholder="Hotel Name(s)">
        </div>
    </div>

    <div class="row">
        <div class="column">
            <p>Product/Service</p>
        </div>
        <div class="column">
            <input type="text" placeholder="Website">
        </div>
    </div>

    <div class="row">
        <div class="column">
            <p>Effective Date</p>
        </div>
        <div class="column">
            <input type="text" placeholder="Effective Date(s)">
        </div>
    </div>

    <div class="row">
        <div class="column">
            <p>Order ID</p>
        </div>
        <div class="column">
            <input type="text" placeholder="ORDER UNIQUE ID GOES HERE (Hotel initials and #, THN001)">
        </div>
    </div>

</section>

<section class="order wrap">

    <p class="section-title">2. Website Order</p>

    <div class="order__type">

        <p class="order__type-title">Check which is applicable:</p>

        <div class="order__type-new">
            <input type="radio" id="order-new" name="order-type" value="new" checked>
            <label for="order-new">New Order</label>
        </div>

        <div class="order__type-addendum">
            <input type="radio" id="order-addendum" name="order-type" value="addendum">
            <label for="order-addendum">Addendum</label>
        </div>

    </div>

    <div class="order__discount">

        <p class="order__discount-title">Discount Rate:</p>

        <div class="order__discount-amount">
            <input type="radio" id="discount-none" name="discount-amount" checked>
            <label for="discount-none">0%</label>
        </div>

        <div class="order__discount-amount">
            <input type="radio" id="discount-five" name="discount-amount">
            <label for="discount-five">5%</label>
        </div>

        <div class="order__discount-amount">
            <input type="radio" id="discount-ten" name="discount-amount">
            <label for="discount-ten">10%</label>
        </div>

        <div class="order__discount-amount">
            <input type="radio" id="discount-fifteen" name="discount-amount">
            <label for="discount-fifteen">15%</label>
        </div>

        <div class="order__discount-amount">
            <input type="radio" id="discount-twenty" name="discount-amount">
            <label for="discount-twenty">20%</label>
        </div>

    </div>

    <div class="row header">
        <div class="column">
            <p>Initials</p>
        </div>
        <div class="column">
            <p>Website Components</p>
        </div>
        <div class="column">
            <p>Budget</p>
        </div>
        <div class="column">
            <p>Payment Terms</p>
        </div>
    </div>

    <div class="row">
        <div class="column">
            <p>______</p>
        </div>
        <div class="column">
            <p>Website Design & Development</p>
        </div>
        <div class="column">
            <select id="web-design-budget">
                <option value="none">Select</option>
                <option value="platinum">Platinum</option>
                <option value="gold">Gold</option>
                <option value="silver">Silver</option>
            </select>
            <div class="order__web-design-budget">
                <p id="12-months-platinum" style="display:none;">One-time website project, 12 monthly payments, <span></span>/mo for 12 months for Platinum</p>
                <p id="12-months-gold" style="display:none;">One-time website project, 12 monthly payments, <span></span>/mo for 12 months for Gold</p>
                <p id="12-months-silver" style="display:none;">One-time website project, 12 monthly payments, <span></span>/mo for 12 months for Silver</p>
                <p id="one-time-platinum" style="display:none;">One-time website project, save 10% with up front payment, <strike></strike> <span></span> for Platinum</p>
                <p id="one-time-gold" style="display:none;">One-time website project, save 10% with up front payment, <strike></strike> <span></span> for Gold</p>
                <p id="one-time-silver" style="display:none;">One-time website project, save 10% with up front payment, <strike></strike> <span></span> for Silver</p>
                <p id="monthly-platinum" style="display:none;">Ongoing fixed monthly fee with a new website every 24 months, <span></span>/mo for Platinum</p>
                <p id="monthly-gold" style="display:none;">Ongoing fixed monthly fee with a new website every 24 months, <span></span>/mo for Gold</p>
                <p id="monthly-silver" style="display:none;">Ongoing fixed monthly fee with a new website every 24 months, <span></span>/mo for Silver</p>
            </div>
        </div>
        <div class="column">
            <select id="web-design-terms">
                <option value="none">Select</option>
                <option value="12-months">Monthly for 12 months</option>
                <option value="one-time">One-time Fee</option>
                <option value="monthly">Monthly</option>
            </select>
        </div>
    </div>

    <div class="row">
        <div class="column">
            <p>______</p>
        </div>
        <div class="column">
            <p>Performance Optimization Bundle</p>
        </div>
        <div class="column">
            <select id="performance-optimization">
                <option value="none">Select</option>
                <option value="platinum">Platinum</option>
                <option value="gold">Gold</option>
                <option value="silver">Silver</option>
                <option value="bronze">Bronze</option>
                <option value="basic">Basic</option>
            </select>
            <div class="order__performance-optimization">
                <p id="performance-platinum" style="display:none;"><span></span>/mo for Platinum Monthly meetings, SEO, and reporting, unlimited website maintenance requests</p>
                <p id="performance-gold" style="display:none;"><span></span>/mo for Gold Meetings & SEO every two months, monthly reporting, unlimited website maintenance requests</p>
                <p id="performance-silver" style="display:none;"><span></span>/mo for Silver Meetings & SEO once per quarter, monthly reporting, up to 8 hours per month of website maintenance</p>
                <p id="performance-bronze" style="display:none;"><span></span>/mo for Bronze SEO once per quarter, monthly reporting, up to 4 hours per month of website maintenance</p>
                <p id="performance-basic" style="display:none;"><span></span>/mo for Basic SEO twice per year, monthly reporting, up to 4 hours per quarter of website maintenance</p>
            </div>
        </div>
        <div class="column">
            <p>Monthly</p>
        </div>
    </div>

    <div class="row">
        <div class="column">
            <p>______</p>
        </div>
        <div class="column">
            <p>ADA AA Compliance</p>
        </div>
        <div class="column">
            <p id="ada-price"><span></span>/mo</p>
        </div>
        <div class="column">
            <p>Monthly</p>
        </div>
    </div>

    <div class="row">
        <div class="column">
            <p>______</p>
        </div>
        <div class="column">
            <p>CMS Platform Subscription</p>
        </div>
        <div class="column order__cms-subscription">
            <p id="cms-platinum" style="display:none;"><span></span>/mo for Platinum</p>
            <p id="cms-gold" style="display:none;"><span></span>/mo for Gold</p>
            <p id="cms-silver" style="display:none;"><span></span>/mo for Silver</p>
        </div>
        <div class="column">
            <p>Monthly</p>
        </div>
    </div>

    <div class="row">
        <div class="column">
            <p>______</p>
        </div>
        <div class="column">
            <p><u>Optional</u></p>
            <p>Content Marketing Work Cycles</p>
        </div>
        <div class="column">
            <select id="content-marketing-select">
                <option value="none">No</option>
                <option value="8">8x/month</option>
                <option value="4">4x/month</option>
                <option value="2">2x/month</option>
                <option value="1">1x/month</option>
            </select>
            <div class="content-marketing">
                <p id="content-marketing-eight" style="display:none;"></p>
                <p id="content-marketing-four" style="display:none;"></p>
                <p id="content-marketing-two" style="display:none;"></p>
                <p id="content-marketing-one" style="display:none;"></p>
            </div>
        </div>
        <div class="column">
            <p>Monthly</p>
        </div>
    </div>

    <div class="row">
        <div class="column">
            <p>______</p>
        </div>
        <div class="column">
            <p><u>Optional</u></p>
            <p>Social Media & Review Management Bundle</p>
        </div>
        <div class="column">
            <select id="social-media-select">
                <option value="none">No</option>
                <option value="one-x-day">1x per day (social), ongoing review management</option>
                <option value="three-x-week">3x per week (social), ongoing review management</option>
                <option value="one-x-week">1x per week (social), ongoing review management</option>
            </select>
            <div class="social-media">
                <p id="social-media-one-x-day" style="display:none;"></p>
                <p id="social-media-three-x-week" style="display:none;"></p>
                <p id="social-media-one-x-week" style="display:none;"></p>
            </div>
        </div>
        <div class="column">
            <p>Monthly</p>
        </div>
    </div>

    <div class="row">
        <div class="column">
            <p>______</p>
        </div>
        <div class="column">
            <p><u>Optional</u></p>
            <p>Yext Local Listings</p>
        </div>
        <div class="column">
            <select id="yext-select">
                <option value="none">No</option>
                <option value="1">Yes</option>
            </select>
            <div class="yext">
                <p id="yext-listing" style="display:none;"></p>
            </div>
        </div>
        <div class="column">
            <p>Monthly</p>
        </div>
    </div>

    <div class="row">
        <div class="column">
            <p>______</p>
        </div>
        <div class="column">
            <p><u>Optional</u></p>
            <p>Live Chat Widget</p>
        </div>
        <div class="column">
            <select id="live-chat-select">
                <option value="none">No</option>
                <option value="1">Yes</option>
            </select>
            <div class="live-chat">
                <p id="live-chat" style="display:none;"></p>
            </div>
        </div>
        <div class="column">
            <p>Monthly</p>
        </div>
    </div>

    <div class="page-number"><p>Page 1 of 8</p></div>

    <div class="row">
        <div class="column">
            <p>______</p>
        </div>
        <div class="column">
            <p><u>Optional</u></p>
            <p>Website Copywriting (post website launch)</p>
        </div>
        <div class="column">
            <p id="copywriting"><span></span> per page</p>
        </div>
        <div class="column">
            <p>One time fee</p>
        </div>
    </div>

    <div class="row">
        <div class="column">
            <p>______</p>
        </div>
        <div class="column">
            <p><u>Optional</u></p>
            <p>Photography (US Only)</p>
        </div>
        <div class="column">
            <p class="mb-1" id="photography-ten">1-10 Room Types: <span></span></p>
            <p class="mb-1" id="photography-twenty">11-20 Room Types: <span></span></p>
            <p id="photography-thirty">21-30+ Room Types: <span></span></p>
        </div>
        <div class="column">
            <p>One time fee</p>
        </div>
    </div>

    <div class="row">
        <div class="column">
            <p>______</p>
        </div>
        <div class="column">
            <p><u>Optional</u></p>
            <p>Translations Services</p>
        </div>
        <div class="column">
            <p class="mb-1" id="translations-customer"><span></span> development fee per language, translations provided by Customer</p>
            <p id="translations-google"><span></span> one-time fee for Google Translate integration</p>
        </div>
        <div class="column">
            <p>One time fee</p>
        </div>
    </div>

</section>

<section class="invoicing wrap">

    <p class="section-title">3. Customer Invoicing Information</p>

    <div class="row">
        <div class="column">
            <p>Billing Contact</p>
        </div>
        <div class="column">
            <input type="text" placeholder="____________________________">
        </div>
    </div>

    <div class="row">
        <div class="column">
            <p>Billing Phone</p>
        </div>
        <div class="column">
            <input type="text" placeholder="____________________________">
        </div>
    </div>

    <div class="row">
        <div class="column">
            <p>Billing Address</p>
        </div>
        <div class="column">
            <input type="text" placeholder="If same as company address, write “same”">
        </div>
    </div>

    <div class="row">
        <div class="column">
            <p>Billing E-mail</p>
        </div>
        <div class="column">
            <input type="text" placeholder="____________________________">
        </div>
    </div>

    <div class="row">
        <div class="column">
            <p>Payment Terms</p>
        </div>
        <div class="column">
            <p>All fees are due and payable to Travel Tripper within fifteen (15) days of the date of the invoice. Any setup fees or one time fees described below will be invoiced upon execution of this Agreement.</p>
        </div>
    </div>

    <div class="row">
        <div class="column">
            <p>Invoice Schedule</p>
        </div>
        <div class="column">
            <p>Travel Tripper will invoice one time and/or setup fees upon execution of this Agreement and monthly fees on the first day of each month. All payments shall be made in U.S. Dollars by check, wire transfer or credit card (subject to a convenience fee of 3.5%).</p>
        </div>
    </div>

</section>

<div class="page-number"><p>Page 2 of 8</p></div>

<section class="page-break"></section>

<section class="terms wrap">

    <p class="section-title">4.	Terms & Conditions</p>

    <div class="terms__renewal">

        <div class="terms__renewal-annual">
            <input type="radio" id="terms-annual" name="terms-renewal" value="annual" checked>
            <label for="terms-annual">Annual renewal</label>
        </div>

        <div class="terms__renewal-monthly">
            <input type="radio" id="terms-monthly" name="terms-renewal" value="monthly">
            <label for="terms-monthly">Month-to-month renewal</label>
        </div>

        <div class="terms__renewal-increase">
            <label for="terms-increase">Define the % increase each year:</label>
            <input type="number" id="terms-increase" name="renewal-increase" value="5" min="3" max="7">
        </div>

    </div>

    <ol type="A">
        <li id="renewal-annual"><strong>Term & Auto-Renewal.</strong> The initial term of this Agreement shall commence on the date of execution of this agreement and shall extend for twelve (12) months following the Website go live date ("Initial Term"). The Initial Term will automatically renew for successive twelve (12) month renewal terms (each a "Renewal Term"). The Initial Term, together with any applicable Renewal Term shall be the Term. Customer may provide written notice of non-renewal at least ninety (90) days prior to the expiration of the Initial Term or the applicable Renewal Term. All prices, fees or amounts will increase by <span class="renewal-increase">5</span>% each year.</li>
        <li id="renewal-monthly" style="display:none;"><strong>Term & Auto-Renewal.</strong> The initial term of this Agreement shall commence on the date of execution of this agreement and shall extend for twelve (12) months following the Website go live date ("Initial Term"). The Initial Term will automatically renew on a month-to-month basis thereafter (each a "Renewal Term"). The Initial Term, together with any applicable Renewal Term shall be the Term. Customer may provide written notice of non-renewal at least ninety (90) days prior to the expiration of the Initial Term or at least (30) days prior to the expiration of each Renewal Term. All prices, fees or amounts will increase by <span class="renewal-increase">5</span>% each year.</li>
        <li><strong>Termination.</strong>
            <ol type="i">
                <li>Either party may terminate this Order if the other party breaches or is in default of any material obligation, which default is incapable of cure or which, being capable of cure, has not been cured within fifteen (15) business days after receipt of written notice of such default from the non-defaulting Party. In the event of termination, Customer shall return all copies of the Documentation to Travel Tripper and pay all outstanding amounts due and payable to Travel Tripper including the unpaid balance of the applicable website construction fees if such fees have not yet been fully paid under a monthly plan. Travel Tripper will not disable customer access to RezTrip until the Term has expired.</li>
                <li>Customer agrees to provide 30-day notice prior to terminating any Website Component included in this Order Form.</li>
                <li>If Customer has ordered a website with a monthly payment plan, either a one-time project that is invoiced over 12 months or an ongoing fixed monthly fee with a new website every 24-months, the Customer will receive a prorated invoice for the balance of the website project. In the case of a one-time website project that is invoiced over 12 months, Customer will receive a single invoice for the remaining months in that 12 month payment period. In the case of an ongoing fixed monthly fee with a new website every 24-months, Customer will receive a single invoice for the remaining months in that 24-month period since the last version of the website was launched.</li>
            </ol>
        </li>
    </ol>

    <div class="terms__msa">

        <div class="terms__msa-none">
            <input type="radio" id="terms-no-msa" name="terms-msa" value="none" checked>
            <label for="terms-no-msa">New customer, no MSA in place</label>
        </div>

        <div class="terms__msa-monthly">
            <input type="radio" id="terms-existing-msa" name="terms-msa" value="monthly">
            <label for="terms-existing-msa">Existing customer with signed MSA</label>
        </div>

    </div>

    <ol type="A" start="3">
        <li id="msa-none"><strong>Customer Acknowledgement.</strong> The parties expressly acknowledge and agree that this Order Form, Appendices attached, and any amendments hereto signed by the parties, is subject to and conditioned upon Customer’s agreement to the terms and conditions of that certain Master Services Agreement ("MSA") appearing at: http://www.traveltripper.com/msa-180112. By signing below, Customer expressly acknowledges and agrees that it has reviewed the MSA and agrees to be bound by the terms and conditions contained therein. Customer further acknowledges and agrees that by signing below, the person signing this Order Form has the authority to execute this Order Form on behalf of Customer.</li>
        <li id="msa-existing" style="display:none;"><strong>Master Agreement.</strong> This New Order is attached to and made a part of the master agreement by and between Travel Tripper and Customer. All other terms and conditions of the master agreement shall remain in effect.</li>
        <li><strong>Powered By.</strong> Customer is required to have a visual link "Powered by Travel Tripper" at the bottom of any website that is created by Travel Tripper for such Customer.</li>
        <li><strong>General Data Protection Regulation (GDPR).</strong> The parties wish to include a provision for the requirements of the General Data Protection Regulation ("GDPR") in the MSA. In consideration of the mutual obligations set out herein, the parties hereby agree that the terms appearing at http://www.traveltripper.com/gdpr-addendum are hereby incorporated into this Order Form by this reference, to the extent that Travel Tripper is a processor of "personal data" (as such term is defined in the GDPR) of EU persons hereunder.</li>
        <li><strong>Services Not Legal Advice.</strong> Travel Tripper does not offer legal services, nor does it provide substitute services for those provided by legal counsel. If Travel Tripper provides forms or other documents to Customer, the provision of such documents should not be deemed to constitute any form of legal advice. Although Travel Tripper's work may involve analysis of legal claims and advice pertaining to Customer's compliance with certain legal obligations, this engagement solely involves provision of advice based on industry practices and on the basis of the individual consultant's knowledge and experience, and does not involve conducting an audit, or confirming compliance with laws or regulations. Travel Tripper's services are designed to help provide reasonable, but not absolute, assurance to Customer that it can mitigate conditions at its premises or on its website which affect accessibility.</li>
        <li><strong>Liability.</strong>
            <ol type="a">
                <li>Notwithstanding anything to the contrary contained in the MSA, the parties agree that the services hereunder are provided "as is" and with no warranty. Travel Tripper shall not be liable under any theory of liability if Customer's website fails to comply with any accessibility requirements including those either promulgated pursuant to the Americans with Disabilities Act or those adopted by the public or website owners generally absent such requirements (the "ADA Requirements").</li>
                <li>Customer agrees that Travel Tripper shall not have, and Travel Tripper hereby disclaims, any responsibility for any damages, losses, costs, fees or expenses, whether arising from tort, contract, or any other theory of liability, resulting from any inaccuracy or incompleteness in the information or advice provided by Travel Tripper hereunder, or if implementation of Travel Tripper's advice or following Travel Tripper's recommendations results in conditions or materials that are determined to be unlawful or which do not fully address regulatory requirements.</li>
            </ol>
        </li>
        <li><strong>Indemnity.</strong> In addition to those indemnity obligations undertaken by Customer pursuant to the terms of the MSA, the Customer additionally hereby agrees to indemnify, defend and hold harmless Travel Tripper, its affiliates, and each of their directors, officers, employees, agents and members, from and against any and all third party losses, claims, liabilities, damages,  costs and expenses (including reasonable attorneys' fees) (collectively, "Claims") related to or arising from the Customer's websites or use thereof by Customer or users of such websites, including with respect to compliance or lack thereof, with any ADA Requirements.</li>
        <li><strong>Conflict.</strong> In the event of a conflict between the terms of this Order Form and the MSA, the terms of this Order Form shall govern and control.</li>
        <li><strong>Governing Law.</strong> This Order Form shall be subject to the governing law provisions contained in Section VIII(G) of the MSA.</li>

        <div class="page-number"><p>Page 3 of 8</p></div>

        <li><strong>Entire Agreement.</strong> This Order Form, together with any attached schedules, which are incorporated by reference, along with the MSA (which shall include any order forms validly executed: (i) prior to this Order Form; (ii) simultaneously along with this Order Form; and (iii) subsequent to the execution of this Order Form) shall constitute the entire agreement between the parties and supersede all other prior agreements, representations, or discussions, whether oral or written with respect to the subject matter described herein. Any capitalized terms not otherwise defined herein shall have the meaning ascribed to them in the MSA.</li>
        <li><strong>Validity.</strong> This Order Form shall be valid for a period of sixty (60) days from the date Customer is in receipt of the Order Form. If Customer does not sign this Order Form within sixty (60) days of receipt, this Order Form shall be deemed null and void.</li>
    </ol>

</section>

<section class="signatures wrap">
    <p><strong>Agreed-to by the undersigned.</strong></p>

    <div class="row">
        <div class="column"><p id="customer-name-output">[Customer Name]</p></div>
        <div class="column"><p>Travel Tripper, LLC</p></div>
    </div>

    <div class="row">
        <div class="column"><p>By: ___________________________</p></div>
        <div class="column"><p>By: ___________________________</p></div>
    </div>

    <div class="row">
        <div class="column"><p>Name: _________________________</p></div>
        <div class="column"><p>Name: _________________________</p></div>
    </div>

    <div class="row">
        <div class="column"><p>Title: __________________________</p></div>
        <div class="column"><p>Title: __________________________</p></div>
    </div>

    <div class="row">
        <div class="column"><p>Date: __________________________</p></div>
        <div class="column"><p>Date: __________________________</p></div>
    </div>

</section>

<div class="page-number"><p>Page 4 of 8</p></div>

<section class="page-break"></section>

<section class="appendix wrap">

    <p class="section-title">Appendix A: Description of Services</p>

    <ol>
        <li>Website Design and Development
            <ul>
                <li>Website Description
                    <ul>
                        <li id="description-platinum" style="display:none;">Platinum - Fully custom website design and development</li>
                        <li id="description-gold" style="display:none;">Gold - Customized website design and development using Travel Tripper theme as a starting point, layout modifications allowed</li>
                        <li id="description-silver" style="display:none;">Silver - Customized website design and development using Travel Tripper theme as a starting point, no layout modifications</li>
                    </ul>
                </li>
                <li>Responsive across desktop, tablet, and mobile devices and defined browsers
                    <ul>
                        <li>Cross-browser testing on latest versions of Chrome, Firefox, Safari, and Windows IE/Edge</li>
                        <li>Android and Apple OS testing on current generation tablets and smartphones</li>
                    </ul>
                </li>
                <li>E-commerce integration including
                    <ul>
                        <li>Reztrip Implementation
                            <ul>
                                <li>Rate Match w/OTA rate population</li>
                                <li>Booking Panel - showing rates and availability by day</li>
                                <li>Live Rates on Page for any Room or Special Offer</li>
                                <li># of Rooms Booked in the last XX hours</li>
                                <li>Automatic Publishing of Special Offers including the offer details, images, and rates</li>
                                <li>Automatic Publishing of Room Details and Images</li>
                            </ul>
                        </li>
                        <li>3rd Party Booking Engine Implementation
                            <ul>
                                <li>Booking Panel</li>
                                <li>Customized links from any Rooms and Special Offers page to carryover user selections into the booking engine based on URL structure</li>
                                <li>CMS managed Rooms and Special Offers content, to be managed by Customer</li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>Page Layouts
                    <ul>
                        <li id="page-layout-platinum" style="display:none;">Platinum - Up to 24 unique page layouts (additional page layouts are available at $850 USD per page layout)</li>
                        <li id="page-layout-gold" style="display:none;">Gold - 17 unique page layouts (additional page layouts are available at $850 USD per page layout)</li>
                        <li id="page-layout-silver" style="display:none;">Silver - 12 unique page layouts (additional page layouts are available at $850 USD per page layout)</li>
                    </ul>
                </li>
                <li>Content Population
                    <ul>
                        <li id="content-population-platinum" style="display:none;">Platinum - Up to 100 migrated pages from existing website (additional page migrations are available at $25 USD per page)</li>
                        <li id="content-population-gold" style="display:none;">Gold - Up to 50 migrated pages from existing website (additional page migrations are available at $25 USD per page)</li>
                        <li id="content-population-silver" style="display:none;">Silver - Up to 25 migrated pages from existing website (additional page migrations are available at $25 USD per page)</li>
                    </ul>
                </li>
                <li>Website Copywriting
                    <ul>
                        <li id="copywriting-platinum" style="display:none;">Platinum - Up to 12 hours of website copywriting (additional hours available at $85 USD per hour)</li>
                        <li id="copywriting-gold" style="display:none;">Gold - Up to 8 hours of website copywriting (additional hours available at $85 USD per hour)</li>
                        <li id="copywriting-silver" style="display:none;">Silver - Up to 6 hours of website copywriting (additional hours available at $85 USD per hour)</li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>Performance Optimization Bundle
            <ul>
                <li id="digital-strategy">Digital Strategy Meetings
                    <ul>
                        <li id="strategy-platinum" style="display:none;">Platinum - Monthly meetings (12 per year, additional meetings available at $200 per meeting, assumes 60 min meeting)</li>
                        <li id="strategy-gold" style="display:none;">Gold - Meetings every other month (6 per year, additional meetings available at $200 per meeting, assumes 60 min meeting)</li>
                        <li id="strategy-silver" style="display:none;">Silver - Meetings every quarter (4 per year, additional meetings available at $200 per meeting, assumes 60 min meeting)</li>
                    </ul>
                </li>
                <li>Search Engine Optimization (SEO)
                    <ul>
                        <li id="seo-platinum" style="display:none;">Platinum - Monthly SEO (12 cycles per year)
                            <ul>
                                <li>Setup
                                    <ul>
                                        <li>Keyword research, meta tags creation, Google search console, Bing setup, Yandex setup, XML sitemap setup and submission, redirects setup prior to website launch, robots.txt setup, Google index check</li>
                                    </ul>
                                </li>
                                <li>Ongoing
                                    <ul>
                                        <li>Ongoing crawl error review and fixes, backlink monitoring, ongoing meta tag optimization, ongoing onpage optimization, internal links optimization, search rankings tracking for top 40 keywords, structured data setup, alerts setup and daily monitoring, image optimization, video optimization, Open Graph (OG) tags optimization, site speed audits, mobile usability checks, mobile first optimization, Google and Bing Business Listing audits and updates, local search citation audit</li>
                                    </ul>
                                </li>
                                <li>Ongoing Advanced
                                    <ul>
                                        <li>Up to 50 keywords tracked in SEMRush, use of city-location tracking, local search aggregators review, backlink audits and recommendations report, brand monitoring reports, evergreen linkable content consultation with content marketing team (additional costs for content creation), local search citation fixes, additional ad-hoc tasks based on value and opportunity</li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li id="seo-gold" style="display:none;">Gold - SEO every other month (6 cycles per year)
                            <ul>
                                <li>Setup</li>
                                <ul>
                                    <li>Keyword research, meta tags creation, Google search console, Bing setup, Yandex setup, XML sitemap setup and submission, redirects setup prior to website launch, robots.txt setup, Google index check</li>
                                </ul>
                                <li>Ongoing</li>
                                <ul>
                                    <li>Ongoing crawl error review and fixes, backlink monitoring, ongoing meta tag optimization, ongoing onpage optimization, internal links optimization, search rankings tracking for top 40 keywords, structured data setup, alerts setup and daily monitoring, image optimization, video optimization, Open Graph (OG) tags optimization, site speed audits, mobile usability checks, mobile first optimization, Google and Bing Business Listing audits and updates, local search citation audit</li>
                                </ul>
                            </ul>
                        </li>
                        <li id="seo-silver" style="display:none;">Silver - SEO every quarter (4 cycles per year)
                            <ul>
                                <li>Setup</li>
                                <ul>
                                    <li>Keyword research, meta tags creation, Google search console, Bing setup, Yandex setup, XML sitemap setup and submission, redirects setup prior to website launch, robots.txt setup, Google index check</li>
                                </ul>
                                <li>Ongoing</li>
                                <ul>
                                    <li>Ongoing crawl error review and fixes, backlink monitoring, ongoing meta tag optimization, ongoing onpage optimization, internal links optimization, search rankings tracking for top 40 keywords, structured data setup, alerts setup and daily monitoring, image optimization, video optimization, Open Graph (OG) tags optimization, site speed audits, mobile usability checks, mobile first optimization, Google and Bing Business Listing audits and updates, local search citation audit</li>
                                </ul>
                            </ul>
                        </li>
                        <li id="seo-bronze" style="display:none;">Bronze - SEO every quarter (4 cycles per year)
                            <ul>
                                <li>Keyword research, meta tags creation, setup and updates of Google search console, Bing, and Yandex, XML sitemap setup and submission, redirects, robots.txt setup, Google index check</li>
                            </ul>
                        </li>
                        <li id="seo-basic" style="display:none;">Basic - SEO twice per year (2 cycles per year)
                            <ul>
                                <li>Keyword research, meta tags creation, setup and updates of Google search console, Bing, and Yandex, XML sitemap setup and submission, redirects, robots.txt setup, Google index check</li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>Monthly performance reporting
                    <ul>
                        <li>Multi-channel website and revenue performance metrics for direct activities managed by Travel Tripper</li>
                        <li>Travel Tripper will deliver standard reporting templates and set up goals and events associated with campaigns managed by Travel Tripper</li>
                        <li>Customer reports, goals, events, and other tracking projects including reporting related to non-Travel Tripper managed services and campaigns are available as either a one-time project cost and/or adjustment in the monthly performance optimization bundle cost</li>
                    </ul>
                </li>
                <li>Website Maintenance (Defined as edits and modifications to content within Customer website, design and development cycles related to new page layouts may incur additional fees)
                    <ul>
                        <li id="maintenance-platinum" style="display:none;">Platinum - Unlimited website maintenance requests</li>
                        <li id="maintenance-gold" style="display:none;">Gold - Unlimited website maintenance requests</li>
                        <li id="maintenance-silver" style="display:none;">Silver - Up to 8 hours per month of website maintenance</li>
                        <li id="maintenance-bronze" style="display:none;">Bronze - Up to 4 hours per month of website maintenance</li>
                        <li id="maintenance-basic" style="display:none;">Basic - Up to 4 hours per quarter of website maintenance</li>
                    </ul>
                </li>
            </ul>
        </li>

        <div class="page-number"><p>Page 5 of 8</p></div>

        <li>ADA Compliance
            <ul>
                <li>Development
                    <ul>
                        <li>Travel Tripper will develop a website that is ADA Compliant at the time of its launch</li>
                        <li>Travel Tripper does not complete ADA Compliance audits or tasks on 3rd party booking engines</li>
                    </ul>
                </li>
                <li>Audits and Monitoring
                    <ul>
                        <li>Travel Tripper will complete quarterly audits and ongoing monitoring related to changes in ADA Compliance statutes and any changes to the Customer website since last audit was performed</li>
                        <li>Audit will check current site versus statutes governing of WCAG AA-Level Compliance</li>
                        <li>Website scans will include audit of readability, color contrast, content elements, universal navigation elements, booking elements, and source code</li>
                        <li>Manual review will be conducted utilizing accessibility readers or tools commonly used by people with visual, audio, and physical impairments</li>
                        <li>Audit documentation may be requested</li>
                    </ul>
                </li>
                <li>Letter/Lawsuit Response and Mitigation Support
                    <ul>
                        <li>Travel Tripper will review lawsuits related to ADA Compliance, interpret those lawsuits for the Customer, and provide suggested responses for inquiry or mitigation of lawsuits including timestamped work logs and commitments to future enhancements required within a lawsuit</li>
                        <li>Time spent on ADA Compliance lawsuit response and mitigation support will be billed at a rate of $250/hr</li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>CMS Platform Subscription
            <ul>
                <li>Ongoing upgrades (4-6 per year)</li>
                <li>Unlimited users</li>
                <li>End-user training and support</li>
                <li>Site backups</li>
                <li>Security updates</li>
                <li>Service Level Agreement </li>
                <li>Cloud platform license</li>
                <li>Website hosting</li>
            </ul>
        </li>
        <li>Content Marketing
            <ul>
                <li>Content marketing work cycles may be used for the following activities, or work of similar scope and time required if agreed upon by Travel Tripper and Customer each month
                    <ul>
                        <li>Blog posts</li>
                        <li>Attractions / Things to do / Events landing pages</li>
                        <li>Email marketing campaigns
                            <ul>
                                <li>Does not include list management or email template creation, both of which are available for an extra fee</li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>Each piece of content includes approximately
                    <ul>
                        <li>300-500 words of copywriting</li>
                        <li>Sourcing 2-3 images, includes image licensing</li>
                        <li>Title tag and meta description, if applicable</li>
                        <li>Social media sharing copy for Facebook and Twitter, if applicable</li>
                        <li>Publishing content on hotel website or sending of email campaign</li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>Social Media & Review Management Bundle
            <ul>
                <li>Includes management of 3 social media channels, typically Facebook, Twitter, and Instagram</li>
                <li>Property related social media topics and assets to come from Customer, local events and happenings content to come from Travel Tripper</li>
                <li>Includes review management and reviewer responses while working closely with property stakeholders on responses to negative reviews and complaints</li>
                <li>List of reviews may be sent to a distribution list automatically if requested</li>
            </ul>
        </li>
        <li>Yext Local Listings
            <ul>
                <li>Listing in the Yext local listings platform</li>
                <li>Populates 200+ listing sources and aggregators</li>
                <li>Alleviates the performance dip associated with a name or address change</li>
                <li>Optimizes for local search results results and lift</li>
            </ul>
        </li>

        <div class="page-number"><p>Page 6 of 8</p></div>

        <li>Live Chat
            <ul>
                <li>Billing will be included in monthly Travel Tripper fees, Travel Tripper will contract with the vendor directly on behalf of Customer</li>
                <li>Pricing provided is per-website</li>
                <li>Customer will be responsible for live chat administration, responding to missed message notifications,reviewing live chat widget reports, and other features and functionality of the Live Chat widget using the given login credentials to the selected vendor's dashboard</li>
                <li>Travel Tripper will select a leading hotel live chat provider such as Kipsu, Zoho, TripTease, or otheralternative depending on requirements.</li>
                <li>Travel Tripper may adjust pricing of the live chat service based on actual price negotiated with an outsidevendor, but only with the written permission of Customer</li>
            </ul>
        </li>
        <li>Website Copywriting
            <ul>
                <li>One page of website copywriting assumes 300-500 words of copy</li>
                <li>Website copywriting is a post-launch service and available by request at any point in time</li>
                <li>Website copywriting that is included in the website design & development is separate and not billed at this rate, please review Item #1 for the website copywriting included in website design and development, if applicable</li>
            </ul>
        </li>
        <li>Photography
            <ul>
                <li>Professional photography of all room types, common spaces, meeting spaces, amenities, and property exterior</li>
                <li>Includes all licensing and ownership rights of images</li>
                <li>Includes flight + transportation costs within the US (at no additional charge) with Customer providing cost-free lodging and meals for the photographer during their stay on property</li>
                <li>Expected stay of photographer is 1-3 days depending on the number of room types and areas to be shot</li>
            </ul>
        </li>
        <li>Translation Services
            <ul>
                <li>Travel Tripper will provide web files for localization so Customer can provide to a translations vendor or populate in-house</li>
                <li>When localization web files are completed and delivered, Travel Tripper will add the additional language to the website and will optimize URL structure, title tags, and meta descriptions</li>
                <li>Or, as an alternative, Google Translate may be integrated into the website for a one-time fee</li>
            </ul>
        </li>
    </ol>

</section>

<div class="page-number"><p>Page 7 of 8</p></div>

<section class="page-break"></section>

<section class="appendix wrap">

    <p class="section-title">Appendix B: Service Level Agreement</p>

    <p><strong>Communications</strong></p>
    <p style="margin-bottom:8px;">Customer will submit new requests using the following process.</p>
  	<p><em>Table 1: Communications</em></p>

    <div class="row header">
        <div class="column">
            <p>Severity Level</p>
        </div>
        <div class="column">
            <p>Contact Process</p>
        </div>
    </div>

    <div class="row">
        <div class="column">
            <p>3 = Standard</p>
        </div>
        <div class="column">
            <p>E-mail request to web@traveltripper.com</p>
        </div>
    </div>

    <div class="row">
        <div class="column">
            <p>2 = High</p>
        </div>
        <div class="column">
            <p>E-mail request to web@traveltripper.com and e-mail or call your primary contact</p>
        </div>
    </div>

    <div class="row">
        <div class="column">
            <p>1 = Critical</p>
        </div>
        <div class="column">
            <p>E-mail request to web@traveltripper.com</p>
            <p>Call the list of cell phones of designated employees in the Emergency Contact List shared with you</p>
        </div>
    </div>

    <p style="margin-top: 32px;"><strong>Service Levels</strong></p>
    <p>Travel Tripper will provide the following service levels:</p>
    <ul>
        <li>Travel Tripper will acknowledge, respond, and commence resolution within the specified times below (see table 2).</li>
        <li>When Travel Tripper commences resolution, we will provide an estimated resolution timeframe.</li>
        <li>Travel Tripper provides services during normal business hours from 8:30 am to 5:30 pm excluding, weekends and holidays.</li>
        <li>For severity level 1 requests, Travel Tripper will designate primary and secondary and tertiary contacts for escalation. Customers may contact us for urgent requests 24 hours per day / 7 days per week / 365 days per year. When one of the designated employees is reached and available, we will use commercially reasonable efforts to resolve the issue.</li>
    </ul>
  	<p><em>Table 2: Service Levels</em></p>

    <div class="container">

        <div class="row header">
            <div class="column">
                <p>Severity Level</p>
            </div>
            <div class="column">
                <p>Description</p>
            </div>
            <div class="column">
                <p>Acknowledge and respond*</p>
            </div>
            <div class="column">
                <p>Commence resolution*</p>
            </div>
        </div>

        <div class="row">
            <div class="column">
                <p>3 = Standard</p>
            </div>
            <div class="column">
                <p>Regular request for support or enhancement.</p>
            </div>
            <div class="column">
                <p>1 day</p>
            </div>
            <div class="column">
                <p>1-7 days</p>
            </div>
        </div>

        <div class="row">
            <div class="column">
                <p>2 = High</p>
            </div>
            <div class="column">
                <p>Software defect without business productivity impact</p>
            </div>
            <div class="column">
                <p>1 day</p>
            </div>
            <div class="column">
                <p>1-3 days</p>
            </div>
        </div>

        <div class="row">
            <div class="column">
                <p>1 = Critical</p>
            </div>
            <div class="column">
                <p>System outage or critical defect causing interruption of key functionality</p>
            </div>
            <div class="column">
                <p>1-2 hours</p>
            </div>
            <div class="column">
                <p>2-4 hours</p>
            </div>
        </div>

    </div>

</section>

<div class="page-number"><p>Page 8 of 8</p></div>

<?php

get_footer();
