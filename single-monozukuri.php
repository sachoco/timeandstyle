<?php get_header(); ?>
<section id="monozukuri-<?php the_ID(); ?>" <?php post_class("column animsition"); ?>>

<!-- <section class="column animsition"> -->
    <div class="page-content">
    <div class="inner">
        <div class="page-header">
			<div class="summary entry-summary">

				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
			</div><!-- .summary -->
        </div>
        <div class="page-body">
		 	<div class="product_image">
				<div class="thumbnails image-list pswp-gallery  <?php echo 'columns-1' ?>"  itemscope itemtype="http://schema.org/ImageGallery">
<?php
$images = get_field('gallery');

if( $images ): ?>
        <?php foreach( $images as $image ): ?>
        	    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
			        <a href="<?php echo $image['sizes']['large']; ?>" itemprop="contentUrl" data-size="<?php echo $image['sizes']['large-width']; ?>x<?php echo $image['sizes']['large-height']; ?>">
			             <img src="<?php echo $image['sizes']['medium_large']; ?>" alt="<?php echo $image['alt']; ?>" />
			        </a>
			        <!-- <figcaption itemprop="caption description">Image caption</figcaption> -->
			    </figure>
        <?php endforeach; ?>
<?php endif; ?>
				</div>
			</div>
        </div>
    </div>
    </div>
<!-- </div> -->

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
