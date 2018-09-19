img_path = images_path.url
hashtag = window.location.hash.substr(1)
target_slideitem = hashtag.split("_")[1]
hashtag = hashtag.split("_")[0]

jQuery ($) ->
	resize = ()->
		$('.column').height $(window).height()
		# $(".column").mCustomScrollbar { axis:"y", theme:"minimal", callbacks:{ onScroll: ()->
		# 	myCustomFn(this)
		# 	}}
		# roundCssTransformMatrix("shop-info")
		if $(".shop-info").length
			height = Math.min $(".shop-info .inner").outerHeight(), $(window).height()
			$(".shop-info").css "margin-left" : $(".shop-info").width()/2*-1, "margin-top" : height/2*-1

		# Math.ceil($("#shop-info").width()/2*-1)
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
			if target_slideitem
				p = $("li.product a[data-id="+target_slideitem+"]").offset().top
				$('section.slick-active').animate { scrollTop: p-100 }, 1000
					# alert(target_slideitem)

		$('#slick').on "beforeChange", ()->
			beforeSlideChangeEvent()

		$('#slick').on "afterChange", ()->
			afterSlideChangeEvent()
			
		$('#slick.loop').slick(
			infinite: true, 
			initialSlide: if hashtag && $(".column-title").length then $(".column-title li[data-cat='"+hashtag+"']").data('slideid') else 0,
			# initialSlide: Math.floor(Math.random() * $('#slick.loop .column').length),
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
		$('#slick.noloop').slick(
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
			if $(currentSlide).hasClass "shop-amsterdam"
				$(".site-branding .our-shop").removeClass "active"
				$(".site-branding .our-shop.shop-amsterdam").addClass "active"
			else if $(currentSlide).hasClass "shop-tokyo"
				$(".site-branding .our-shop").removeClass "active"
				$(".site-branding .our-shop.shop-tokyo").addClass "active"
			else if $(currentSlide).hasClass "shop-amsterdam-3dview"
				$(".site-branding .our-shop").removeClass "active"
				$(".site-branding .our-shop.shop-3d").addClass "active"
			if typeof currentSlide != 'undefined'
				# if typeof currentSlide.mcs != 'undefined'
				# 	if currentSlide.mcs.top < 0 
				# 		$("#back-to-top-slick").addClass "active"
				# 	else
				# 		$("#back-to-top-slick").removeClass "active"

				if currentSlide.scrollTop > 0 
					$("#back-to-top-slick").addClass "active"
				else
					$("#back-to-top-slick").removeClass "active"		
				$(currentSlide).on "scroll", ()->
					if currentSlide.scrollTop > 0 
						$("#back-to-top-slick").addClass "active"
					else
						$("#back-to-top-slick").removeClass "active"

			if $(".column-title").length
				$(".column-title li").removeClass "active"
				$currentCol = $($(".column-title li")[$("#slick").slick('slickCurrentSlide')])
				$currentCol.addClass "active"
				cat = $currentCol.data('cat')
				# if $.browser.webkit == false 
				if hashtag == ""
					hashtag=cat
				else
					window.location.hash=hashtag=cat



		beforeSlideChangeEvent = ()->
			$(".shop-info").removeClass 'is_open'
			currentSlide = $("#slick").slick('getSlick').$slides[$("#slick").slick('slickCurrentSlide')]
			# if $(currentSlide).hasClass "shop-amsterdam"
			# 	$(".site-branding .our-shop").removeClass "active"
			# 	$(".site-branding .our-shop.shop-tokyo").addClass "active"
			# else if $(currentSlide).hasClass "shop-tokyo"
			# 	$(".site-branding .our-shop").removeClass "active"
			# 	$(".site-branding .our-shop.shop-amsterdam").addClass "active"
			# else if $(currentSlide).hasClass "shop-amsterdam-3dview"
			# 	$(".site-branding .our-shop").removeClass "active"
			# 	$(".site-branding .our-shop.shop-amsterdam-3dview").addClass "active"

			$("#back-to-top-slick").removeClass "active"
			$(currentSlide).off "scroll"

		afterSlideChangeEvent()

	$(".burger-nav").on "click", ()->
		$("#site-navigation").toggleClass("is_open")
		$(".burger-nav").toggleClass("is_open")

	$(".shop-info-toggle").on "click", ()->
		if !$(".shop-info").hasClass 'is_open'
			currentSlideIndex = $("#slick").slick('slickCurrentSlide')
			currentSlide = $("#slick").slick('getSlick').$slides[currentSlideIndex]
			content = $(currentSlide).find(".shop-info-content")
			$(".shop-info").find(".content").html(content.html())
		height = Math.min $(".shop-info .inner").outerHeight(), $(window).height()
		$(".shop-info").css "margin-left" : $(".shop-info").width()/2*-1, "margin-top" : height/2*-1
		console.log height
		$(".shop-info").toggleClass 'is_open'


	$(".shop-info .close").on "click", ()->
		$(".shop-info").removeClass 'is_open'
	$(".animsition").animsition {inClass: 'fade-in',outClass: 'fade-out',inDuration: 1500,outDuration: 800,loading: false}

	# $(".shop-3d").on "click", ()->
	# 	if !$(".shop-info").hasClass 'is_open'
	# 		content = $(".shop3dview")
	# 		$(".shop-info").find(".content").html(content.html())
	# 	height = Math.min $(".shop-info .inner").outerHeight(), $(window).height()
	# 	$(".shop-info").css "margin-left" : $(".shop-info").width()/2*-1, "margin-top" : height/2*-1
	# 	console.log height
	# 	$(".shop-info").toggleClass 'is_open'

	$("#back-to-top-slick").on "click", ()->
		currentSlideIndex = $("#slick").slick('slickCurrentSlide')
		currentSlide = $("#slick").slick('getSlick').$slides[currentSlideIndex]
		$(currentSlide).animate { scrollTop: 0 }, 1000
		# $(currentSlide).mCustomScrollbar "scrollTo","top",{scrollInertia:1000}

	$("#back-to-top-page").on "click", ()->
		$(".column").animate { scrollTop: 0 }, 1000
		# $(".column").mCustomScrollbar "scrollTo","top",{scrollInertia:1000}

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

	$(".column-title li").on "click", ()->
		slideID = $(this).data("slideid")
		$(".column-title li").removeClass "active"
		$("#slick").slick('slickGoTo', slideID)
		$(this).addClass "active"

	$(".product-description").readmore 
		moreLink: '<a class="square-btn" href="#">more caption</a>',
		lessLink: '<a class="square-btn" href="#">less caption</a>',
		embedCSS: true,
		blockCSS: 'margin-bottom: 2em;'

	$("ul.products li.product a").on "click", (e)->
		id = $(this).data("id")
		window.location.hash=hashtag+"_"+id
		# e.preventDefault()

	$("#variable-upholster .variation-groups li").on "click", (e)->
		$(this).parents(".variation-groups").find("li").removeClass "selected"
		$(this).addClass "selected"
		upholster = $(this).data("upholster")
		upholster_category = $(this).data("upholster-category")
		upholster_title = $(this).data("upholster-title")
		$("#pa_upholster").val(upholster)
		$("#pa_upholster-category").val(upholster_category)
		$("#upholster .title").text(upholster_title)

	$("#variable-wood .variation-groups li").on "click", (e)->
		$(this).parents(".variation-groups").find("li").removeClass "selected"
		$(this).addClass "selected"
		wood = $(this).data("wood")
		wood_category = $(this).data("wood-category")
		wood_title = $(this).data("wood-title")
		$("#pa_wood").val(wood_category)
		$("#pa_wood-finishing").val(wood)
		$("#wood .title").text(wood_title)


	$().fancybox({
		selector : '.tas-select:not(.disabled)'
		src : $(this).data("src")
		opts : {"touch": false}
		afterClose: ( instance, slide )->
			$("#pa_upholster-category").trigger('change')
			$("#pa_wood").trigger('change')
	})

	# $(".tas-select[data-fancybox]").fancybox({
	# 	afterClose: ( instance, slide )->
	# 		$("#pa_upholster-category").trigger('change')
	# 		$("#pa_wood").trigger('change')				
	# });

	$('.reset_variations').on 'click', (e)->
		if $('#uphoster') or $('#wood')
			$("#upholster .title").text('Choose an option')
			$("#wood.tas-select .title").text('Choose an option')
			$(".variation-groups").find("li").removeClass "selected"
		$('.selectpicker').each (index)->
			$(this).prop("disabled", false)
		# 	if $(this).find('option').length == 2
		# 		$(this).prop("disabled", true)
		# 		if $(this).prop('selectedIndex') != 1
		# 			$(this).prop('selectedIndex', 1).trigger("change").prop("disabled", true)
			$(this).selectpicker('refresh')

	$(".variation-filter a").on "click", (e)->
		$(this).parents(".variation-filter").find("a").removeClass "active"
		$(this).addClass "active"
		val = $(this).data("filter-values")
		$(".variation-group").hide()
		for g in $(".variation-group")
			if $(g).data("filter-values") is val then $(g).show()

	$('.selectpicker').on 'loaded.bs.select', (e)->
		label = $(this).parents(".tas-variation").find("label").text()
		$(this).parent().find(".filter-option").prepend("<span>"+label+": </span>")

	# $( ".variations_form" ).on "woocommerce_update_variation_values", ()->
	# 	$('.selectpicker').each (index)->
	# 		if $(this).find('option').length == 2
	# 			$(this).prop("disabled", true)
	# 			if $(this).prop('selectedIndex') != 1
	# 				$(this).prop('selectedIndex', 1).trigger("change").prop("disabled", true)
	# 		$(this).selectpicker('refresh')

	varSelects = 'form.variations_form select'

	$(varSelects).each (index) ->
		$(this).prop( "disabled", false )
		if $(this).find('option').length == 2
			if $(this).prop('selectedIndex') != 1
				$(this).prop('selectedIndex', 1).trigger("change")
				if($(this).hasClass("selectpicker"))
					$(this).prop("disabled", true).selectpicker('refresh')
				if($(this).data('attribute_name')=='attribute_pa_wood')
					$wf_options = $("#variable-wood .variation-group[data-category-filter-values='"+$(this).val()+"'] li")
					if $wf_options.length==1
						$($wf_options[0]).trigger('click')
				# if($(this).data('attribute_name')=='attribute_pa_wood-finishing')
				# 	$("#variable-wood .variation-groups li[data-wood='"+$(this).val()+"']").trigger('click')
		else if($(this).hasClass("selectpicker"))
			$(this).selectpicker('refresh')

	$(document).on 'change', varSelects, ->
		$selectField = $(this)
		$(varSelects).each (index) ->
			$(this).prop( "disabled", false )
			if $(this).find('option').length == 2
				if $(this).prop('selectedIndex') != 1
					$(this).prop('selectedIndex', 1).trigger("change")
					if($(this).hasClass("selectpicker"))
						$(this).prop("disabled", true).selectpicker('refresh')
					if($(this).data('attribute_name')=='attribute_pa_wood')
						$wf_options = $("#variable-wood .variation-group[data-category-filter-values='"+$(this).val()+"'] li")
						if $wf_options.length==1
							$($wf_options[0]).trigger('click')
					# if($(this).data('attribute_name')=='attribute_pa_wood-finishing')
					# 	$("#variable-wood .variation-groups li[data-wood='"+$(this).val()+"']").trigger('click')
			else if($(this).hasClass("selectpicker"))
				$(this).selectpicker('refresh')

		arr = []
		$('#pa_wood option').each (index)->
			arr.push($(this).val())
		$('#variable-wood .variation-group').each (index)->
			if $.inArray($(this).data('category-filter-values'),arr) == -1
				$(this).hide()
			else
				$(this).show()
		arr = []
		$('#pa_wood-finishing option').each (index)->
			arr.push($(this).val())
		# console.info arr
		$('#variable-wood .variation-group li').each (index)->
			if $.inArray($(this).data('wood'),arr) == -1
				$(this).hide()
			else
				$(this).show()
		# arr = []
		# $('#pa_upholster-category option').each (index)->
		# 	arr.push($(this).val())
		# $('#variable-upholster .variation-group').each (index)->
		# 	if $.inArray($(this).data('category-filter-values'),arr) == -1
		# 		$(this).hide()
		# 	else
		# 		$(this).show()

	$("#pa_wood").on "change", (e)->
		if($(this).val()=="n-a")
			$("#wood.tas-select .title").text("N/A")
			$("#wood.tas-select").addClass("disabled")
		else
			$("#wood.tas-select").removeClass("disabled")

	$("#pa_upholster-category").on "change", (e)->
		if($(this).val()=="n-a")
			$("#upholster.tas-select .title").text("N/A")
			$("#upholster.tas-select").addClass("disabled")
		else
			$("#upholster.tas-select").removeClass("disabled")
		# if($(this).val()=="fabric-6700-1")
		# 	$("#upholster.tas-select .title").text("Fabric - 6700-1")
		# 	$("#upholster.tas-select").addClass("disabled")
		# else if($(this).val()=="fabric-5778")
		# 	$("#upholster.tas-select .title").text("Fabric - 5778")
		# 	$("#upholster.tas-select").addClass("disabled")

	# $("#shop-info").one "transitionend webkitTransitionEnd oTransitionEnd MSTransitionEnd", ()->
		# roundCssTransformMatrix("shop-info")


	# roundCssTransformMatrix = (element)->
	# 	el = document.getElementById(element)
	# 	mx = window.getComputedStyle(el, null)
	# 	mx = mx.getPropertyValue("-webkit-transform") || mx.getPropertyValue("-moz-transform") || mx.getPropertyValue("-ms-transform") || mx.getPropertyValue("-o-transform") || mx.getPropertyValue("transform") || false;
	# 	values = mx.replace(/ |\(|\)|matrix/g,"").split(",")
	# 	for v, i in values
	# 		if v>4 or v<-4
	# 			values[i] = Math.ceil(v)
	# 	$("#"+element).css({transform:"matrix("+values.join()+")"});

	@
