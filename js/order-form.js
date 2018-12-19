jQuery(document).ready(function() {

  $('#edit-mode').click(function() {
    if ( $('#edit-mode').hasClass('selected') ) {
      $('#edit-mode').removeClass('selected');
      $('#edit-mode').html('Edit Document');
      document.designMode = 'off';
    } else {
      $('#edit-mode').addClass('selected');
      $('#edit-mode').html('Done Editing');
      document.designMode = 'on';
    }
  });

  // Set prices on page load
  $('#12-months-platinum span').html('$' + addCommas(budgetPlatinumTwelveMonths));
  $('#12-months-gold span').html('$' + addCommas(budgetGoldTwelveMonths));
  $('#12-months-silver span').html('$' + addCommas(budgetSilverTwelveMonths));
  $('#one-time-platinum strike').html('$' + addCommas(budgetPlatinumOneTime));
  $('#one-time-gold strike').html('$' + addCommas(budgetGoldOneTime));
  $('#one-time-silver strike').html('$' + addCommas(budgetSilverOneTime));
  $('#one-time-platinum span').html('$' + addCommas(budgetPlatinumOneTime * 0.9));
  $('#one-time-gold span').html('$' + addCommas(budgetGoldOneTime * 0.9));
  $('#one-time-silver span').html('$' + addCommas(budgetSilverOneTime * 0.9));
  $('#monthly-platinum span').html('$' + addCommas(budgetPlatinumMonthly));
  $('#monthly-gold span').html('$' + addCommas(budgetGoldMonthly));
  $('#monthly-silver span').html('$' + addCommas(budgetSilverMonthly));
  $('#performance-platinum span').html('$' + addCommas(performancePlatinum));
  $('#performance-gold span').html('$' + addCommas(performanceGold));
  $('#performance-silver span').html('$' + addCommas(performanceSilver));
  $('#performance-bronze span').html('$' + addCommas(performanceBronze));
  $('#performance-basic span').html('$' + addCommas(performanceBasic));
  $('#ada-price span').html('$' + addCommas(ada));
  $('#cms-platinum span').html('$' + addCommas(cmsPlatinum));
  $('#cms-gold span').html('$' + addCommas(cmsGold));
  $('#cms-silver span').html('$' + addCommas(cmsSilver));
  $('#content-marketing-eight').html('$' + addCommas(contentMarketingEight));
  $('#content-marketing-four').html('$' + addCommas(contentMarketingFour));
  $('#content-marketing-two').html('$' + addCommas(contentMarketingTwo));
  $('#content-marketing-one').html('$' + addCommas(contentMarketingOne));
  $('#social-media-one-x-day').html('$' + addCommas(socialMediaOneDay));
  $('#social-media-three-x-week').html('$' + addCommas(socialMediaThreeWeek));
  $('#social-media-one-x-week').html('$' + addCommas(socialMediaOneWeek));
  $('#yext-listing').html('$' + addCommas(yext) + '/mo');
  $('#live-chat').html('$' + addCommas(liveChat) + '/mo');
  $('#copywriting span').html('$' + addCommas(copywriting));
  $('#photography-ten span').html('$' + addCommas(photographyTen));
  $('#photography-twenty span').html('$' + addCommas(photographyTwenty));
  $('#photography-thirty span').html('$' + addCommas(photographyThirty));
  $('#translations-customer span').html('$' + addCommas(translationsCustomer));
  $('#translations-google span').html('$' + addCommas(translationsGoogle));

  $('#discount-none, #discount-five, #discount-ten, #discount-fifteen, #discount-twenty').click(function() {

    calculateCost();

    if ($('#discount-none').is(':checked')) {
      $('#12-months-platinum span').html('$' + addCommas(budgetPlatinumTwelveMonths));
      $('#12-months-gold span').html('$' + addCommas(budgetGoldTwelveMonths));
      $('#12-months-silver span').html('$' + addCommas(budgetSilverTwelveMonths));
      $('#one-time-platinum span').html('$' + addCommas(budgetPlatinumOneTime * 0.9));
      $('#one-time-gold span').html('$' + addCommas(budgetGoldOneTime * 0.9));
      $('#one-time-silver span').html('$' + addCommas(budgetSilverOneTime * 0.9));
      $('#monthly-platinum span').html('$' + addCommas(budgetPlatinumMonthly));
      $('#monthly-gold span').html('$' + addCommas(budgetGoldMonthly));
      $('#monthly-silver span').html('$' + addCommas(budgetSilverMonthly));
      $('#performance-platinum span').html('$' + addCommas(performancePlatinum));
      $('#performance-gold span').html('$' + addCommas(performanceGold));
      $('#performance-silver span').html('$' + addCommas(performanceSilver));
      $('#performance-bronze span').html('$' + addCommas(performanceBronze));
      $('#performance-basic span').html('$' + addCommas(performanceBasic));
      $('#ada-price span').html('$' + addCommas(ada));
      $('#cms-platinum span').html('$' + addCommas(cmsPlatinum));
      $('#cms-gold span').html('$' + addCommas(cmsGold));
      $('#cms-silver span').html('$' + addCommas(cmsSilver));
      $('#content-marketing-eight').html('$' + addCommas(contentMarketingEight));
      $('#content-marketing-four').html('$' + addCommas(contentMarketingFour));
      $('#content-marketing-two').html('$' + addCommas(contentMarketingTwo));
      $('#content-marketing-one').html('$' + addCommas(contentMarketingOne));
      $('#social-media-one-x-day').html('$' + addCommas(socialMediaOneDay));
      $('#social-media-three-x-week').html('$' + addCommas(socialMediaThreeWeek));
      $('#social-media-one-x-week').html('$' + addCommas(socialMediaOneWeek));
      $('#yext-listing').html('$' + addCommas(yext) + '/mo');
      $('#live-chat').html('$' + addCommas(liveChat) + '/mo');
      $('#copywriting span').html('$' + addCommas(copywriting));
      $('#photography-ten span').html('$' + addCommas(photographyTen));
      $('#photography-twenty span').html('$' + addCommas(photographyTwenty));
      $('#photography-thirty span').html('$' + addCommas(photographyThirty));
      $('#translations-customer span').html('$' + addCommas(translationsCustomer));
      $('#translations-google span').html('$' + addCommas(translationsGoogle));
    } else if ($('#discount-five').is(':checked')) {
      $('#12-months-platinum span').html('<strike>$' + addCommas(budgetPlatinumTwelveMonths) + '</strike> $' + addCommas(budgetPlatinumTwelveMonths * 0.95));
      $('#12-months-gold span').html('<strike>$' + addCommas(budgetGoldTwelveMonths) + '</strike> $' + addCommas(budgetGoldTwelveMonths * 0.95));
      $('#12-months-silver span').html('<strike>$' + addCommas(budgetSilverTwelveMonths) + '</strike> $' + addCommas(budgetSilverTwelveMonths * 0.95));
      $('#one-time-platinum span').html('$' + addCommas(budgetPlatinumOneTime * 0.85));
      $('#one-time-gold span').html('$' + addCommas(budgetGoldOneTime * 0.85));
      $('#one-time-silver span').html('$' + addCommas(budgetSilverOneTime * 0.85));
      $('#monthly-platinum span').html('<strike>$' + addCommas(budgetPlatinumMonthly) + '</strike> $' + addCommas(budgetPlatinumMonthly * 0.95));
      $('#monthly-gold span').html('<strike>$' + addCommas(budgetGoldMonthly) + '</strike> $' + addCommas(budgetGoldMonthly * 0.95));
      $('#monthly-silver span').html('<strike>$' + addCommas(budgetSilverMonthly) + '</strike> $' + addCommas(budgetSilverMonthly * 0.95));
      $('#performance-platinum span').html('<strike>$' + addCommas(performancePlatinum) + '</strike> $' + addCommas(performancePlatinum * 0.95));
      $('#performance-gold span').html('<strike>$' + addCommas(performanceGold) + '</strike> $' + addCommas(performanceGold * 0.95));
      $('#performance-silver span').html('<strike>$' + addCommas(performanceSilver) + '</strike> $' + addCommas(performanceSilver * 0.95));
      $('#performance-bronze span').html('<strike>$' + addCommas(performanceBronze) + '</strike> $' + addCommas(performanceBronze * 0.95));
      $('#performance-basic span').html('<strike>$' + addCommas(performanceBasic) + '</strike> $' + addCommas(performanceBasic * 0.95));
      $('#ada-price span').html('<strike>$' + addCommas(ada) + '</strike> $' + addCommas(ada * 0.95));
      $('#cms-platinum span').html('<strike>$' + addCommas(cmsPlatinum) + '</strike> $' + addCommas(cmsPlatinum * 0.95));
      $('#cms-gold span').html('<strike>$' + addCommas(cmsGold) + '</strike> $' + addCommas(cmsGold * 0.95));
      $('#cms-silver span').html('<strike>$' + addCommas(cmsSilver) + '</strike> $' + addCommas(cmsSilver * 0.95));
      $('#content-marketing-eight').html('<strike>$' + addCommas(contentMarketingEight) + '</strike> $' + addCommas(contentMarketingEight * 0.95));
      $('#content-marketing-four').html('<strike>$' + addCommas(contentMarketingFour) + '</strike> $' + addCommas(contentMarketingFour * 0.95));
      $('#content-marketing-two').html('<strike>$' + addCommas(contentMarketingTwo) + '</strike> $' + addCommas(contentMarketingTwo * 0.95));
      $('#content-marketing-one').html('<strike>$' + addCommas(contentMarketingOne) + '</strike> $' + addCommas(contentMarketingOne * 0.95));
      $('#social-media-one-x-day').html('<strike>$' + addCommas(socialMediaOneDay) + '</strike> $' + addCommas(socialMediaOneDay * 0.95));
      $('#social-media-three-x-week').html('<strike>$' + addCommas(socialMediaThreeWeek) + '</strike> $' + addCommas(socialMediaThreeWeek * 0.95));
      $('#social-media-one-x-week').html('<strike>$' + addCommas(socialMediaOneWeek) + '</strike> $' + addCommas(socialMediaOneWeek * 0.95));
      $('#yext-listing').html('<strike>$' + addCommas(yext) + '</strike> $' + addCommas(yext * 0.95) + '/mo');
      $('#live-chat').html('<strike>$' + addCommas(liveChat) + '</strike> $' + addCommas(liveChat * 0.95) + '/mo');
      $('#copywriting span').html('<strike>$' + addCommas(copywriting) + '</strike> $' + addCommas(copywriting * 0.95));
      $('#photography-ten span').html('<strike>$' + addCommas(photographyTen) + '</strike> $' + addCommas(photographyTen * 0.95));
      $('#photography-twenty span').html('<strike>$' + addCommas(photographyTwenty) + '</strike> $' + addCommas(photographyTwenty * 0.95));
      $('#photography-thirty span').html('<strike>$' + addCommas(photographyThirty) + '</strike> $' + addCommas(photographyThirty * 0.95));
      $('#translations-customer span').html('<strike>$' + addCommas(translationsCustomer) + '</strike> $' + addCommas(translationsCustomer * 0.95));
      $('#translations-google span').html('<strike>$' + addCommas(translationsGoogle) + '</strike> $' + addCommas(translationsGoogle * 0.95));
    } else if ($('#discount-ten').is(':checked')) {
      $('#12-months-platinum span').html('<strike>$' + addCommas(budgetPlatinumTwelveMonths) + '</strike> $' + addCommas(budgetPlatinumTwelveMonths * 0.9));
      $('#12-months-gold span').html('<strike>$' + addCommas(budgetGoldTwelveMonths) + '</strike> $' + addCommas(budgetGoldTwelveMonths * 0.9));
      $('#12-months-silver span').html('<strike>$' + addCommas(budgetSilverTwelveMonths) + '</strike> $' + addCommas(budgetSilverTwelveMonths * 0.9));
      $('#one-time-platinum span').html('$' + addCommas(budgetPlatinumOneTime * 0.8));
      $('#one-time-gold span').html('$' + addCommas(budgetGoldOneTime * 0.8));
      $('#one-time-silver span').html('$' + addCommas(budgetSilverOneTime * 0.8));
      $('#monthly-platinum span').html('<strike>$' + addCommas(budgetPlatinumMonthly) + '</strike> $' + addCommas(budgetPlatinumMonthly * 0.9));
      $('#monthly-gold span').html('<strike>$' + addCommas(budgetGoldMonthly) + '</strike> $' + addCommas(budgetGoldMonthly * 0.9));
      $('#monthly-silver span').html('<strike>$' + addCommas(budgetSilverMonthly) + '</strike> $' + addCommas(budgetSilverMonthly * 0.9));
      $('#performance-platinum span').html('<strike>$' + addCommas(performancePlatinum) + '</strike> $' + addCommas(performancePlatinum * 0.9));
      $('#performance-gold span').html('<strike>$' + addCommas(performanceGold) + '</strike> $' + addCommas(performanceGold * 0.9));
      $('#performance-silver span').html('<strike>$' + addCommas(performanceSilver) + '</strike> $' + addCommas(performanceSilver * 0.9));
      $('#performance-bronze span').html('<strike>$' + addCommas(performanceBronze) + '</strike> $' + addCommas(performanceBronze * 0.9));
      $('#performance-basic span').html('<strike>$' + addCommas(performanceBasic) + '</strike> $' + addCommas(performanceBasic * 0.9));
      $('#ada-price span').html('<strike>$' + addCommas(ada) + '</strike> $' + addCommas(ada * 0.9));
      $('#cms-platinum span').html('<strike>$' + addCommas(cmsPlatinum) + '</strike> $' + addCommas(cmsPlatinum * 0.9));
      $('#cms-gold span').html('<strike>$' + addCommas(cmsGold) + '</strike> $' + addCommas(cmsGold * 0.9));
      $('#cms-silver span').html('<strike>$' + addCommas(cmsSilver) + '</strike> $' + addCommas(cmsSilver * 0.9));
      $('#content-marketing-eight').html('<strike>$' + addCommas(contentMarketingEight) + '</strike> $' + addCommas(contentMarketingEight * 0.9));
      $('#content-marketing-four').html('<strike>$' + addCommas(contentMarketingFour) + '</strike> $' + addCommas(contentMarketingFour * 0.9));
      $('#content-marketing-two').html('<strike>$' + addCommas(contentMarketingTwo) + '</strike> $' + addCommas(contentMarketingTwo * 0.9));
      $('#content-marketing-one').html('<strike>$' + addCommas(contentMarketingOne) + '</strike> $' + addCommas(contentMarketingOne * 0.9));
      $('#social-media-one-x-day').html('<strike>$' + addCommas(socialMediaOneDay) + '</strike> $' + addCommas(socialMediaOneDay * 0.9));
      $('#social-media-three-x-week').html('<strike>$' + addCommas(socialMediaThreeWeek) + '</strike> $' + addCommas(socialMediaThreeWeek * 0.9));
      $('#social-media-one-x-week').html('<strike>$' + addCommas(socialMediaOneWeek) + '</strike> $' + addCommas(socialMediaOneWeek * 0.9));
      $('#yext-listing').html('<strike>$' + addCommas(yext) + '</strike> $' + addCommas(yext * 0.9) + '/mo');
      $('#live-chat').html('<strike>$' + addCommas(liveChat) + '</strike> $' + addCommas(liveChat * 0.9) + '/mo');
      $('#copywriting span').html('<strike>$' + addCommas(copywriting) + '</strike> $' + addCommas(copywriting * 0.9));
      $('#photography-ten span').html('<strike>$' + addCommas(photographyTen) + '</strike> $' + addCommas(photographyTen * 0.9));
      $('#photography-twenty span').html('<strike>$' + addCommas(photographyTwenty) + '</strike> $' + addCommas(photographyTwenty * 0.9));
      $('#photography-thirty span').html('<strike>$' + addCommas(photographyThirty) + '</strike> $' + addCommas(photographyThirty * 0.9));
      $('#translations-customer span').html('<strike>$' + addCommas(translationsCustomer) + '</strike> $' + addCommas(translationsCustomer * 0.9));
      $('#translations-google span').html('<strike>$' + addCommas(translationsGoogle) + '</strike> $' + addCommas(translationsGoogle * 0.9));
    } else if ($('#discount-fifteen').is(':checked')) {
      $('#12-months-platinum span').html('<strike>$' + addCommas(budgetPlatinumTwelveMonths) + '</strike> $' + addCommas(budgetPlatinumTwelveMonths * 0.85));
      $('#12-months-gold span').html('<strike>$' + addCommas(budgetGoldTwelveMonths) + '</strike> $' + addCommas(budgetGoldTwelveMonths * 0.85));
      $('#12-months-silver span').html('<strike>$' + addCommas(budgetSilverTwelveMonths) + '</strike> $' + addCommas(budgetSilverTwelveMonths * 0.85));
      $('#one-time-platinum span').html('$' + addCommas(budgetPlatinumOneTime * 0.75));
      $('#one-time-gold span').html('$' + addCommas(budgetGoldOneTime * 0.75));
      $('#one-time-silver span').html('$' + addCommas(budgetSilverOneTime * 0.75));
      $('#monthly-platinum span').html('<strike>$' + addCommas(budgetPlatinumMonthly) + '</strike> $' + addCommas(budgetPlatinumMonthly * 0.85));
      $('#monthly-gold span').html('<strike>$' + addCommas(budgetGoldMonthly) + '</strike> $' + addCommas(budgetGoldMonthly * 0.85));
      $('#monthly-silver span').html('<strike>$' + addCommas(budgetSilverMonthly) + '</strike> $' + addCommas(budgetSilverMonthly * 0.85));
      $('#performance-platinum span').html('<strike>$' + addCommas(performancePlatinum) + '</strike> $' + addCommas(performancePlatinum * 0.85));
      $('#performance-gold span').html('<strike>$' + addCommas(performanceGold) + '</strike> $' + addCommas(performanceGold * 0.85));
      $('#performance-silver span').html('<strike>$' + addCommas(performanceSilver) + '</strike> $' + addCommas(performanceSilver * 0.85));
      $('#performance-bronze span').html('<strike>$' + addCommas(performanceBronze) + '</strike> $' + addCommas(performanceBronze * 0.85));
      $('#performance-basic span').html('<strike>$' + addCommas(performanceBasic) + '</strike> $' + addCommas(performanceBasic * 0.85));
      $('#ada-price span').html('<strike>$' + addCommas(ada) + '</strike> $' + addCommas(ada * 0.85));
      $('#cms-platinum span').html('<strike>$' + addCommas(cmsPlatinum) + '</strike> $' + addCommas(cmsPlatinum * 0.85));
      $('#cms-gold span').html('<strike>$' + addCommas(cmsGold) + '</strike> $' + addCommas(cmsGold * 0.85));
      $('#cms-silver span').html('<strike>$' + addCommas(cmsSilver) + '</strike> $' + addCommas(cmsSilver * 0.85));
      $('#content-marketing-eight').html('<strike>$' + addCommas(contentMarketingEight) + '</strike> $' + addCommas(contentMarketingEight * 0.85));
      $('#content-marketing-four').html('<strike>$' + addCommas(contentMarketingFour) + '</strike> $' + addCommas(contentMarketingFour * 0.85));
      $('#content-marketing-two').html('<strike>$' + addCommas(contentMarketingTwo) + '</strike> $' + addCommas(contentMarketingTwo * 0.85));
      $('#content-marketing-one').html('<strike>$' + addCommas(contentMarketingOne) + '</strike> $' + addCommas(contentMarketingOne * 0.85));
      $('#social-media-one-x-day').html('<strike>$' + addCommas(socialMediaOneDay) + '</strike> $' + addCommas(socialMediaOneDay * 0.85));
      $('#social-media-three-x-week').html('<strike>$' + addCommas(socialMediaThreeWeek) + '</strike> $' + addCommas(socialMediaThreeWeek * 0.85));
      $('#social-media-one-x-week').html('<strike>$' + addCommas(socialMediaOneWeek) + '</strike> $' + addCommas(socialMediaOneWeek * 0.85));
      $('#yext-listing').html('<strike>$' + addCommas(yext) + '</strike> $' + addCommas(yext * 0.85) + '/mo');
      $('#live-chat').html('<strike>$' + addCommas(liveChat) + '</strike> $' + addCommas(liveChat * 0.85) + '/mo');
      $('#copywriting span').html('<strike>$' + addCommas(copywriting) + '</strike> $' + addCommas(copywriting * 0.85));
      $('#photography-ten span').html('<strike>$' + addCommas(photographyTen) + '</strike> $' + addCommas(photographyTen * 0.85));
      $('#photography-twenty span').html('<strike>$' + addCommas(photographyTwenty) + '</strike> $' + addCommas(photographyTwenty * 0.85));
      $('#photography-thirty span').html('<strike>$' + addCommas(photographyThirty) + '</strike> $' + addCommas(photographyThirty * 0.85));
      $('#translations-customer span').html('<strike>$' + addCommas(translationsCustomer) + '</strike> $' + addCommas(translationsCustomer * 0.85));
      $('#translations-google span').html('<strike>$' + addCommas(translationsGoogle) + '</strike> $' + addCommas(translationsGoogle * 0.85));
    } else if ($('#discount-twenty').is(':checked')) {
      $('#12-months-platinum span').html('<strike>$' + addCommas(budgetPlatinumTwelveMonths) + '</strike> $' + addCommas(budgetPlatinumTwelveMonths * 0.8));
      $('#12-months-gold span').html('<strike>$' + addCommas(budgetGoldTwelveMonths) + '</strike> $' + addCommas(budgetGoldTwelveMonths * 0.8));
      $('#12-months-silver span').html('<strike>$' + addCommas(budgetSilverTwelveMonths) + '</strike> $' + addCommas(budgetSilverTwelveMonths * 0.8));
      $('#one-time-platinum span').html('$' + addCommas(budgetPlatinumOneTime * 0.7));
      $('#one-time-gold span').html('$' + addCommas(budgetGoldOneTime * 0.7));
      $('#one-time-silver span').html('$' + addCommas(budgetSilverOneTime * 0.7));
      $('#monthly-platinum span').html('<strike>$' + addCommas(budgetPlatinumMonthly) + '</strike> $' + addCommas(budgetPlatinumMonthly * 0.8));
      $('#monthly-gold span').html('<strike>$' + addCommas(budgetGoldMonthly) + '</strike> $' + addCommas(budgetGoldMonthly * 0.8));
      $('#monthly-silver span').html('<strike>$' + addCommas(budgetSilverMonthly) + '</strike> $' + addCommas(budgetSilverMonthly * 0.8));
      $('#performance-platinum span').html('<strike>$' + addCommas(performancePlatinum) + '</strike> $' + addCommas(performancePlatinum * 0.8));
      $('#performance-gold span').html('<strike>$' + addCommas(performanceGold) + '</strike> $' + addCommas(performanceGold * 0.8));
      $('#performance-silver span').html('<strike>$' + addCommas(performanceSilver) + '</strike> $' + addCommas(performanceSilver * 0.8));
      $('#performance-bronze span').html('<strike>$' + addCommas(performanceBronze) + '</strike> $' + addCommas(performanceBronze * 0.8));
      $('#performance-basic span').html('<strike>$' + addCommas(performanceBasic) + '</strike> $' + addCommas(performanceBasic * 0.8));
      $('#ada-price span').html('<strike>$' + addCommas(ada) + '</strike> $' + addCommas(ada * 0.8));
      $('#cms-platinum span').html('<strike>$' + addCommas(cmsPlatinum) + '</strike> $' + addCommas(cmsPlatinum * 0.8));
      $('#cms-gold span').html('<strike>$' + addCommas(cmsGold) + '</strike> $' + addCommas(cmsGold * 0.8));
      $('#cms-silver span').html('<strike>$' + addCommas(cmsSilver) + '</strike> $' + addCommas(cmsSilver * 0.8));
      $('#content-marketing-eight').html('<strike>$' + addCommas(contentMarketingEight) + '</strike> $' + addCommas(contentMarketingEight * 0.8));
      $('#content-marketing-four').html('<strike>$' + addCommas(contentMarketingFour) + '</strike> $' + addCommas(contentMarketingFour * 0.8));
      $('#content-marketing-two').html('<strike>$' + addCommas(contentMarketingTwo) + '</strike> $' + addCommas(contentMarketingTwo * 0.8));
      $('#content-marketing-one').html('<strike>$' + addCommas(contentMarketingOne) + '</strike> $' + addCommas(contentMarketingOne * 0.8));
      $('#social-media-one-x-day').html('<strike>$' + addCommas(socialMediaOneDay) + '</strike> $' + addCommas(socialMediaOneDay * 0.8));
      $('#social-media-three-x-week').html('<strike>$' + addCommas(socialMediaThreeWeek) + '</strike> $' + addCommas(socialMediaThreeWeek * 0.8));
      $('#social-media-one-x-week').html('<strike>$' + addCommas(socialMediaOneWeek) + '</strike> $' + addCommas(socialMediaOneWeek * 0.8));
      $('#yext-listing').html('<strike>$' + addCommas(yext) + '</strike> $' + addCommas(yext * 0.8) + '/mo');
      $('#live-chat').html('<strike>$' + addCommas(liveChat) + '</strike> $' + addCommas(liveChat * 0.8) + '/mo');
      $('#copywriting span').html('<strike>$' + addCommas(copywriting) + '</strike> $' + addCommas(copywriting * 0.8));
      $('#photography-ten span').html('<strike>$' + addCommas(photographyTen) + '</strike> $' + addCommas(photographyTen * 0.8));
      $('#photography-twenty span').html('<strike>$' + addCommas(photographyTwenty) + '</strike> $' + addCommas(photographyTwenty * 0.8));
      $('#photography-thirty span').html('<strike>$' + addCommas(photographyThirty) + '</strike> $' + addCommas(photographyThirty * 0.8));
      $('#translations-customer span').html('<strike>$' + addCommas(translationsCustomer) + '</strike> $' + addCommas(translationsCustomer * 0.8));
      $('#translations-google span').html('<strike>$' + addCommas(translationsGoogle) + '</strike> $' + addCommas(translationsGoogle * 0.8));
    }

  });

  $('input[name=customer-name]').change(function() {
    var customerName = $($(this)).val();
    $('#customer-name-output').html(customerName);
  });

  $('#web-design-budget').change(function() {

    if ($('#web-design-budget').val() == 'none' || $('#web-design-terms').val() == 'none') {
      $('.order__web-design-budget').children().hide();
    } else if ($('#web-design-budget').val() == 'platinum' && $('#web-design-terms').val() == '12-months') {
      $('#12-months-platinum').show().siblings().hide();
      $('#description-platinum').show().siblings().hide();
    } else if ($('#web-design-budget').val() == 'gold' && $('#web-design-terms').val() == '12-months') {
      $('#12-months-gold').show().siblings().hide();
      $('#description-gold').show().siblings().hide();
    } else if ($('#web-design-budget').val() == 'silver' && $('#web-design-terms').val() == '12-months') {
      $('#12-months-silver').show().siblings().hide();
      $('#description-silver').show().siblings().hide();
    } else if ($('#web-design-budget').val() == 'platinum' && $('#web-design-terms').val() == 'one-time') {
      $('#one-time-platinum').show().siblings().hide();
      $('#description-platinum').show().siblings().hide();
    } else if ($('#web-design-budget').val() == 'gold' && $('#web-design-terms').val() == 'one-time') {
      $('#one-time-gold').show().siblings().hide();
      $('#description-gold').show().siblings().hide();
    } else if ($('#web-design-budget').val() == 'silver' && $('#web-design-terms').val() == 'one-time') {
      $('#one-time-silver').show().siblings().hide();
      $('#description-silver').show().siblings().hide();
    } else if ($('#web-design-budget').val() == 'platinum' && $('#web-design-terms').val() == 'monthly') {
      $('#monthly-platinum').show().siblings().hide();
      $('#description-platinum').show().siblings().hide();
    } else if ($('#web-design-budget').val() == 'gold' && $('#web-design-terms').val() == 'monthly') {
      $('#monthly-gold').show().siblings().hide();
      $('#description-gold').show().siblings().hide();
    } else if ($('#web-design-budget').val() == 'silver' && $('#web-design-terms').val() == 'monthly') {
      $('#monthly-silver').show().siblings().hide();
      $('#description-silver').show().siblings().hide();
    }

    if ($('#web-design-budget').val() == 'platinum') {
      $('#description-platinum').show().siblings().hide();
      $('#page-layout-platinum').show().siblings().hide();
      $('#content-population-platinum').show().siblings().hide();
      $('#copywriting-platinum').show().siblings().hide();
    } else if ($('#web-design-budget').val() == 'gold') {
      $('#description-gold').show().siblings().hide();
      $('#page-layout-gold').show().siblings().hide();
      $('#content-population-gold').show().siblings().hide();
      $('#copywriting-gold').show().siblings().hide();
    } else if ($('#web-design-budget').val() == 'silver') {
      $('#description-silver').show().siblings().hide();
      $('#page-layout-silver').show().siblings().hide();
      $('#content-population-silver').show().siblings().hide();
      $('#copywriting-silver').show().siblings().hide();
    }

    // Set CMS Subscription
    if ($(this).val() == 'none') {
      $('.order__cms-subscription').children().hide();
    } else if ($(this).val() == 'platinum') {
      $('#cms-platinum').show().siblings().hide();
    } else if ($(this).val() == 'gold') {
      $('#cms-gold').show().siblings().hide();
    } else if ($(this).val() == 'silver') {
      $('#cms-silver').show().siblings().hide();
    }

    calculateCost();

  });

  $('#web-design-terms').change(function() {

    if ($('#web-design-budget').val() == 'none' || $('#web-design-terms').val() == 'none') {
      $('.order__web-design-budget').children().hide();
    } else if ($('#web-design-budget').val() == 'platinum' && $('#web-design-terms').val() == '12-months') {
      $('#12-months-platinum').show().siblings().hide();
    } else if ($('#web-design-budget').val() == 'gold' && $('#web-design-terms').val() == '12-months') {
      $('#12-months-gold').show().siblings().hide();
    } else if ($('#web-design-budget').val() == 'silver' && $('#web-design-terms').val() == '12-months') {
      $('#12-months-silver').show().siblings().hide();
      // } else if ($('#web-design-budget').val() == 'corporate' && $('#web-design-terms').val() == '12-months') {
      //   $('#12-months-corporate').show().siblings().hide();
    } else if ($('#web-design-budget').val() == 'platinum' && $('#web-design-terms').val() == 'one-time') {
      $('#one-time-platinum').show().siblings().hide();
    } else if ($('#web-design-budget').val() == 'gold' && $('#web-design-terms').val() == 'one-time') {
      $('#one-time-gold').show().siblings().hide();
    } else if ($('#web-design-budget').val() == 'silver' && $('#web-design-terms').val() == 'one-time') {
      $('#one-time-silver').show().siblings().hide();
      // } else if ($('#web-design-budget').val() == 'corporate' && $('#web-design-terms').val() == 'one-time') {
      //   $('#one-time-corporate').show().siblings().hide();
    } else if ($('#web-design-budget').val() == 'platinum' && $('#web-design-terms').val() == 'monthly') {
      $('#monthly-platinum').show().siblings().hide();
    } else if ($('#web-design-budget').val() == 'gold' && $('#web-design-terms').val() == 'monthly') {
      $('#monthly-gold').show().siblings().hide();
    } else if ($('#web-design-budget').val() == 'silver' && $('#web-design-terms').val() == 'monthly') {
      $('#monthly-silver').show().siblings().hide();
      // } else if ($('#web-design-budget').val() == 'corporate' && $('#web-design-terms').val() == 'monthly') {
      //   $('#monthly-corporate').show().siblings().hide();
    }

    calculateCost();

  });

  $('#performance-optimization').change(function() {

    if ($(this).val() == 'none') {
      $('.order__performance-optimization').children().hide();
    } else if ($(this).val() == 'platinum') {
      $('#digital-strategy').show();
      $('#performance-platinum').show().siblings().hide();
      $('#strategy-platinum').show().siblings().hide();
      $('#seo-platinum').show().siblings().hide();
      $('#maintenance-platinum').show().siblings().hide();
    } else if ($(this).val() == 'gold') {
      $('#digital-strategy').show();
      $('#performance-gold').show().siblings().hide();
      $('#strategy-gold').show().siblings().hide();
      $('#seo-gold').show().siblings().hide();
      $('#maintenance-gold').show().siblings().hide();
    } else if ($(this).val() == 'silver') {
      $('#digital-strategy').show();
      $('#performance-silver').show().siblings().hide();
      $('#strategy-silver').show().siblings().hide();
      $('#seo-silver').show().siblings().hide();
      $('#maintenance-silver').show().siblings().hide();
    } else if ($(this).val() == 'bronze') {
      $('#performance-bronze').show().siblings().hide();
      $('#seo-bronze').show().siblings().hide();
      $('#maintenance-bronze').show().siblings().hide();
      $('#digital-strategy').hide();
    } else if ($(this).val() == 'basic') {
      $('#performance-basic').show().siblings().hide();
      $('#seo-basic').show().siblings().hide();
      $('#maintenance-basic').show().siblings().hide();
      $('#digital-strategy').hide();
    }

    calculateCost();

  });

  $('#content-marketing-select').change(function() {

    if ($(this).val() == 'none') {
      $('.content-marketing').children().hide();
    } else if ($(this).val() == '8') {
      $('#content-marketing-eight').show().siblings().hide();
    } else if ($(this).val() == '4') {
      $('#content-marketing-four').show().siblings().hide();
    } else if ($(this).val() == '2') {
      $('#content-marketing-two').show().siblings().hide();
    } else if ($(this).val() == '1') {
      $('#content-marketing-one').show().siblings().hide();
    }

    calculateCost();

  });

  $('#social-media-select').change(function() {

    if ($(this).val() == 'none') {
      $('.social-media').children().hide();
    } else if ($(this).val() == 'one-x-day') {
      $('#social-media-one-x-day').show().siblings().hide();
    } else if ($(this).val() == 'three-x-week') {
      $('#social-media-three-x-week').show().siblings().hide();
    } else if ($(this).val() == 'one-x-week') {
      $('#social-media-one-x-week').show().siblings().hide();
    }

    calculateCost();

  });

  $('#yext-select').change(function() {

    if ($(this).val() == 'none') {
      $('#yext-listing').hide();
    } else if ($(this).val() == '1') {
      $('#yext-listing').show();
    }

    calculateCost();

  });

  $('#live-chat-select').change(function() {

    if ($(this).val() == 'none') {
      $('#live-chat').hide();
    } else if ($(this).val() == '1') {
      $('#live-chat').show();
    }

    calculateCost();

  });

  $('#terms-annual').click(function() {
    if ($(this).is(':checked')) {
      $('#renewal-annual').show();
      $('#renewal-monthly').hide();
    }
  });

  $('#terms-monthly').click(function() {
    if ($(this).is(':checked')) {
      $('#renewal-annual').hide();
      $('#renewal-monthly').show();
    }
  });

  $('#terms-increase').change(function() {
    $('#renewal-annual .renewal-increase').text($(this).val());
    $('#renewal-monthly .renewal-increase').text($(this).val());
  });

  $('#terms-no-msa').click(function() {
    if ($(this).is(':checked')) {
      $('#msa-none').show();
      $('#msa-existing').hide();
    }
  });

  $('#terms-existing-msa').click(function() {
    if ($(this).is(':checked')) {
      $('#msa-none').hide();
      $('#msa-existing').show();
    }
  });

  function addCommas(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',');
  }

  // Calculate payment totals when dropdowns change
  function calculateCost() {

    var oneTimeTotal = [];
    var firstYearCosts = [];
    var secondYearCosts = [];

    // Clear the one-time payment
    $('#payment-one-time').html('');

    // Find each select menu && determine cost
    // For budget and terms: .push(service,cms,ada)
    if ($('#web-design-budget').val() == 'none' || $('#web-design-terms').val() == 'none') {
      $('#payment-one-time').html('');
      $('#payment-first-year').html('');
      $('#payment-second-year').html('');
      return;
    } else if ($('#web-design-budget').val() == 'platinum' && $('#web-design-terms').val() == '12-months') {
      firstYearCosts.push(budgetPlatinumTwelveMonths, cmsPlatinum, ada);
      secondYearCosts.push(cmsPlatinum, ada);
    } else if ($('#web-design-budget').val() == 'gold' && $('#web-design-terms').val() == '12-months') {
      firstYearCosts.push(budgetGoldTwelveMonths, cmsGold, ada);
      secondYearCosts.push(cmsGold, ada);
    } else if ($('#web-design-budget').val() == 'silver' && $('#web-design-terms').val() == '12-months') {
      firstYearCosts.push(budgetSilverTwelveMonths, cmsSilver, ada);
      secondYearCosts.push(cmsSilver, ada);
    } else if ($('#web-design-budget').val() == 'platinum' && $('#web-design-terms').val() == 'one-time') {
      oneTimeTotal = budgetPlatinumOneTime * 0.9;
      firstYearCosts.push(cmsPlatinum, ada);
      secondYearCosts.push(cmsPlatinum, ada);
    } else if ($('#web-design-budget').val() == 'gold' && $('#web-design-terms').val() == 'one-time') {
      oneTimeTotal = budgetGoldOneTime * 0.9;
      firstYearCosts.push(cmsGold, ada);
      secondYearCosts.push(cmsGold, ada);
    } else if ($('#web-design-budget').val() == 'silver' && $('#web-design-terms').val() == 'one-time') {
      oneTimeTotal = budgetSilverOneTime * 0.9;
      firstYearCosts.push(cmsSilver, ada);
      secondYearCosts.push(cmsSilver, ada);
    } else if ($('#web-design-budget').val() == 'platinum' && $('#web-design-terms').val() == 'monthly') {
      firstYearCosts.push(budgetPlatinumMonthly, cmsPlatinum, ada);
      secondYearCosts.push(budgetPlatinumMonthly, cmsPlatinum, ada);
    } else if ($('#web-design-budget').val() == 'gold' && $('#web-design-terms').val() == 'monthly') {
      firstYearCosts.push(budgetGoldMonthly, cmsGold, ada);
      secondYearCosts.push(budgetGoldMonthly, cmsGold, ada);
    } else if ($('#web-design-budget').val() == 'silver' && $('#web-design-terms').val() == 'monthly') {
      firstYearCosts.push(budgetSilverMonthly, cmsSilver, ada);
      secondYearCosts.push(budgetSilverMonthly, cmsSilver, ada);
    }

    if ($('#performance-optimization').val() == 'platinum') {
      firstYearCosts.push(performancePlatinum);
      secondYearCosts.push(performancePlatinum);
    } else if ($('#performance-optimization').val() == 'gold') {
      firstYearCosts.push(performanceGold);
      secondYearCosts.push(performanceGold);
    } else if ($('#performance-optimization').val() == 'silver') {
      firstYearCosts.push(performanceSilver);
      secondYearCosts.push(performanceSilver);
    } else if ($('#performance-optimization').val() == 'bronze') {
      firstYearCosts.push(performanceBronze);
      secondYearCosts.push(performanceBronze);
    } else if ($('#performance-optimization').val() == 'basic') {
      firstYearCosts.push(performanceBasic);
      secondYearCosts.push(performanceBasic);
    }

    if ($('#content-marketing-select').val() == '8') {
      firstYearCosts.push(contentMarketingEight);
      secondYearCosts.push(contentMarketingEight);
    } else if ($('#content-marketing-select').val() == '4') {
      firstYearCosts.push(contentMarketingFour);
      secondYearCosts.push(contentMarketingFour);
    } else if ($('#content-marketing-select').val() == '2') {
      firstYearCosts.push(contentMarketingTwo);
      secondYearCosts.push(contentMarketingTwo);
    } else if ($('#content-marketing-select').val() == '1') {
      firstYearCosts.push(contentMarketingOne);
      secondYearCosts.push(contentMarketingOne);
    }

    if ($('#social-media-select').val() == 'one-x-day') {
      firstYearCosts.push(socialMediaOneDay);
      secondYearCosts.push(socialMediaOneDay);
    } else if ($('#social-media-select').val() == 'three-x-week') {
      firstYearCosts.push(socialMediaThreeWeek);
      secondYearCosts.push(socialMediaThreeWeek);
    } else if ($('#social-media-select').val() == 'one-x-week') {
      firstYearCosts.push(socialMediaOneWeek);
      secondYearCosts.push(socialMediaOneWeek);
    }

    if ($('#yext-listing').val() == '1') {
      firstYearCosts.push(yext);
      secondYearCosts.push(yext);
    }

    if ($('#live-chat-select').val() == '1') {
      firstYearCosts.push(liveChat);
      secondYearCosts.push(liveChat);
    }

    // Add costs
    function add(total, num) {
      return total + num;
    }
    var firstYearTotal = firstYearCosts.reduce(add);
    var secondYearTotal = secondYearCosts.reduce(add);

    // Calculate discounts
    if ($('#discount-five').is(':checked')) {
      if ($('#web-design-budget').val() == 'platinum' && $('#web-design-terms').val() == 'one-time') {
        oneTimeTotal = budgetPlatinumOneTime * 0.85;
      } else if ($('#web-design-budget').val() == 'gold' && $('#web-design-terms').val() == 'one-time') {
        oneTimeTotal = budgetGoldOneTime * 0.85;
      } else if ($('#web-design-budget').val() == 'silver' && $('#web-design-terms').val() == 'one-time') {
        oneTimeTotal = budgetSilverOneTime * 0.85;
      }
      firstYearTotal = firstYearTotal * 0.95;
      secondYearTotal = secondYearTotal * 0.95;
    }
    if ($('#discount-ten').is(':checked')) {
      if ($('#web-design-budget').val() == 'platinum' && $('#web-design-terms').val() == 'one-time') {
        oneTimeTotal = budgetPlatinumOneTime * 0.8;
      } else if ($('#web-design-budget').val() == 'gold' && $('#web-design-terms').val() == 'one-time') {
        oneTimeTotal = budgetGoldOneTime * 0.8;
      } else if ($('#web-design-budget').val() == 'silver' && $('#web-design-terms').val() == 'one-time') {
        oneTimeTotal = budgetSilverOneTime * 0.8;
      }
      firstYearTotal = firstYearTotal * 0.9;
      secondYearTotal = secondYearTotal * 0.9;
    }
    if ($('#discount-fifteen').is(':checked')) {
      if ($('#web-design-budget').val() == 'platinum' && $('#web-design-terms').val() == 'one-time') {
        oneTimeTotal = budgetPlatinumOneTime * 0.75;
      } else if ($('#web-design-budget').val() == 'gold' && $('#web-design-terms').val() == 'one-time') {
        oneTimeTotal = budgetGoldOneTime * 0.75;
      } else if ($('#web-design-budget').val() == 'silver' && $('#web-design-terms').val() == 'one-time') {
        oneTimeTotal = budgetSilverOneTime * 0.75;
      }
      firstYearTotal = firstYearTotal * 0.85;
      secondYearTotal = secondYearTotal * 0.85;
    }
    if ($('#discount-twenty').is(':checked')) {
      if ($('#web-design-budget').val() == 'platinum' && $('#web-design-terms').val() == 'one-time') {
        oneTimeTotal = budgetPlatinumOneTime * 0.7;
      } else if ($('#web-design-budget').val() == 'gold' && $('#web-design-terms').val() == 'one-time') {
        oneTimeTotal = budgetGoldOneTime * 0.7;
      } else if ($('#web-design-budget').val() == 'silver' && $('#web-design-terms').val() == 'one-time') {
        oneTimeTotal = budgetSilverOneTime * 0.7;
      }
      firstYearTotal = firstYearTotal * 0.8;
      secondYearTotal = secondYearTotal * 0.8;
    }

    // Ouput costs
    if (oneTimeTotal != '') {
      $('#payment-one-time').html('One-time: <strong>$' + addCommas(oneTimeTotal) + '</strong>');
    }
    $('#payment-first-year').html('Month 1-12: <strong>$' + addCommas(firstYearTotal) + '</strong>');
    $('#payment-second-year').html('Month 13+: <strong>$' + addCommas(secondYearTotal) + '</strong>');

  }

});
