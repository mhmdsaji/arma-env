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

});
