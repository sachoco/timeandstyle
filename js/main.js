(function() {
  var img_path;

  img_path = images_path.url;

  jQuery(function($) {
    var afterSlideChangeEvent, beforeSlideChangeEvent, myCustomFn, resize;
    resize = function() {
      $('.column').height($(window).height());
      return $(".column").mCustomScrollbar({
        axis: "y",
        theme: "minimal",
        callbacks: {
          onScroll: function() {
            return myCustomFn(this);
          }
        }
      });
    };
    $(window).resize(resize);
    resize();
    myCustomFn = function(el) {
      if (el.mcs.top < 0) {
        $("#back-to-top-slick").addClass("active");
        return $("#back-to-top-page").addClass("active");
      } else {
        $("#back-to-top-slick").removeClass("active");
        return $("#back-to-top-page").removeClass("active");
      }
    };
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
      $('#slick.loop').slick({
        infinite: true,
        prevArrow: '<button type="button" class="slick-prev"><div class="collapsed-button"><div class="circle"><div class="icon left"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="15.952px" height="30.489px" viewBox="0 0 15.952 30.489" enable-background="new 0 0 15.952 30.489" xml:space="preserve"> <polyline id="line-1" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="15.565,0.324 0.699,15.19 15.565,30.057 "/> </svg></div><div class="bg circular-anim"></div></div></div></button>',
        nextArrow: '<button type="button" class="slick-next "><div class="collapsed-button"><div class="circle"><div class="icon right"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="15.952px" height="30.489px" viewBox="0 0 15.952 30.489" enable-background="new 0 0 15.952 30.489" xml:space="preserve"> <polyline id="line-1" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="0.543,30.034 15.409,15.168 0.543,0.301 "/> </svg></div><div class="bg circular-anim"></div></div></div></button>'
      });
      $('#slick.noloop').slick({
        infinite: false,
        prevArrow: '<button type="button" class="slick-prev"><div class="collapsed-button"><div class="circle"><div class="icon left"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="15.952px" height="30.489px" viewBox="0 0 15.952 30.489" enable-background="new 0 0 15.952 30.489" xml:space="preserve"> <polyline id="line-1" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="15.565,0.324 0.699,15.19 15.565,30.057 "/> </svg></div><div class="bg circular-anim"></div></div></div></button>',
        nextArrow: '<button type="button" class="slick-next "><div class="collapsed-button"><div class="circle"><div class="icon right"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="15.952px" height="30.489px" viewBox="0 0 15.952 30.489" enable-background="new 0 0 15.952 30.489" xml:space="preserve"> <polyline id="line-1" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="0.543,30.034 15.409,15.168 0.543,0.301 "/> </svg></div><div class="bg circular-anim"></div></div></div></button>'
      });
      afterSlideChangeEvent = function() {
        var currentSlide;
        currentSlide = $("#slick").slick('getSlick').$slides[$("#slick").slick('slickCurrentSlide')];
        if (typeof currentSlide.mcs !== 'undefined') {
          if (currentSlide.mcs.top < 0) {
            return $("#back-to-top-slick").addClass("active");
          } else {
            return $("#back-to-top-slick").removeClass("active");
          }
        }
      };
      beforeSlideChangeEvent = function() {
        var currentSlide;
        $(".shop-info").removeClass('is_open');
        currentSlide = $("#slick").slick('getSlick').$slides[$("#slick").slick('slickCurrentSlide')];
        if ($(currentSlide).hasClass("shop-amsterdam")) {
          $(".site-branding .our-shop").removeClass("active");
          return $(".site-branding .our-shop.shop-tokyo").addClass("active");
        } else if ($(currentSlide).hasClass("shop-tokyo")) {
          $(".site-branding .our-shop").removeClass("active");
          return $(".site-branding .our-shop.shop-amsterdam").addClass("active");
        }
      };
      afterSlideChangeEvent();
    }
    $(".burger-nav").on("click", function() {
      $("#site-navigation").toggleClass("is_open");
      return $(".burger-nav").toggleClass("is_open");
    });
    $(".shop-info-toggle").on("click", function() {
      var content, currentSlide, currentSlideIndex;
      if (!$(".shop-info").hasClass('is_open')) {
        currentSlideIndex = $("#slick").slick('slickCurrentSlide');
        currentSlide = $("#slick").slick('getSlick').$slides[currentSlideIndex];
        content = $(currentSlide).find(".shop-info-content");
        $(".shop-info").find(".content").html(content.html());
      }
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
      return $(currentSlide).mCustomScrollbar("scrollTo", "top", {
        scrollInertia: 1000
      });
    });
    $("#back-to-top-page").on("click", function() {
      return $(".column").mCustomScrollbar("scrollTo", "top", {
        scrollInertia: 1000
      });
    });
    if ($("#back-to-top-page").length) {
      $(".column").on("scroll", function() {
        if ($(".column")[0].scrollTop > 0) {
          return $("#back-to-top-page").addClass("active");
        } else {
          return $("#back-to-top-page").removeClass("active");
        }
      });
    }
    $(".site-branding .our-shop").on("click", function() {
      var slideID;
      slideID = $(this).data("slideid");
      $(".site-branding .our-shop").removeClass("active");
      $("#slick").slick('slickGoTo', slideID);
      return $(this).addClass("active");
    });
    return this;
  });

}).call(this);
