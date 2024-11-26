var $ = jQuery.noConflict();

jQuery(document).ready(function ($) {
  // Initialize Slick Slider
  $(".slick-slider").slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    centerMode: true,
    centerPadding: "60px",
    autoplay: true,
    autoplaySpeed: 5000,
    arrows: false,
  });

  $(".social-feed-slider").slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    centerMode: true,
    centerPadding: "60px",
    autoplay: false,
    autoplaySpeed: 5000,
    arrows: false,
  });

  $(".hero-slider").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    centerMode: false,
    autoplay: false,
    autoplaySpeed: 5000,
    arrows: true,
    prevArrow: '<button class="slick-prev custom-prev"><img src="' + admin_ajaax.prevArrow + '" alt="Previous"></button>',
    nextArrow: '<button class="slick-next custom-next"><img src="' + admin_ajaax.nextArrow + '" alt="Next"></button>',

  });

  // Update slide count
  function updateSlideCount(currentSlideIndex) {
    var $slideCountElement = $('.hero-current-slide-count');
    if ($slideCountElement.length > 0) {
      var currentSlideNumber = currentSlideIndex + 1; // Slick slider is 0-indexed
      var totalSlides = $('.hero-slider').slick('getSlick').slideCount;
      $slideCountElement.text(currentSlideNumber);
    }
  }

  // Initial slide count
  updateSlideCount(0);

  // After slide change
  $('.hero-slider').on('afterChange', function(event, slick, currentSlide){
    updateSlideCount(currentSlide);
  });

  $(".slider-with-content-readmore-less").slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    centerMode: true,
    autoplay: true,
    autoplaySpeed: 5000,
    arrows: true,
  });

  // $(".slider-with-content-readmore-less").slick({
  //   slidesToShow: 3,
  //   slidesToScroll: 1,
  //   autoplay: true,
  //   autoplaySpeed: 2000,
  // });

  // handle pricing card show more
  $(".wpb_row.pricing-card .iwithtext").each(function () {
    $(this).click(function () {
      $(this).closest(".wpb_row.pricing-card").toggleClass("close open");
      $(this).toggleClass("active");
      if ($(this).hasClass("active")) {
        $(this).find(".iwt-text").text("Read Less");
        $(this).find(".iwt-icon").css("transform", "rotate(180deg)");
      } else {
        $(this).find(".iwt-text").text("Read More");
        $(this).find(".iwt-icon").css("transform", "rotate(0deg)");
      }
    });
  });

  // Custom Gallery Slider having content and readmore functionality
  $(".slider-with-readmore-readless-btns .read-more").on(
    "click",
    function (event) {
      event.preventDefault();
      var $contentOverlay = $(this).closest(".content-overlay");
      $contentOverlay.find(".content-short").hide();
      $contentOverlay.find(".content-full").show();
    }
  );

  $(".slider-with-readmore-readless-btns .content-less").on(
    "click",
    function (event) {
      event.preventDefault();
      var $contentOverlay = $(this).closest(".content-overlay");
      $contentOverlay.find(".content-full").hide();
      $contentOverlay.find(".content-short").show();
    }
  );

  $(".slider-with-readmore-readless-btns").on(
    "click",
    ".read-more",
    function (event) {
      event.preventDefault();
      var $contentOverlay = $(this).closest(".content-overlay");
      $contentOverlay.addClass("expanded");
      $contentOverlay.find(".content-full").show();
      $contentOverlay.find(".content-short").hide();
    }
  );

  $(".slider-with-readmore-readless-btns").on(
    "click",
    ".content-less",
    function (event) {
      event.preventDefault();
      var $contentOverlay = $(this).closest(".content-overlay");
      $contentOverlay.removeClass("expanded");
      $contentOverlay.find(".content-full").hide();
      $contentOverlay.find(".content-short").show();
    }
  );

  // For the custom gallery slider having center slide very big
  $(".custom-gallery-having-center-slide-big").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    dots: false,
    centerMode: true,
    // variableWidth: true,
    autoplay: true,
    autoplaySpeed: 5000,
    infinite: true,
    focusOnSelect: true,
    cssEase: "linear",
    touchMove: true,
    prevArrow: '<button class="slick-prev"> < </button>',
    nextArrow: '<button class="slick-next"> > </button>',
  });

  // Tool tip functionality
  $('.tooltip').hover(
    function() {
        var targetId = $(this).attr('href');
        $('.' + targetId).css('display', 'block');
    },
    function() {
        var targetId = $(this).attr('href');
        $('.' + targetId).css('display', 'none');
    }
  );

  $('.tooltip').click(function(event) {
      event.preventDefault();
  });

});
