jQuery(document).ready(function() {

  //* Add toggle button
  $('.site-header__nav ul').append('<button class="menu-toggle-open"></button>');

  //* Main menu toggle function
  $('.menu-toggle-open').click(function(){
    $('.mobile-nav').addClass('open');
  });
  $('.menu-toggle-close').click(function(){
    $('.mobile-nav').removeClass('open');
  });

  //* Sub menu toggle function
  $('.sub-menu-toggle').click(function(){
    // TODO: This toggle is fucked. There is no sliding transition. I can't get it to work with jQuery or CSS.
    $(this).toggleClass('open');
    $(this).parent().next('.sub-menu').toggleClass('d-flex');

    // TODO: This "close siblings" is completely fucked. I have no words for it.
    // others = $(this).closest('.menu-item').siblings();
    // others = $(this).closest('.menu-item');
    // others.find('.sub-menu-toggle').removeClass('open');
    // others.find('.sub-menu').removeClass('d-flex');
    // others.find('.sub-menu').slideUp('fast');
  });

  //* Clients slider on homepage
  $('.owl-carousel').owlCarousel({
    stagePadding: 32,
    loop: true,
    margin: 0,
    nav: true,
    dots: false,
    responsive: {
      0: {
        items: 1
      },
      900: {
        items: 2
      },
      1200: {
        items: 3
      },
      1440: {
        items: 4
      }
    }
  });

});

//* Header menu scroll function
jQuery(window).scroll(function() {
  var scroll = $(window).scrollTop();

  if (scroll > 200) {
    $('body').addClass('sticky-header');
  } else {
    $('body').removeClass('sticky-header');
  }

});
