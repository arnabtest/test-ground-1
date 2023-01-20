function menu_open() {
  jQuery(".main-menu").css({ "transform": "translateX(0)" })
}
function menu_close() {
  jQuery(".main-menu").css({ "transform": "translateX(320px)" })
}

jQuery(window).scroll(function () {
  if (jQuery(window).scrollTop() >= 100) {
    jQuery('header').addClass('fixed');
  }
  else {
    jQuery('header').removeClass('fixed');
  }
});
jQuery(document).ready(function () {
  jQuery('.banner-slider').slick({
    dots: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: false,
    autoplaySpeed: 1700,
    arrows: true,
    responsive: [

      {
        breakpoint: 992,
        settings: {
          slidesToShow: 1,
          arrows: false,
          dots: true
        }
      }
    ]
  });
  jQuery('.referenzen-slider').slick({
    dots: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: false,
    autoplaySpeed: 1700,
    arrows: true,
    responsive: [

      {
        breakpoint: 992,
        settings: {
          slidesToShow: 1,
          arrows: false,
          dots: true
        }
      }
    ]
  });
  jQuery('.geschichte-slider').slick({
    dots: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: false,
    autoplaySpeed: 1700,
    centerMode: true,
    arrows: true,
    responsive: [

      {
        breakpoint: 992,
        settings: {
          slidesToShow: 1,
          arrows: true
        }
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 1,
          arrows: false,
          dots: true,
          centerMode: false
        }
      }
    ]
  });
  jQuery('.marken-slider').slick({
    dots: false,
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: false,
    autoplaySpeed: 1700,
    arrows: true,
    responsive: [

      {
        breakpoint: 992,
        settings: {
          slidesToShow: 2,
          arrows: false,
          dots:true
        }
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 1,
          arrows: false,
          dots: true
        }
      }
    ]
  });
  jQuery('.perwandte-slider').slick({
    dots: false,
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: false,
    autoplaySpeed: 1700,
    arrows: true,
    responsive: [

      {
        breakpoint: 992,
        settings: {
          slidesToShow: 2,
          arrows: false,
          dots:true
        }
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 1,
          arrows: false,
          dots: true
        }
      }
    ]
  });
  jQuery('.alltagliche-slider').slick({
    dots: false,
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: false,
    autoplaySpeed: 1700,
    arrows: true,
    responsive: [
      {
        breakpoint: 1281,
        settings: {
          slidesToShow: 2
        }
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 2,
          arrows: false,
          dots: true
        }
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 1,
          arrows: false,
          dots: true,
        }
      }
    ]
  });
  jQuery('.inspiration-slider').slick({
    dots: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: false,
    autoplaySpeed: 1000,
    arrows: true,
    centerMode: true,
    centerPadding: '450px',
    responsive: [
      {
        breakpoint: 1599,
        settings: {
          arrows: true,
          slidesToShow: 1,
          centerPadding: '310px',
        }
      },

      {
        breakpoint: 992,
        settings: {
          arrows: false,
          dots: true,
          slidesToShow: 1,
          centerPadding: '150px',
        }
      },
      {
        breakpoint: 767,
        settings: {
          arrows: false,
          dots: true,
          slidesToShow: 1,
          centerPadding: '20px',
        }
      },
      {
        breakpoint: 575,
        settings: {
          arrows: false,
          dots: true,
          slidesToShow: 1,
          centerPadding: '20px',
        }
      }
    ]
  });
  jQuery('.js-link').on('click', function (e) {
    e.preventDefault();
    jQuery(this).parent().next('.dropdown-item-custom').slideToggle(200);
    jQuery(this).toggleClass('active');
  });
  jQuery(".js-range-slider").ionRangeSlider({
    type: "double",
    min: 0,
    max: 1000,
    from: 30,
    to: 100,
    grid: false,
    prefix: "€"
  });
  jQuery('.main-menu li a').on('click', function () {
    //alert("ssss");
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = jQuery(this.hash);
      target = target.length ? target : jQuery('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        jQuery('html, body').animate({
          scrollTop: (target.offset().top - 64)
        }, 1000);
        return false;
      }
    }
  });
  if (jQuery(window).width() < 1199) {
    jQuery("header li.menu-item-has-children").append('<div class="dropdown-icon-menu"></div>');
    jQuery(".main-menu.mobile-menu .sub-menu").hide();
    jQuery("header .sub-menu").hide();
    jQuery(document).on('click', '.dropdown-icon-menu', function () {
      jQuery(this).prev(".sub-menu").slideToggle();
      jQuery(this).toggleClass('active');
    });
  }
});