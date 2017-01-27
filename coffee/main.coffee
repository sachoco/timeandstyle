img_path = images_path.url

jQuery ($) ->
	resize = ()->
		$('.column').height $(window).height()
		$(".column").mCustomScrollbar { axis:"y", theme:"minimal", callbacks:{ onScroll: ()->
			myCustomFn(this)
			}}
	$(window).resize resize
	resize()



	myCustomFn = (el)->
		if el.mcs.top < 0 
			$("#back-to-top-slick").addClass "active"
			$("#back-to-top-page").addClass "active"
		else
			$("#back-to-top-slick").removeClass "active"
			$("#back-to-top-page").removeClass "active"
		# console.log(el.mcs.top)		



	if $('#slick').length
		$('#slick').on "init", ()->
			$('#slick').find('.slick-list').focus()

		$('#slick').on "beforeChange", ()->
			beforeSlideChangeEvent()

		$('#slick').on "afterChange", ()->
			afterSlideChangeEvent()
			

		


		$('#slick').slick(
			infinite: false, 
			# prevArrow: '<button type="button" class="slick-prev"><img src="'+img_path+'/arrow-left.svg" ></button>', 
			# nextArrow: '<button type="button" class="slick-next"><img src="'+img_path+'/arrow-right.svg" ></button>'
			prevArrow: '<button type="button" class="slick-prev"><div class="collapsed-button"><div class="circle"><div class="icon left"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="15.952px" height="30.489px" viewBox="0 0 15.952 30.489" enable-background="new 0 0 15.952 30.489" xml:space="preserve">
<polyline id="line-1" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="15.565,0.324 0.699,15.19 15.565,30.057 "/>
</svg></div><div class="bg circular-anim"></div></div></div></button>', 
			nextArrow: '<button type="button" class="slick-next "><div class="collapsed-button"><div class="circle"><div class="icon right"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="15.952px" height="30.489px" viewBox="0 0 15.952 30.489" enable-background="new 0 0 15.952 30.489" xml:space="preserve">
<polyline id="line-1" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="0.543,30.034 15.409,15.168 0.543,0.301 "/>
</svg></div><div class="bg circular-anim"></div></div></div></button>'
		)
		afterSlideChangeEvent = ()->
			currentSlide = $("#slick").slick('getSlick').$slides[$("#slick").slick('slickCurrentSlide')]
			if currentSlide.mcs.top < 0 
				$("#back-to-top-slick").addClass "active"
			else
				$("#back-to-top-slick").removeClass "active"

			# if currentSlide.scrollTop > 0 
			# 	$("#back-to-top-slick").addClass "active"
			# else
			# 	$("#back-to-top-slick").removeClass "active"		
			# $(currentSlide).on "scroll", ()->
			# 	if currentSlide.scrollTop > 0 
			# 		$("#back-to-top-slick").addClass "active"
			# 	else
			# 		$("#back-to-top-slick").removeClass "active"

		beforeSlideChangeEvent = ()->
			$(".shop-info").removeClass 'is_open'
			currentSlide = $("#slick").slick('getSlick').$slides[$("#slick").slick('slickCurrentSlide')]
			if $(currentSlide).hasClass "shop-amsterdam"
				$(".site-branding .our-shop").removeClass "active"
				$(".site-branding .our-shop.shop-tokyo").addClass "active"
			else if $(currentSlide).hasClass "shop-tokyo"
				$(".site-branding .our-shop").removeClass "active"
				$(".site-branding .our-shop.shop-amsterdam").addClass "active"
			# # $("#back-to-top-slick").removeClass "active"
			# $(currentSlide).off "scroll"

		afterSlideChangeEvent()

	$(".burger-nav").on "click", ()->
		$("#site-navigation").toggleClass("is_open")
		$(".burger-nav").toggleClass("is_open")

	$(".shop-info-toggle").on "click", ()->
		if !$(".shop-info").hasClass 'is_open'
			currentSlideIndex = $("#slick").slick('slickCurrentSlide')
			currentSlide = $("#slick").slick('getSlick').$slides[currentSlideIndex]
			content = $(currentSlide).find(".shop-info-content")
			# console.log content.html()
			$(".shop-info").find(".content").html(content.html())
		$(".shop-info").toggleClass 'is_open'


	$(".shop-info .close").on "click", ()->
		$(".shop-info").removeClass 'is_open'
	$(".animsition").animsition {inClass: 'fade-in',outClass: 'fade-out',inDuration: 1500,outDuration: 800,loading: false}

	$("#back-to-top-slick").on "click", ()->
		currentSlideIndex = $("#slick").slick('slickCurrentSlide')
		currentSlide = $("#slick").slick('getSlick').$slides[currentSlideIndex]
		# $(currentSlide).animate { scrollTop: 0 }, 1000
		$(currentSlide).mCustomScrollbar "scrollTo","top",{scrollInertia:1000}

	$("#back-to-top-page").on "click", ()->
		# $(".column").animate { scrollTop: 0 }, 1000
		$(".column").mCustomScrollbar "scrollTo","top",{scrollInertia:1000}

	if $("#back-to-top-page").length
		$(".column").on "scroll", ()->
			if $(".column")[0].scrollTop > 0 
				$("#back-to-top-page").addClass "active"
			else
				$("#back-to-top-page").removeClass "active"

	$(".site-branding .our-shop").on "click", ()->
		slideID = $(this).data("slideid")
		$(".site-branding .our-shop").removeClass "active"
		$("#slick").slick('slickGoTo', slideID)
		$(this).addClass "active"


	

	@
