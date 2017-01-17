<?php get_header(); ?>
<section id="slick" class="">

<section class="column">


<ul class="products">
	<li class="product">
		<div class="image-wrapper">
			<img class="bg" src="<?php echo get_template_directory_uri(); ?>/images/grand-opening.jpg" >
			<div class="overlay-text">
				<div class="storename"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" class="logo"></div>
				<div class="header">Grand Opening</div>
				<div class="date">March. 23. 2017</div>
				
			</div>
		</div>

	</li>
    <?php
        $args = array( 'post_type' => 'product', 'posts_per_page' => -1, 'product_cat' => 'chairs' );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>

                <li class="product">    

                    <!-- <a href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>"> -->
						<div class="image-wrapper">
                        <?php woocommerce_show_product_sale_flash( $post, $product ); ?>

                        <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'full'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" width="300px" height="300px" />'; ?>
						</div>
                        <h3><?php the_title(); ?></h3>


                    <!-- </a> -->


                </li>

    <?php endwhile; ?>
    <?php wp_reset_query(); ?>
	<li class="footer">
    	<footer class="footer">
			 &COPY; Copyright PRESTIGE JAPAN INC. ALL rights reserved.
        </footer>
	</li>
</ul><!--/.products-->	

</section>
<section class="column">

<ul class="products">
    <?php
        $args = array( 'post_type' => 'product', 'posts_per_page' => -1, 'product_cat' => 'tables' );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>

                <li class="product">    

                    <!-- <a href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>"> -->
						<div class="image-wrapper">
                        <?php woocommerce_show_product_sale_flash( $post, $product ); ?>

                        <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'full'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" width="300px" height="300px" />'; ?>
						</div>
                        <h3><?php the_title(); ?></h3>


                    <!-- </a> -->


                </li>

    <?php endwhile; ?>
    <?php wp_reset_query(); ?>
	<li class="footer">
    	<footer class="footer">
			 &COPY; Copyright PRESTIGE JAPAN INC. ALL rights reserved.
        </footer>
	</li>
</ul><!--/.products-->	
</section>
<section class="column">
<ul class="products">
    <?php
        $args = array( 'post_type' => 'product', 'posts_per_page' => -1, 'product_cat' => 'light' );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>

                <li class="product">    

                    <!-- <a href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>"> -->
						<div class="image-wrapper">
                        <?php woocommerce_show_product_sale_flash( $post, $product ); ?>

                        <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'full'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" width="300px" height="300px" />'; ?>
						</div>
                        <h3><?php the_title(); ?></h3>


                    <!-- </a> -->


                </li>

    <?php endwhile; ?>
    <?php wp_reset_query(); ?>
	<li class="footer">
    	<footer class="footer">
			 &COPY; Copyright PRESTIGE JAPAN INC. ALL rights reserved.
        </footer>
	</li>
</ul><!--/.products-->	
</section>


</section>

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
			duration: 1500,
			mobileHA: false
		});
	}

	var hash = window.location.hash;
	if(hash=="#home"){
		$("header").show();
		$("#opening").remove();
		// showSite();
		$("#slick").velocity("fadeIn", {
			delay: 0,
			duration: 1500,
			mobileHA: false
		});
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
<?php get_footer(); ?>
