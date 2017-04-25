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

<script>



jQuery(document).ready(function($) {

	function showSite(){
		window.location.hash = "home";
 		$("#slick, header").velocity("fadeIn", {
 			delay: 500,
			duration: 1500,
			mobileHA: false
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
		$("#intro").velocity("fadeIn", { 
			delay: 0,
	        duration: 1500, 
	        mobileHA: false
	    });
	
	    moment.tz.setDefault("Europe/Amsterdam");
	    function update() {
	      $('#clock').html(moment().format('H:mm:ss MMM. D. YYYY')+" AMSTERDAM");
	    }

	    setInterval(update, 200);

		$('#intro').on("click", function(){
		    showTitle();
		});

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
<?php endif; ?>
    <?php // all js scripts are loaded in library/bones.php ?>
    <?php wp_footer(); ?>

  </body>

</html>

