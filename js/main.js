jQuery(document).ready(function() {

  //* Animation scroll trigger
  wow = new WOW({
    mobile: false,
    live: false
  });
  wow.init();

  //* fitVids target
  $(".post").fitVids();

  //* Add toggle button
  $('.site-header__nav ul').append('<button class="menu-toggle-open"></button>');

  //* Main menu toggle function
  $('.menu-toggle-open').click(function(){
    $('.mobile-nav').addClass('open');
    $('body').css('overflow', 'hidden');
  });
  $('.menu-toggle-close').click(function(){
    $('.mobile-nav').removeClass('open');
    $('body').css('overflow', '');
  });

  //* Sub menu toggle function
  $('.sub-menu-toggle').click(function(){
    // TODO: This toggle is fucked. There is no sliding transition. I can't get it to work with jQuery or CSS.
    $(this).toggleClass('open');
    $(this).parent().next('.sub-menu').toggleClass('d-flex');
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
      600: {
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

// Adds the background image to the bottom section on the Rate Match page.
jQuery(window).on('load resize', function() {
  if( $(window).width() > 1200 ) {
    $('#advantages').css( 'background-image', background_image );
  } else {
    $('#advantages').css( 'background-image', 'none' );
  }
  if( $(window).width() < 1200 ) {
    $('#advantages-col').css( 'background-image', background_image );
  } else {
    $('#advantages-col').css( 'background-image', 'none' );
  }
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

//* Play homepage header video only after the animation slide-in has finished.
(function() {
  var e = document.getElementsByClassName('page-header__feature')[0];

  function whichTransitionEvent() {
    var t;
    var el = document.createElement('fakeelement');
    var animations = {
      'animation': 'animationend',
      'OAnimation': 'oAnimationEnd',
      'MozAnimation': 'animationend',
      'WebkitAnimation': 'webkitAnimationEnd'
    };

    for (t in animations) {
      if (el.style[t] !== undefined) {
        return animations[t];
      }
    }
  }

  var transitionEvent = whichTransitionEvent();
  transitionEvent && e.addEventListener(transitionEvent, function() {
    document.getElementById('laptop-video').play();
    document.getElementById('phone-video').play();
  });

})();
