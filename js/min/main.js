(function(){var i;i=images_path.url,jQuery(function(i){var s,o,n,t;return t=function(){var s;return i(".column").height(i(window).height()),i(".shop-info").length?(s=Math.min(i(".shop-info .inner").outerHeight(),i(window).height()),i(".shop-info").css({"margin-left":i(".shop-info").width()/2*-1,"margin-top":s/2*-1})):void 0},i(window).resize(t),t(),n=function(s){return s.mcs.top<0?(i("#back-to-top-slick").addClass("active"),i("#back-to-top-page").addClass("active")):(i("#back-to-top-slick").removeClass("active"),i("#back-to-top-page").removeClass("active"))},i("#slick").length&&(i("#slick").on("init",function(){return i("#slick").find(".slick-list").focus()}),i("#slick").on("beforeChange",function(){return o()}),i("#slick").on("afterChange",function(){return s()}),i("#slick.loop").slick({infinite:!0,initialSlide:Math.floor(Math.random()*i("#slick.loop .column").length),prevArrow:'<button type="button" class="slick-prev"><div class="collapsed-button"><div class="circle"><div class="icon left"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="15.952px" height="30.489px" viewBox="0 0 15.952 30.489" enable-background="new 0 0 15.952 30.489" xml:space="preserve"> <polyline id="line-1" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="15.565,0.324 0.699,15.19 15.565,30.057 "/> </svg></div><div class="bg circular-anim"></div></div></div></button>',nextArrow:'<button type="button" class="slick-next "><div class="collapsed-button"><div class="circle"><div class="icon right"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="15.952px" height="30.489px" viewBox="0 0 15.952 30.489" enable-background="new 0 0 15.952 30.489" xml:space="preserve"> <polyline id="line-1" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="0.543,30.034 15.409,15.168 0.543,0.301 "/> </svg></div><div class="bg circular-anim"></div></div></div></button>'}),i("#slick.noloop").slick({infinite:!1,prevArrow:'<button type="button" class="slick-prev"><div class="collapsed-button"><div class="circle"><div class="icon left"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="15.952px" height="30.489px" viewBox="0 0 15.952 30.489" enable-background="new 0 0 15.952 30.489" xml:space="preserve"> <polyline id="line-1" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="15.565,0.324 0.699,15.19 15.565,30.057 "/> </svg></div><div class="bg circular-anim"></div></div></div></button>',nextArrow:'<button type="button" class="slick-next "><div class="collapsed-button"><div class="circle"><div class="icon right"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="15.952px" height="30.489px" viewBox="0 0 15.952 30.489" enable-background="new 0 0 15.952 30.489" xml:space="preserve"> <polyline id="line-1" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="0.543,30.034 15.409,15.168 0.543,0.301 "/> </svg></div><div class="bg circular-anim"></div></div></div></button>'}),s=function(){var s;return s=i("#slick").slick("getSlick").$slides[i("#slick").slick("slickCurrentSlide")],"undefined"!=typeof s&&"undefined"!=typeof s.mcs?s.mcs.top<0?i("#back-to-top-slick").addClass("active"):i("#back-to-top-slick").removeClass("active"):void 0},o=function(){var s;return i(".shop-info").removeClass("is_open"),s=i("#slick").slick("getSlick").$slides[i("#slick").slick("slickCurrentSlide")],i(s).hasClass("shop-amsterdam")?(i(".site-branding .our-shop").removeClass("active"),i(".site-branding .our-shop.shop-tokyo").addClass("active")):i(s).hasClass("shop-tokyo")?(i(".site-branding .our-shop").removeClass("active"),i(".site-branding .our-shop.shop-amsterdam").addClass("active")):void 0},s()),i(".burger-nav").on("click",function(){return i("#site-navigation").toggleClass("is_open"),i(".burger-nav").toggleClass("is_open")}),i(".shop-info-toggle").on("click",function(){var s,o,n,t;return i(".shop-info").hasClass("is_open")||(n=i("#slick").slick("slickCurrentSlide"),o=i("#slick").slick("getSlick").$slides[n],s=i(o).find(".shop-info-content"),i(".shop-info").find(".content").html(s.html())),t=Math.min(i(".shop-info .inner").outerHeight(),i(window).height()),i(".shop-info").css({"margin-left":i(".shop-info").width()/2*-1,"margin-top":t/2*-1}),console.log(t),i(".shop-info").toggleClass("is_open")}),i(".shop-info .close").on("click",function(){return i(".shop-info").removeClass("is_open")}),i(".animsition").animsition({inClass:"fade-in",outClass:"fade-out",inDuration:1500,outDuration:800,loading:!1}),i("#back-to-top-slick").on("click",function(){var s,o;return o=i("#slick").slick("slickCurrentSlide"),s=i("#slick").slick("getSlick").$slides[o]}),i("#back-to-top-page").on("click",function(){}),i("#back-to-top-page").length&&i(".column").on("scroll",function(){return i(".column")[0].scrollTop>0?i("#back-to-top-page").addClass("active"):i("#back-to-top-page").removeClass("active")}),i(".site-branding .our-shop").on("click",function(){var s;return s=i(this).data("slideid"),i(".site-branding .our-shop").removeClass("active"),i("#slick").slick("slickGoTo",s),i(this).addClass("active")}),i(".product-description").readmore({moreLink:'<a class="square-btn" href="#">more caption</a>',lessLink:'<a class="square-btn" href="#">less caption</a>',embedCSS:!0,blockCSS:"margin-bottom: 2em;"}),this})}).call(this);