(function(){var i;i=images_path.url,jQuery(function(i){var t,o,n,l;return l=function(){return i(".column").height(i(window).height()),i(".column").mCustomScrollbar({axis:"y",theme:"minimal",callbacks:{onScroll:function(){return n(this)}}})},i(window).resize(l),l(),n=function(t){return t.mcs.top<0?(i("#back-to-top-slick").addClass("active"),i("#back-to-top-page").addClass("active")):(i("#back-to-top-slick").removeClass("active"),i("#back-to-top-page").removeClass("active"))},i("#slick").length&&(i("#slick").on("init",function(){return i("#slick").find(".slick-list").focus()}),i("#slick").on("beforeChange",function(){return o()}),i("#slick").on("afterChange",function(){return t()}),i("#slick").slick({infinite:!1,prevArrow:'<button type="button" class="slick-prev"><div class="collapsed-button"><div class="circle"><div class="icon left"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="15.952px" height="30.489px" viewBox="0 0 15.952 30.489" enable-background="new 0 0 15.952 30.489" xml:space="preserve"> <polyline id="line-1" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="15.565,0.324 0.699,15.19 15.565,30.057 "/> </svg></div><div class="bg circular-anim"></div></div></div></button>',nextArrow:'<button type="button" class="slick-next "><div class="collapsed-button"><div class="circle"><div class="icon right"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="15.952px" height="30.489px" viewBox="0 0 15.952 30.489" enable-background="new 0 0 15.952 30.489" xml:space="preserve"> <polyline id="line-1" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="0.543,30.034 15.409,15.168 0.543,0.301 "/> </svg></div><div class="bg circular-anim"></div></div></div></button>'}),t=function(){var t;return t=i("#slick").slick("getSlick").$slides[i("#slick").slick("slickCurrentSlide")],t.mcs.top<0?i("#back-to-top-slick").addClass("active"):i("#back-to-top-slick").removeClass("active")},o=function(){},t()),i(".burger-nav").on("click",function(){return i("#site-navigation").toggleClass("is_open"),i(".burger-nav").toggleClass("is_open")}),i(".shop-info-toggle").on("click",function(){return i(".shop-info").toggleClass("is_open")}),i(".shop-info .close").on("click",function(){return i(".shop-info").removeClass("is_open")}),i(".animsition").animsition({inClass:"fade-in",outClass:"fade-out",inDuration:1500,outDuration:800,loading:!1}),i("#back-to-top-slick").on("click",function(){var t,o;return o=i("#slick").slick("slickCurrentSlide"),t=i("#slick").slick("getSlick").$slides[o],i(t).mCustomScrollbar("scrollTo","top",{scrollInertia:1e3})}),i("#back-to-top-page").on("click",function(){return i(".column").mCustomScrollbar("scrollTo","top",{scrollInertia:1e3})}),i("#back-to-top-page").length&&i(".column").on("scroll",function(){return i(".column")[0].scrollTop>0?i("#back-to-top-page").addClass("active"):i("#back-to-top-page").removeClass("active")}),this})}).call(this);