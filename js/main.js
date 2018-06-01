(function() {
  var hashtag, img_path, target_slideitem;

  img_path = images_path.url;

  hashtag = window.location.hash.substr(1);

  target_slideitem = hashtag.split("_")[1];

  hashtag = hashtag.split("_")[0];

  jQuery(function($) {
    var afterSlideChangeEvent, beforeSlideChangeEvent, myCustomFn, resize;
    resize = function() {
      var height;
      $('.column').height($(window).height());
      if ($(".shop-info").length) {
        height = Math.min($(".shop-info .inner").outerHeight(), $(window).height());
        return $(".shop-info").css({
          "margin-left": $(".shop-info").width() / 2 * -1,
          "margin-top": height / 2 * -1
        });
      }
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
        var p;
        $('#slick').find('.slick-list').focus();
        if (target_slideitem) {
          p = $("li.product a[data-id=" + target_slideitem + "]").offset().top;
          return $('section.slick-active').animate({
            scrollTop: p - 100
          }, 1000);
        }
      });
      $('#slick').on("beforeChange", function() {
        return beforeSlideChangeEvent();
      });
      $('#slick').on("afterChange", function() {
        return afterSlideChangeEvent();
      });
      $('#slick.loop').slick({
        infinite: true,
        initialSlide: hashtag && $(".column-title").length ? $(".column-title li[data-cat='" + hashtag + "']").data('slideid') : 0,
        prevArrow: '<button type="button" class="slick-prev"><div class="collapsed-button"><div class="circle"><div class="icon left"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="15.952px" height="30.489px" viewBox="0 0 15.952 30.489" enable-background="new 0 0 15.952 30.489" xml:space="preserve"> <polyline id="line-1" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="15.565,0.324 0.699,15.19 15.565,30.057 "/> </svg></div><div class="bg circular-anim"></div></div></div></button>',
        nextArrow: '<button type="button" class="slick-next "><div class="collapsed-button"><div class="circle"><div class="icon right"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="15.952px" height="30.489px" viewBox="0 0 15.952 30.489" enable-background="new 0 0 15.952 30.489" xml:space="preserve"> <polyline id="line-1" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="0.543,30.034 15.409,15.168 0.543,0.301 "/> </svg></div><div class="bg circular-anim"></div></div></div></button>'
      });
      $('#slick.noloop').slick({
        infinite: false,
        prevArrow: '<button type="button" class="slick-prev"><div class="collapsed-button"><div class="circle"><div class="icon left"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="15.952px" height="30.489px" viewBox="0 0 15.952 30.489" enable-background="new 0 0 15.952 30.489" xml:space="preserve"> <polyline id="line-1" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="15.565,0.324 0.699,15.19 15.565,30.057 "/> </svg></div><div class="bg circular-anim"></div></div></div></button>',
        nextArrow: '<button type="button" class="slick-next "><div class="collapsed-button"><div class="circle"><div class="icon right"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="15.952px" height="30.489px" viewBox="0 0 15.952 30.489" enable-background="new 0 0 15.952 30.489" xml:space="preserve"> <polyline id="line-1" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="0.543,30.034 15.409,15.168 0.543,0.301 "/> </svg></div><div class="bg circular-anim"></div></div></div></button>'
      });
      afterSlideChangeEvent = function() {
        var $currentCol, cat, currentSlide;
        currentSlide = $("#slick").slick('getSlick').$slides[$("#slick").slick('slickCurrentSlide')];
        if ($(currentSlide).hasClass("shop-amsterdam")) {
          $(".site-branding .our-shop").removeClass("active");
          $(".site-branding .our-shop.shop-amsterdam").addClass("active");
        } else if ($(currentSlide).hasClass("shop-tokyo")) {
          $(".site-branding .our-shop").removeClass("active");
          $(".site-branding .our-shop.shop-tokyo").addClass("active");
        } else if ($(currentSlide).hasClass("shop-amsterdam-3dview")) {
          $(".site-branding .our-shop").removeClass("active");
          $(".site-branding .our-shop.shop-3d").addClass("active");
        }
        if (typeof currentSlide !== 'undefined') {
          if (currentSlide.scrollTop > 0) {
            $("#back-to-top-slick").addClass("active");
          } else {
            $("#back-to-top-slick").removeClass("active");
          }
          $(currentSlide).on("scroll", function() {
            if (currentSlide.scrollTop > 0) {
              return $("#back-to-top-slick").addClass("active");
            } else {
              return $("#back-to-top-slick").removeClass("active");
            }
          });
        }
        if ($(".column-title").length) {
          $(".column-title li").removeClass("active");
          $currentCol = $($(".column-title li")[$("#slick").slick('slickCurrentSlide')]);
          $currentCol.addClass("active");
          cat = $currentCol.data('cat');
          if (hashtag === "") {
            return hashtag = cat;
          } else {
            return window.location.hash = hashtag = cat;
          }
        }
      };
      beforeSlideChangeEvent = function() {
        var currentSlide;
        $(".shop-info").removeClass('is_open');
        currentSlide = $("#slick").slick('getSlick').$slides[$("#slick").slick('slickCurrentSlide')];
        $("#back-to-top-slick").removeClass("active");
        return $(currentSlide).off("scroll");
      };
      afterSlideChangeEvent();
    }
    $(".burger-nav").on("click", function() {
      $("#site-navigation").toggleClass("is_open");
      return $(".burger-nav").toggleClass("is_open");
    });
    $(".shop-info-toggle").on("click", function() {
      var content, currentSlide, currentSlideIndex, height;
      if (!$(".shop-info").hasClass('is_open')) {
        currentSlideIndex = $("#slick").slick('slickCurrentSlide');
        currentSlide = $("#slick").slick('getSlick').$slides[currentSlideIndex];
        content = $(currentSlide).find(".shop-info-content");
        $(".shop-info").find(".content").html(content.html());
      }
      height = Math.min($(".shop-info .inner").outerHeight(), $(window).height());
      $(".shop-info").css({
        "margin-left": $(".shop-info").width() / 2 * -1,
        "margin-top": height / 2 * -1
      });
      console.log(height);
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
    $(".column-title li").on("click", function() {
      var slideID;
      slideID = $(this).data("slideid");
      $(".column-title li").removeClass("active");
      $("#slick").slick('slickGoTo', slideID);
      return $(this).addClass("active");
    });
    $(".product-description").readmore({
      moreLink: '<a class="square-btn" href="#">more caption</a>',
      lessLink: '<a class="square-btn" href="#">less caption</a>',
      embedCSS: true,
      blockCSS: 'margin-bottom: 2em;'
    });
    $("ul.products li.product a").on("click", function(e) {
      var id;
      id = $(this).data("id");
      return window.location.hash = hashtag + "_" + id;
    });
    return this;
  });

}).call(this);
