$(window).on("load", function () {
  "use strict";
  /* ===================================
            Loading Timeout
     ====================================== */

  $(".side-menu").removeClass("hidden");
  setTimeout(function () {
    $("#loader").fadeOut("slow");
  }, 1000);
});

jQuery(function ($) {
  "use strict";  

  var windowWidth = $(window).width();

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
            Arma Sliders
         ====================================== */
  $("#arma-solutions").slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3000,
    dots: true,
    arrows: true,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1
        }
      }
    ]
  });

  $("#arma-prestations").slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3000,
    dots: true,
    arrows: true,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1
        }
      }
    ]
  });

  /* =====================================
          Counting Number Initializing
      ====================================== */  

    $('.number-scroll').each(function () {
      var number = $(this).text();
      $(this).prop('Counter',0).animate({
          Counter: $(this).text()
      }, {
          duration: 3000,
          easing: 'swing',
          step: function (now) {
              $(this).text(Math.ceil(now));
          }
      });
      setTimeout(() => {
        $(this).text(numberWithSpaces(number));
      }, 3100);
    });

/* =====================================
      page overlay slider 
  ====================================== */
  $(".main").not(".home").find(".overlay-inner").slick({
    autoplay: true,
    arrows: false,
    fade: true,
    pauseOnHover: false,
    speed: 2000
  });

  /* =====================================
      references slider 
  ====================================== */
  $(".references-slider").slick({
    autoplay: true,
    arrows: true,
    dots: false,
    pauseOnHover: false,
    slidesToShow: 6,
    slidesToScroll: 1,
    infinite: true,
    speed: 1000,
    autoplaySpeed: 1000,

    responsive: [{

      breakpoint: 1024,
      settings: {
        slidesToShow: 5
      }

    }, {

      breakpoint: 600,
      settings: {
        slidesToShow: 3
      }

    }]
  });

  /* =====================================
      WOW init 
  ====================================== */
  if ( windowWidth > 767 ) {
      new WOW().init();
  }  

  /* =====================================
      match matchHeight 
  ====================================== */
  $('.matchHeight').matchHeight(); 


/* =====================================
      match matchWidth 
  ====================================== */
  if($('.matchWidth').length) {
    var contentWidth = $('.content-bloc.matchWidth').innerWidth();
    console.log(contentWidth);
    $(".blog-title").css("width", contentWidth);    
  }

   /* =====================================
          Play content videos
      ====================================== */  

      $(".play-video").click(function(e) {
        e.preventDefault();

        let that = $(this),
            video = that.next(".contentVideo");
          
        that.remove();
        video.get(0).play();        
        video.prop("controls", true);
      });

    /* =====================================
          Arma Gallery
      ====================================== */  
      let $gallery1 = new SimpleLightbox('.gallery-1 a', {});
      let $gallery2 = new SimpleLightbox('.gallery-2 a', {});


 /* =====================================
          Smooth scrolling for inner links
      ====================================== */  

  // Select all links with hashes
  $('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .not('.value-toggle')
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


function numberWithSpaces(x) {
  return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ");
}