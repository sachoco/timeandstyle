<?php if(is_front_page()): ?>

<div class="collapsed-button-container">
	<div id="back-to-top-slick" class="collapsed-button back-to-top fixed" role="button">
		<div class="circle">
		    <div class="icon">
<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="31.131px" height="17.097px" viewBox="0 0 31.131 17.097" enable-background="new 0 0 31.131 17.097" xml:space="preserve">
<polyline id="line-1" fill="none" stroke="#FFFFFF" stroke-width="1" stroke-miterlimit="10" points="30.581,16.369 15.715,1.503 0.848,16.369
	"/>
</svg>
		    </div>
		    <div class="bg circular-anim"></div>
		</div>

	</div>
</div>
<div id="opening">
<section id="intro" ><div id="clock" class=""></div></section>
<section id="title-flash"><div><img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" class="logo"></div>
</section>
</div>

<div id="fake_btn"></div>
<script>




jQuery(document).ready(function($) {

	function showSite(){
		window.location.hash = "home";
 		$("#slick, header, .shop-info-toggle").velocity("fadeIn", {
 			delay: 500,
			duration: 1500,
			mobileHA: false,
			complete: function(){
						$.magnificPopup.open({
							// items: {
							// 	src: '/uploads/Kengo-Kuma-exhibition-web3.jpg'
							// },
							items: {
								src: '#my-popup', // CSS selector of an element on page that should be used as a popup
								type: 'inline'
							},
							// type: 'image',
							mainClass: 'mfp-fade',
							closeOnBgClick: false,
							closeBtnInside: false,
							showCloseBtn: false,
							enableEscapeKey: false,
							callbacks: {
						    open: function() {
						      // Will fire when this exact popup is opened
						      // this - is Magnific Popup object
									// setTimeout(function(){
									// 	window.location.replace('http://www.timeandstyle.com');
									// }, 8000);
						    },
						    close: function() {
						      // Will fire when popup is closed
						    }
						    // e.t.c.
						  }
						});
						// videojs(video_id+"_html5_api").play();
			}
		});
	}

	var hash = window.location.hash;
	if(hash=="#home"){
		// $("header").show();
		$("#opening").remove();
		showSite();
		// $("#slick").velocity("fadeIn", {
		// 	delay: 0,
		// 	duration: 1500,
		// 	mobileHA: false
		// });
	}else{
		// $("#intro").velocity("fadeIn", {
		// 	delay: 0,
	 //        duration: 1500,
	 //        mobileHA: false
	 //    });

	 //    moment.tz.setDefault("Europe/Amsterdam");
	 //    function update() {
	 //      $('#clock').html(moment().format('H:mm:ss MMM. D. YYYY')+" AMSTERDAM");
	 //    }

	 //    setInterval(update, 200);

		// $('#intro').on("click", function(){
		//     showTitle();
		// });

        showTitle();

		function showTitle(){
		    $("#intro").velocity("fadeOut", {
		        duration: 1500,
		        mobileHA: false,
		        complete: function(elements) {
		            $("#title-flash")
		                .velocity("fadeIn", {
		                    duration: 1500,
		                    mobileHA: false,
		                    complete: function(){
		                        // window.location.href = "/home";
		                    }
		                })
		             .velocity("fadeOut", {
		                 delay: 500,
		                 mobileHA: false,
		                 duration: 1500,
		                 complete: function(){
		                     showSite();
		                 }
		             });

		        }
		    });
		}

	}

});

</script>
<?php else: ?>
<script>
jQuery(document).ready(function($) {
	$.magnificPopup.open({
		// items: {
		// 	src: '/uploads/Kengo-Kuma-exhibition-web3.jpg'
		// },
		items: {
			src: '#my-popup', // CSS selector of an element on page that should be used as a popup
			type: 'inline'
		},
		// type: 'image',
		mainClass: 'mfp-fade',
		closeOnBgClick: false,
		closeBtnInside: false,
		showCloseBtn: false,
		enableEscapeKey: false,
		callbacks: {
			open: function() {
				// Will fire when this exact popup is opened
				// this - is Magnific Popup object
				// setTimeout(function(){
				// 	window.location.replace('http://www.timeandstyle.com');
				// }, 8000);
			},
			close: function() {
				// Will fire when popup is closed
			}
			// e.t.c.
		}
	});
});
</script>
<?php endif; ?>
<div id="my-popup" class="mfp-hide" >
	<section class="column">
	<ul>
	  <li>
	  <div style="background:white;padding:3em;text-align:left">
			<p>
	      Dear Customer,<br><br>
	We have created a new and improved website <a href="http://www.timeandstyle.com" target="_self">http://www.timeandstyle.com</a><br>
	All information and news about Time & Style Amsterdam is available on the new domain.<br>
	If you have any questions, please contact us at <a href="mailto:info@timeandstyle.nl">info@timeandstyle.nl</a>.<br><br>
	Thank you very much for visiting and following our previous website.<br><br>
	Please press <a href="http://www.timeandstyle.com" target="_self">http://www.timeandstyle.com</a> to visit the new website.
			</p>
		</div>
	  </li>
	  <li style="text-align:center;">
	    <a href="http://www.timeandstyle.com" target="_self"><img style="max-width:275px;" src="<?php echo get_template_directory_uri(); ?>/images/tokyo_ams.jpg" alt=""></a>
	  </li>

	</ul>

	</section>
</div>

    <?php // all js scripts are loaded in library/bones.php ?>
    <?php wp_footer(); ?>

<?php //if(!is_product()): ?>

<script>
var initPhotoSwipeFromDOM = function(gallerySelector) {

    // parse slide data (url, title, size ...) from DOM elements
    // (children of gallerySelector)
    var parseThumbnailElements = function(el) {
        var thumbElements = el.childNodes,
            numNodes = thumbElements.length,
            items = [],
            figureEl,
            linkEl,
            size,
            item;

        for(var i = 0; i < numNodes; i++) {

            figureEl = thumbElements[i]; // <figure> element

            // include only element nodes
            if(figureEl.nodeType !== 1) {
                continue;
            }

            linkEl = figureEl.children[0]; // <a> element

            size = linkEl.getAttribute('data-size').split('x');

            // create slide object
            item = {
                src: linkEl.getAttribute('href'),
                w: parseInt(size[0], 10),
                h: parseInt(size[1], 10)
            };



            if(figureEl.children.length > 1) {
                // <figcaption> content
                item.title = figureEl.children[1].innerHTML;
            }

            if(linkEl.children.length > 0) {
                // <img> thumbnail element, retrieving thumbnail url
                item.msrc = linkEl.children[0].getAttribute('src');
            }

            item.el = figureEl; // save link to element for getThumbBoundsFn
            items.push(item);
        }

        return items;
    };

    // find nearest parent element
    var closest = function closest(el, fn) {
        return el && ( fn(el) ? el : closest(el.parentNode, fn) );
    };

    // triggers when user clicks on thumbnail
    var onThumbnailsClick = function(e) {
        e = e || window.event;
        e.preventDefault ? e.preventDefault() : e.returnValue = false;

        var eTarget = e.target || e.srcElement;

        // find root element of slide
        var clickedListItem = closest(eTarget, function(el) {
            return (el.tagName && el.tagName.toUpperCase() === 'FIGURE');
        });

        if(!clickedListItem) {
            return;
        }

        // find index of clicked item by looping through all child nodes
        // alternatively, you may define index via data- attribute
        var clickedGallery = clickedListItem.parentNode,
            childNodes = clickedListItem.parentNode.childNodes,
            numChildNodes = childNodes.length,
            nodeIndex = 0,
            index;

        for (var i = 0; i < numChildNodes; i++) {
            if(childNodes[i].nodeType !== 1) {
                continue;
            }

            if(childNodes[i] === clickedListItem) {
                index = nodeIndex;
                break;
            }
            nodeIndex++;
        }



        if(index >= 0) {
            // open PhotoSwipe if valid index found
            openPhotoSwipe( index, clickedGallery );
        }
        return false;
    };

    // parse picture index and gallery index from URL (#&pid=1&gid=2)
    var photoswipeParseHash = function() {
        var hash = window.location.hash.substring(1),
        params = {};

        if(hash.length < 5) {
            return params;
        }

        var vars = hash.split('&');
        for (var i = 0; i < vars.length; i++) {
            if(!vars[i]) {
                continue;
            }
            var pair = vars[i].split('=');
            if(pair.length < 2) {
                continue;
            }
            params[pair[0]] = pair[1];
        }

        if(params.gid) {
            params.gid = parseInt(params.gid, 10);
        }

        return params;
    };

    var openPhotoSwipe = function(index, galleryElement, disableAnimation, fromURL) {
        var pswpElement = document.querySelectorAll('.pswp')[0],
            gallery,
            options,
            items;

        items = parseThumbnailElements(galleryElement);

        // define options (if needed)
        options = {

            // define gallery index (for URL)
            galleryUID: galleryElement.getAttribute('data-pswp-uid'),

            getThumbBoundsFn: function(index) {
                // See Options -> getThumbBoundsFn section of documentation for more info
                var thumbnail = items[index].el.getElementsByTagName('img')[0], // find thumbnail
                    pageYScroll = window.pageYOffset || document.documentElement.scrollTop,
                    rect = thumbnail.getBoundingClientRect();

                return {x:rect.left, y:rect.top + pageYScroll, w:rect.width};
            }

        };

        // PhotoSwipe opened from URL
        if(fromURL) {
            if(options.galleryPIDs) {
                // parse real index when custom PIDs are used
                // http://photoswipe.com/documentation/faq.html#custom-pid-in-url
                for(var j = 0; j < items.length; j++) {
                    if(items[j].pid == index) {
                        options.index = j;
                        break;
                    }
                }
            } else {
                // in URL indexes start from 1
                options.index = parseInt(index, 10) - 1;
            }
        } else {
            options.index = parseInt(index, 10);
        }

        // exit if index not found
        if( isNaN(options.index) ) {
            return;
        }

        if(disableAnimation) {
            options.showAnimationDuration = 0;
        }

        // Pass data to PhotoSwipe and initialize it
        gallery = new PhotoSwipe( pswpElement, PhotoSwipeUI_Default, items, options);
        gallery.init();
    };

    // loop through all gallery elements and bind events
    var galleryElements = document.querySelectorAll( gallerySelector );

    for(var i = 0, l = galleryElements.length; i < l; i++) {
        galleryElements[i].setAttribute('data-pswp-uid', i+1);
        galleryElements[i].onclick = onThumbnailsClick;
    }

    // Parse URL and open gallery if it contains #&pid=3&gid=1
    var hashData = photoswipeParseHash();
    if(hashData.pid && hashData.gid) {
        openPhotoSwipe( hashData.pid ,  galleryElements[ hashData.gid - 1 ], true, true );
    }
};

// execute above function
initPhotoSwipeFromDOM('.pswp-gallery');

</script>
<!-- Root element of PhotoSwipe. Must have class pswp. -->
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

    <!-- Background of PhotoSwipe.
         It's a separate element, as animating opacity is faster than rgba(). -->
    <div class="pswp__bg"></div>

    <!-- Slides wrapper with overflow:hidden. -->
    <div class="pswp__scroll-wrap">

        <!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory. -->
        <!-- don't modify these 3 pswp__item elements, data is added later on. -->
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>

        <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
        <div class="pswp__ui pswp__ui--hidden">

            <div class="pswp__top-bar">

                <!--  Controls are self-explanatory. Order can be changed. -->

                <div class="pswp__counter"></div>

                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

                <!-- <button class="pswp__button pswp__button--share" title="Share"></button> -->

                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                <!-- Preloader demo https://codepen.io/dimsemenov/pen/yyBWoR -->
                <!-- element will get class pswp__preloader--active when preloader is running -->
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                      <div class="pswp__preloader__cut">
                        <div class="pswp__preloader__donut"></div>
                      </div>
                    </div>
                </div>
            </div>

            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div>
            </div>

            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
            </button>

            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
            </button>

            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>

          </div>

        </div>

</div>
<?php //endif; ?>

  </body>

</html>
