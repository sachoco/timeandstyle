<?php get_header(); ?>

<section class="column animsition">
    <div class="page-content">
    <div class="inner">
<?php
$the_slug = 'philosophy';
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

        <div class="page-header"><h2><?php echo $title; ?></h2></div>
        <div class="page-body w700">
        <?php echo wpautop($content); ?>
        </div>
    </div>
    </div>
</div>
<div class="clear"></div>
<ul>
    <li class="footer">
        <footer class="footer">
            <?php wp_nav_menu( array( 'menu' => 'Footer Menu') ); ?>
             &COPY; Copyright PRESTIGE JAPAN INC. ALL rights reserved.
        </footer>
    </li>    
</ul>

</section>
<div class="collapsed-button-container">
    <div id="back-to-top-page" class="collapsed-button back-to-top fixed" role="button">
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
