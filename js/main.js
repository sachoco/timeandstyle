(function() {
  var img_path;

  img_path = images_path.url;

  jQuery(function($) {
    var afterSlideChangeEvent, beforeSlideChangeEvent, resize;
    resize = function() {
      $('.column').height($(window).height());
      return $(".column ul").mCustomScrollbar({
        axis: "x",
        theme: "minimal"
      });
    };
    $(window).resize(resize);
    resize();
    if ($('#slick').length) {
      $('#slick').on("init", function() {
        return $('#slick').find('.slick-list').focus();
      });
      $('#slick').on("beforeChange", function() {
        return beforeSlideChangeEvent();
      });
      $('#slick').on("afterChange", function() {
        return afterSlideChangeEvent();
      });
      $('#slick').slick({
        infinite: false,
        prevArrow: '<button type="button" class="slick-prev"><img src="' + img_path + '/arrow-left.svg" ></button>',
        nextArrow: '<button type="button" class="slick-next"><img src="' + img_path + '/arrow-right.svg" ></button>'
      });
      afterSlideChangeEvent = function() {
        var currentSlide;
        currentSlide = $("#slick").slick('getSlick').$slides[$("#slick").slick('slickCurrentSlide')];
        if (currentSlide.scrollTop > 0) {
          $("#back-to-top-slick").addClass("active");
        } else {
          $("#back-to-top-slick").removeClass("active");
        }
        return $(currentSlide).on("scroll", function() {
          if (currentSlide.scrollTop > 0) {
            return $("#back-to-top-slick").addClass("active");
          } else {
            return $("#back-to-top-slick").removeClass("active");
          }
        });
      };
      beforeSlideChangeEvent = function() {
        var currentSlide;
        currentSlide = $("#slick").slick('getSlick').$slides[$("#slick").slick('slickCurrentSlide')];
        return $(currentSlide).off("scroll");
      };
      afterSlideChangeEvent();
    }
    $(".burger-nav").on("click", function() {
      $("#site-navigation").toggleClass("is_open");
      return $(".burger-nav").toggleClass("is_open");
    });
    $(".shop-info-toggle").on("click", function() {
      return $(".shop-info").toggleClass('is_open');
    });
    $(".shop-info .close").on("click", function() {
      return $(".shop-info").removeClass('is_open');
    });
    $(".animsition").animsition({
      inClass: 'fade-in',
      outClass: 'fade-out',
      inDuration: 1500,
      outDuration: 800,
      loading: false
    });
    $("#back-to-top-slick").on("click", function() {
      var currentSlide, currentSlideIndex;
      currentSlideIndex = $("#slick").slick('slickCurrentSlide');
      currentSlide = $("#slick").slick('getSlick').$slides[currentSlideIndex];
      return $(currentSlide).animate({
        scrollTop: 0
      }, 1000);
    });
    $("#back-to-top-page").on("click", function() {
      return $(".column").animate({
        scrollTop: 0
      }, 1000);
    });
    if ($("#back-to-top-page").length) {
      console.log($(".column")[0]);
      $(".column").on("scroll", function() {
        if ($(".column")[0].scrollTop > 0) {
          return $("#back-to-top-page").addClass("active");
        } else {
          return $("#back-to-top-page").removeClass("active");
        }
      });
    }
    return this;
  });

}).call(this);
