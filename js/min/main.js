(function(){var o;o=images_path.url,jQuery(function(i){var n,t,s;return s=function(){return i(".column").height(i(window).height())},i(window).resize(s),s(),i("#slick").length&&(i("#slick").on("init",function(){return i("#slick").find(".slick-list").focus()}),i("#slick").on("beforeChange",function(){return t()}),i("#slick").on("afterChange",function(){return n()}),i("#slick").slick({infinite:!1,prevArrow:'<button type="button" class="slick-prev"><img src="'+o+'/arrow-left.svg" ></button>',nextArrow:'<button type="button" class="slick-next"><img src="'+o+'/arrow-right.svg" ></button>'}),n=function(){var o;return o=i("#slick").slick("getSlick").$slides[i("#slick").slick("slickCurrentSlide")],o.scrollTop>0?i("#back-to-top-slick").addClass("active"):i("#back-to-top-slick").removeClass("active"),i(o).on("scroll",function(){return o.scrollTop>0?i("#back-to-top-slick").addClass("active"):i("#back-to-top-slick").removeClass("active")})},t=function(){var o;return o=i("#slick").slick("getSlick").$slides[i("#slick").slick("slickCurrentSlide")],i(o).off("scroll")},n()),i(".burger-nav").on("click",function(){return i("#site-navigation").toggleClass("is_open"),i(".burger-nav").toggleClass("is_open")}),i(".shop-info-toggle").on("click",function(){return i(".shop-info").toggleClass("is_open")}),i(".shop-info .close").on("click",function(){return i(".shop-info").removeClass("is_open")}),i(".animsition").animsition({inClass:"fade-in",outClass:"fade-out",inDuration:1500,outDuration:800,loading:!1}),i("#back-to-top-slick").on("click",function(){var o,n;return n=i("#slick").slick("slickCurrentSlide"),o=i("#slick").slick("getSlick").$slides[n],i(o).animate({scrollTop:0},1e3)}),i("#back-to-top-page").on("click",function(){return i(".column").animate({scrollTop:0},1e3)}),i("#back-to-top-page").length&&(console.log(i(".column")[0]),i(".column").on("scroll",function(){return i(".column")[0].scrollTop>0?i("#back-to-top-page").addClass("active"):i("#back-to-top-page").removeClass("active")})),this})}).call(this);