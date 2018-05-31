<?php get_header(); ?>
<section id="slick" class=" noloop">
<?php
$the_slug = 'shop-amsterdam';
$args = array(
  'name'        => $the_slug,
  'post_type'   => 'page',
  'post_status' => 'publish',
  'numberposts' => 1
);
$my_posts = get_posts($args);
if( $my_posts ) :
    $title = $my_posts[0]->post_title;
    $content = $my_posts[0]->post_content;
endif;
?>
<section class="column shop-amsterdam">
<ul>
    <li class="store3dview">
        <iframe width='853' height='480' src='https://my.matterport.com/show/?m=L5fsRabWPFg&help=2&hl=2&play=1&qs=1dh=0&gt=0&lang=jp' frameborder='0' allowfullscreen allow='vr'></iframe>
    </li>
<?php
$images = get_field('shop_images',$my_posts[0]->ID);

if( $images ): 
$i=0;
?>
        <?php foreach( $images as $image ): ?>
    <li <?php if($i>0) echo 'class="mobile-hide"'; ?>>
        <div class="image-wrapper">
             <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
        </div>
    </li>
        <?php $i++; endforeach; ?>
<?php endif; ?>
    <li class="mobile-only align-left shop-info-content">

        <h3><?php echo $title; ?></h3>
        <?php echo wpautop( $content ); ?>

    </li>
    <li class="contact-form">
        <div class="inner">
            <h2>Contact</h2>
            <?php echo do_shortcode( '[contact-form-7 id="111" title="Contact"]' );  ?>
        </div>
        
    </li>   
	<li class="footer">
    	<footer class="footer">
			 &COPY; Copyright PRESTIGE JAPAN INC. ALL rights reserved.
        </footer>
	</li>
</ul>
</section>


<?php
$the_slug = 'shop-tokyo';
$args = array(
  'name'        => $the_slug,
  'post_type'   => 'page',
  'post_status' => 'publish',
  'numberposts' => 1
);
$my_posts = get_posts($args);
if( $my_posts ) :
    $title = $my_posts[0]->post_title;
    $content = $my_posts[0]->post_content;
endif;
?>
<section class="column shop-tokyo">
<ul>
<?php
$images = get_field('shop_images',$my_posts[0]->ID);

if( $images ): 
$i=0;
?>
        <?php foreach( $images as $image ): ?>
    <li <?php if($i>0) echo 'class="mobile-hide"'; ?>>
        <div class="image-wrapper">
             <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
        </div>
    </li>
        <?php $i++; endforeach; ?>
<?php endif; ?>
    <li class="mobile-only align-left shop-info-content">
        <h3><?php echo $title; ?></h3>
        <?php echo $content; ?>
    </li>
    <li class="contact-form">
        <div class="inner">
            <h2>Contact</h2>
            <?php echo do_shortcode( '[contact-form-7 id="111" title="Contact"]' );  ?>
        </div>
        
    </li>   
    <li class="footer">
        <footer class="footer">
             &COPY; Copyright PRESTIGE JAPAN INC. ALL rights reserved.
        </footer>
    </li>
</ul>
</section>

</section>

<div class="shop-info-toggle mobile-hide">Shop Information</div>
<div id="shop-info" class="shop-info">
    <div class="inner">
        <img class="close" src="<?php echo get_template_directory_uri(); ?>/images/close.svg" alt="close">
        <div class="content">
            
        </div>
    </div>
</div>
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


<!-- <section id="slick" class="loop">

<?php

$args = array(
    'exclude_tree'  => array("13")
); 
$product_categories = get_terms( 'product_cat', $args );

foreach($product_categories as $cat):

?>

<section class="column">


<ul class="products">
    <?php
        $args = array( 'post_type' => 'product', 'posts_per_page' => -1, 'product_cat' => $cat->slug );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>

                <li class="product">    

                    <a href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">
						<div class="image-wrapper">
                        <?php woocommerce_show_product_sale_flash( $post, $product ); ?>

                        <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'full'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" width="300px" height="300px" />'; ?>
						</div>
                        <h3><?php the_title(); ?></h3>


                    </a>


                </li>

    <?php endwhile; ?>
    <?php wp_reset_query(); ?>
	<li class="footer">
    	<footer class="footer">
			 &COPY; Copyright PRESTIGE JAPAN INC. ALL rights reserved.
        </footer>
	</li>
</ul>

</section>

<?php endforeach; ?>


</section> -->


<?php get_footer(); ?>
