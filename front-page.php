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
<!--     <li class="contact-form">
        <div class="inner">
            <h2>Contact</h2>
            <?php echo do_shortcode( '[contact-form-7 id="111" title="Contact"]' );  ?>
        </div>
        
    </li>  -->  
	<li class="footer">
    	<footer class="footer">
            <?php wp_nav_menu( array( 'menu' => 'Footer Menu') ); ?>
			 &COPY; Copyright PRESTIGE JAPAN INC. ALL rights reserved.
        </footer>
	</li>
</ul>
</section>

<section class="column shop-amsterdam-3dview">
<ul>
    <li class="shop3dview">
        <iframe width='853' height='480' src='https://my.matterport.com/show/?m=L5fsRabWPFg&help=2&hl=2&play=1&qs=1dh=0&gt=0&lang=en' frameborder='0' allowfullscreen allow='vr'></iframe>
    </li>
<!--     <li class="contact-form">
        <div class="inner">
            <h2>Contact</h2>
            <?php echo do_shortcode( '[contact-form-7 id="111" title="Contact"]' );  ?>
        </div>    
    </li>   --> 
    <li class="footer">
        <footer class="footer">
            <?php wp_nav_menu( array( 'menu' => 'Footer Menu') ); ?>
             &COPY; Copyright PRESTIGE JAPAN INC. ALL rights reserved.
        </footer>
    </li>
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
<!--     <li class="contact-form">
        <div class="inner">
            <h2>Contact</h2>
            <?php echo do_shortcode( '[contact-form-7 id="111" title="Contact"]' );  ?>
        </div>
        
    </li>   --> 
    <li class="footer">
        <footer class="footer">
            <?php wp_nav_menu( array( 'menu' => 'Footer Menu') ); ?>
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


<?php get_footer(); ?>
