(function(){var i,t,e;t=images_path.url,i=window.location.hash.substr(1),e=i.split("_")[1],i=i.split("_")[0],jQuery(function(t){var s,o,a,l,n;return l=function(){var i;return t(".column").height(t(window).height()),t(".shop-info").length?(i=Math.min(t(".shop-info .inner").outerHeight(),t(window).height()),t(".shop-info").css({"margin-left":t(".shop-info").width()/2*-1,"margin-top":i/2*-1})):void 0},t(window).resize(l),l(),a=function(i){return i.mcs.top<0?(t("#back-to-top-slick").addClass("active"),t("#back-to-top-page").addClass("active")):(t("#back-to-top-slick").removeClass("active"),t("#back-to-top-page").removeClass("active"))},t("#slick").length&&(t("#slick").on("init",function(){var i;return t("#slick").find(".slick-list").focus(),e?(i=t("li.product a[data-id="+e+"]").offset().top,t("section.slick-active").animate({scrollTop:i-100},1e3)):void 0}),t("#slick").on("beforeChange",function(){return o()}),t("#slick").on("afterChange",function(){return s()}),t("#slick.loop").slick({infinite:!0,initialSlide:i&&t(".column-title").length?t(".column-title li[data-cat='"+i+"']").data("slideid"):0,prevArrow:'<button type="button" class="slick-prev"><div class="collapsed-button"><div class="circle"><div class="icon left"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="15.952px" height="30.489px" viewBox="0 0 15.952 30.489" enable-background="new 0 0 15.952 30.489" xml:space="preserve"> <polyline id="line-1" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="15.565,0.324 0.699,15.19 15.565,30.057 "/> </svg></div><div class="bg circular-anim"></div></div></div></button>',nextArrow:'<button type="button" class="slick-next "><div class="collapsed-button"><div class="circle"><div class="icon right"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="15.952px" height="30.489px" viewBox="0 0 15.952 30.489" enable-background="new 0 0 15.952 30.489" xml:space="preserve"> <polyline id="line-1" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="0.543,30.034 15.409,15.168 0.543,0.301 "/> </svg></div><div class="bg circular-anim"></div></div></div></button>'}),t("#slick.noloop").slick({infinite:!1,prevArrow:'<button type="button" class="slick-prev"><div class="collapsed-button"><div class="circle"><div class="icon left"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="15.952px" height="30.489px" viewBox="0 0 15.952 30.489" enable-background="new 0 0 15.952 30.489" xml:space="preserve"> <polyline id="line-1" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="15.565,0.324 0.699,15.19 15.565,30.057 "/> </svg></div><div class="bg circular-anim"></div></div></div></button>',nextArrow:'<button type="button" class="slick-next "><div class="collapsed-button"><div class="circle"><div class="icon right"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="15.952px" height="30.489px" viewBox="0 0 15.952 30.489" enable-background="new 0 0 15.952 30.489" xml:space="preserve"> <polyline id="line-1" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="0.543,30.034 15.409,15.168 0.543,0.301 "/> </svg></div><div class="bg circular-anim"></div></div></div></button>'}),s=function(){var e,s,o;return o=t("#slick").slick("getSlick").$slides[t("#slick").slick("slickCurrentSlide")],t(o).hasClass("shop-amsterdam")?(t(".site-branding .our-shop").removeClass("active"),t(".site-branding .our-shop.shop-amsterdam").addClass("active")):t(o).hasClass("shop-tokyo")?(t(".site-branding .our-shop").removeClass("active"),t(".site-branding .our-shop.shop-tokyo").addClass("active")):t(o).hasClass("shop-amsterdam-3dview")&&(t(".site-branding .our-shop").removeClass("active"),t(".site-branding .our-shop.shop-3d").addClass("active")),"undefined"!=typeof o&&(o.scrollTop>0?t("#back-to-top-slick").addClass("active"):t("#back-to-top-slick").removeClass("active"),t(o).on("scroll",function(){return o.scrollTop>0?t("#back-to-top-slick").addClass("active"):t("#back-to-top-slick").removeClass("active")})),t(".column-title").length?(t(".column-title li").removeClass("active"),e=t(t(".column-title li")[t("#slick").slick("slickCurrentSlide")]),e.addClass("active"),s=e.data("cat"),""===i?i=s:window.location.hash=i=s):void 0},o=function(){var i;return t(".shop-info").removeClass("is_open"),i=t("#slick").slick("getSlick").$slides[t("#slick").slick("slickCurrentSlide")],t("#back-to-top-slick").removeClass("active"),t(i).off("scroll")},s()),t(".burger-nav").on("click",function(){return t("#site-navigation").toggleClass("is_open"),t(".burger-nav").toggleClass("is_open")}),t(".shop-info-toggle").on("click",function(){var i,e,s,o;return t(".shop-info").hasClass("is_open")||(s=t("#slick").slick("slickCurrentSlide"),e=t("#slick").slick("getSlick").$slides[s],i=t(e).find(".shop-info-content"),t(".shop-info").find(".content").html(i.html())),o=Math.min(t(".shop-info .inner").outerHeight(),t(window).height()),t(".shop-info").css({"margin-left":t(".shop-info").width()/2*-1,"margin-top":o/2*-1}),console.log(o),t(".shop-info").toggleClass("is_open")}),t(".shop-info .close").on("click",function(){return t(".shop-info").removeClass("is_open")}),t(".animsition").animsition({inClass:"fade-in",outClass:"fade-out",inDuration:1500,outDuration:800,loading:!1}),t("#back-to-top-slick").on("click",function(){var i,e;return e=t("#slick").slick("slickCurrentSlide"),i=t("#slick").slick("getSlick").$slides[e],t(i).animate({scrollTop:0},1e3)}),t("#back-to-top-page").on("click",function(){return t(".column").animate({scrollTop:0},1e3)}),t("#back-to-top-page").length&&t(".column").on("scroll",function(){return t(".column")[0].scrollTop>0?t("#back-to-top-page").addClass("active"):t("#back-to-top-page").removeClass("active")}),t(".site-branding .our-shop").on("click",function(){var i;return i=t(this).data("slideid"),t(".site-branding .our-shop").removeClass("active"),t("#slick").slick("slickGoTo",i),t(this).addClass("active")}),t(".column-title li").on("click",function(){var i;return i=t(this).data("slideid"),t(".column-title li").removeClass("active"),t("#slick").slick("slickGoTo",i),t(this).addClass("active")}),t(".product-description").readmore({moreLink:'<a class="square-btn" href="#">more caption</a>',lessLink:'<a class="square-btn" href="#">less caption</a>',embedCSS:!0,blockCSS:"margin-bottom: 2em;"}),t("ul.products li.product a").on("click",function(e){var s;return s=t(this).data("id"),window.location.hash=i+"_"+s}),t("#variable-upholster .variation-groups li").on("click",function(i){var e,s,o;return t(this).parents(".variation-groups").find("li").removeClass("selected"),t(this).addClass("selected"),e=t(this).data("upholster"),s=t(this).data("upholster-category"),o=t(this).data("upholster-title"),t("#pa_upholster").val(e),t("#pa_upholster-category").val(s),t("#upholster .title").text(o)}),t("#variable-wood .variation-groups li").on("click",function(i){var e,s,o;return t(this).parents(".variation-groups").find("li").removeClass("selected"),t(this).addClass("selected"),e=t(this).data("wood"),s=t(this).data("wood-category"),o=t(this).data("wood-title"),t("#pa_wood").val(s),t("#pa_wood-finishing").val(e),t("#wood .title").text(o)}),t().fancybox({selector:".tas-select:not(.disabled)",src:t(this).data("src"),opts:{touch:!1},afterClose:function(i,e){return t("#pa_upholster-category").trigger("change"),t("#pa_wood").trigger("change")}}),t(".reset_variations").on("click",function(i){return(t("#uphoster")||t("#wood"))&&(t("#upholster .title").text("Choose an option"),t("#wood.tas-select .title").text("Choose an option"),t(".variation-groups").find("li").removeClass("selected")),t(".selectpicker").each(function(i){return t(this).prop("disabled",!1),t(this).selectpicker("refresh")})}),t(".variation-filter a").on("click",function(i){var e,s,o,a,l,n;for(t(this).parents(".variation-filter").find("a").removeClass("active"),t(this).addClass("active"),n=t(this).data("filter-values"),t(".variation-group").hide(),a=t(".variation-group"),l=[],s=0,o=a.length;o>s;s++)e=a[s],t(e).data("filter-values")===n?l.push(t(e).show()):l.push(void 0);return l}),t(".selectpicker").on("loaded.bs.select",function(i){var e;return e=t(this).parents(".tas-variation").find("label").text(),t(this).parent().find(".filter-option").prepend("<span>"+e+": </span>")}),n="form.variations_form select",t(n).each(function(i){var e;if(t(this).prop("disabled",!1),2===t(this).find("option").length){if(1!==t(this).prop("selectedIndex")&&(t(this).prop("selectedIndex",1).trigger("change"),t(this).hasClass("selectpicker")&&t(this).prop("disabled",!0).selectpicker("refresh"),"attribute_pa_wood"===t(this).data("attribute_name")&&(e=t("#variable-wood .variation-group[data-category-filter-values='"+t(this).val()+"'] li"),1===e.length)))return t(e[0]).trigger("click")}else if(t(this).hasClass("selectpicker"))return t(this).selectpicker("refresh")}),t(document).on("change",n,function(){var i,e;return i=t(this),t(n).each(function(i){var e;if(t(this).prop("disabled",!1),2===t(this).find("option").length){if(1!==t(this).prop("selectedIndex")&&(t(this).prop("selectedIndex",1).trigger("change"),t(this).hasClass("selectpicker")&&t(this).prop("disabled",!0).selectpicker("refresh"),"attribute_pa_wood"===t(this).data("attribute_name")&&(e=t("#variable-wood .variation-group[data-category-filter-values='"+t(this).val()+"'] li"),1===e.length)))return t(e[0]).trigger("click")}else if(t(this).hasClass("selectpicker"))return t(this).selectpicker("refresh")}),e=[],t("#pa_wood option").each(function(i){return e.push(t(this).val())}),t("#variable-wood .variation-group").each(function(i){return-1===t.inArray(t(this).data("category-filter-values"),e)?t(this).hide():t(this).show()}),e=[],t("#pa_wood-finishing option").each(function(i){return e.push(t(this).val())}),t("#variable-wood .variation-group li").each(function(i){return-1===t.inArray(t(this).data("wood"),e)?t(this).hide():t(this).show()})}),t("#pa_wood").on("change",function(i){return"n-a"===t(this).val()?(t("#wood.tas-select .title").text("N/A"),t("#wood.tas-select").addClass("disabled")):t("#wood.tas-select").removeClass("disabled")}),t("#pa_upholster-category").on("change",function(i){return"n-a"===t(this).val()?(t("#upholster.tas-select .title").text("N/A"),t("#upholster.tas-select").addClass("disabled")):t("#upholster.tas-select").removeClass("disabled")}),this})}).call(this);