$(window).on("load", function () {
  "use strict";

  /* ===================================
            Loading Timeout
     ====================================== */

  $(".side-menu").removeClass("hidden");
  setTimeout(function () {
    $("#loader").fadeOut(700);
  }, 1000);
});

jQuery(function ($) {
  "use strict";

  /* ===================================
        Side Menu
    ====================================== */

  if ($(".side-menu-toggle").length) {
    $(".side-menu-toggle").on("click", function () {
      $(".pushwrap").toggleClass("active");
      $(".side-menu").addClass("side-menu-active"),
        $("#close_side_menu").fadeIn(700);
    }),
      $("#close_side_menu").on("click", function () {
        $(".side-menu").removeClass("side-menu-active"),
          $(this).fadeOut(200),
          $(".menu-children").slideUp(),
          $(".pushwrap").removeClass("active");
      }),
      $(".side-nav-menu .navbar-nav a.nav-link").on("click", function () {
        $(".side-menu").removeClass("side-menu-active"),
          $("#close_side_menu").fadeOut(200),
          $(".menu-children").slideUp(),
          $(".pushwrap").removeClass("active");
      }),
      $(".side-nav-menu .navbar-nav button.nav-link").on("click", function () {
        $(".menu-children").slideUp();
        $(this)
          .next(".menu-children")
          .slideDown();
      }),
      $("#btn_sideNavClose").on("click", function () {
        $(".side-menu").removeClass("side-menu-active"),
          $(".menu-children").slideUp(),
          $("#close_side_menu").fadeOut(200),
          $(".pushwrap").removeClass("active");
      });
  }

  /* =====================================
         Side modal close
      ====================================== */
  $(".content-area").on("click", function (event) {
    var $target = $(event.target);
    if (!$target.hasClass("side-menu-toggle")) {
      $(".side-menu").removeClass("side-menu-active");
      // $(this).fadeOut(200);
      $(".pushwrap").removeClass("active");
    }
  });
  /* =====================================
            header appear
         ====================================== */
  $(window).on("scroll", function () {
    if ($(this).scrollTop() > 260) {
      // Set position from top to add class
      $(".upper-nav").addClass("header-appear");
    } else {
      $(".upper-nav").removeClass("header-appear");
    }
  });

  /* =====================================
            Footer news
         ====================================== */
  $("#arma-news").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    vertical: true
  });

  /* =====================================
          Counting Number Initializing
      ====================================== */  

  if($(".stats_section").length) {
    $('.number-scroll').each(function () {
      $(this).prop('Counter',0).animate({
          Counter: $(this).text()
      }, {
          duration: 1000,
          easing: 'swing',
          step: function (now) {
              $(this).text(Math.ceil(now));
          }
      });
    });
  }

/* =====================================
      page overlay slider 
  ====================================== */
  $(".overlay-inner").slick({
    autoplay: true,
    arrows: false,
    fade: true,
    pauseOnHover: false,
    speed: 2000
  });

  /* =====================================
      WOW init 
  ====================================== */
  new WOW().init();

/* =====================================
          Smooth scrolling for inner links
      ====================================== */  

  // Select all links with hashes
  $('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });

});

