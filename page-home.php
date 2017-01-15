<?php get_header(); ?>
<section id="slick" class="animsition">

<section class="column">


<ul class="products">
	<li class="product">
		<div class="image-wrapper">
			<img src="<?php echo get_template_directory_uri(); ?>/images/grand-opening.jpg" >
			<div class="overlay-text">
				<div class="storename"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" class="logo"></div>
				<div class="header">Grand Opening</div>
				<div class="date">May. 23. 2017</div>
				
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
<!-- 				<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="25px" height="25.016px" viewBox="0 0 25 25.016" enable-background="new 0 0 25 25.016" xml:space="preserve">
				<path id="path-1" fill="#FFFFFF" d="M0,1.001V0h13v1.001H0z M5,8.998v1H4v-1H5z M6,7.998V6.999h1v0.999h1v1H7V15H6V8.998H5v-1H6z
					 M9,9.998H8v-1h1V9.998z M10,10.998H9v-1h1V10.998z M4,10.998H3v-1h1V10.998z"></path>
				</svg> -->
		    </div>
		    <div class="bg circular-anim"></div>  
		</div>
		                            
	</div>
</div>
<?php get_footer(); ?>
