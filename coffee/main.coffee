img_path = images_path.url

jQuery ($) ->
	resize = ()->
		$('.column').height $(window).height()
		$(".column ul").mCustomScrollbar { axis:"x", theme:"minimal"}
	$(window).resize resize
	resize()

	if $('#slick').length
		$('#slick').on "init", ()->
			$('#slick').find('.slick-list').focus()

		$('#slick').on "beforeChange", ()->
			beforeSlideChangeEvent()

		$('#slick').on "afterChange", ()->
			afterSlideChangeEvent()
			


		$('#slick').slick infinite: false, prevArrow: '<button type="button" class="slick-prev"><img src="'+img_path+'/arrow-left.svg" ></button>', nextArrow: '<button type="button" class="slick-next"><img src="'+img_path+'/arrow-right.svg" ></button>'

		afterSlideChangeEvent = ()->
			currentSlide = $("#slick").slick('getSlick').$slides[$("#slick").slick('slickCurrentSlide')]
			if currentSlide.scrollTop > 0 
				$("#back-to-top-slick").addClass "active"
			else
				$("#back-to-top-slick").removeClass "active"		
			$(currentSlide).on "scroll", ()->
				if currentSlide.scrollTop > 0 
					$("#back-to-top-slick").addClass "active"
				else
					$("#back-to-top-slick").removeClass "active"

		beforeSlideChangeEvent = ()->
			currentSlide = $("#slick").slick('getSlick').$slides[$("#slick").slick('slickCurrentSlide')]
			# $("#back-to-top-slick").removeClass "active"
			$(currentSlide).off "scroll"

		afterSlideChangeEvent()

	$(".burger-nav").on "click", ()->
		$("#site-navigation").toggleClass("is_open")
		$(".burger-nav").toggleClass("is_open")

	$(".shop-info-toggle").on "click", ()->
		$(".shop-info").toggleClass 'is_open'
	$(".shop-info .close").on "click", ()->
		$(".shop-info").removeClass 'is_open'
	$(".animsition").animsition {inClass: 'fade-in',outClass: 'fade-out',inDuration: 1500,outDuration: 800,loading: false}

	$("#back-to-top-slick").on "click", ()->
		currentSlideIndex = $("#slick").slick('slickCurrentSlide')
		currentSlide = $("#slick").slick('getSlick').$slides[currentSlideIndex]
		$(currentSlide).animate { scrollTop: 0 }, 1000

	$("#back-to-top-page").on "click", ()->
		$(".column").animate { scrollTop: 0 }, 1000

	if $("#back-to-top-page").length
		console.log $(".column")[0]
		$(".column").on "scroll", ()->
			if $(".column")[0].scrollTop > 0 
				$("#back-to-top-page").addClass "active"
			else
				$("#back-to-top-page").removeClass "active"


	

	@
