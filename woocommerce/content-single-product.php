<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>

<?php
	/**
	 * woocommerce_before_single_product hook.
	 *
	 * @hooked wc_print_notices - 10
	 */
	 do_action( 'woocommerce_before_single_product' );

	 if ( post_password_required() ) {
	 	echo get_the_password_form();
	 	return;
	 }
?>
<section itemscope itemtype="<?php echo woocommerce_get_product_schema(); ?>" id="product-<?php the_ID(); ?>" <?php post_class("column animsition"); ?>>

<!-- <section class="column animsition"> -->
    <div class="page-content">
    <div class="inner">
        <div class="page-header">
			<div class="summary entry-summary">

				<?php
					/**
					 * woocommerce_single_product_summary hook.
					 *
					 * @hooked woocommerce_template_single_title - 5
					 * @hooked woocommerce_template_single_rating - 10
					 * @hooked woocommerce_template_single_price - 10
					 * @hooked woocommerce_template_single_excerpt - 20
					 * @hooked woocommerce_template_single_add_to_cart - 30
					 * @hooked woocommerce_template_single_meta - 40
					 * @hooked woocommerce_template_single_sharing - 50
					 */
					do_action( 'woocommerce_single_product_summary' );
				?>
				<article class="product-description">
						<?php the_content(); ?>
				</article>
				<p>
					<?php the_field("technical_information"); ?>
				</p>	
				<p>
					<a class="square-btn" href="#fabric" target="_blank">fabric</a><br>
					<a class="square-btn" href="#leather" target="_blank">leather</a><br>
					<a class="square-btn" href="#wood_material" target="_blank">wood material</a>
				</p>
				<?php 
					$file = get_field("price_variations");
					if($file):
				?>
				<p>
					<a class="square-btn" href="<?php echo $file[url]; ?>" target="_blank">price / variations</a>
				</p>
				<?php endif; ?>
				
			</div><!-- .summary -->

			<?php
				/**
				 * woocommerce_after_single_product_summary hook.
				 *
				 * @hooked woocommerce_output_product_data_tabs - 10
				 * @hooked woocommerce_upsell_display - 15
				 * @hooked woocommerce_output_related_products - 20
				 */
				// do_action( 'woocommerce_after_single_product_summary' );
			?>

			<meta itemprop="url" content="<?php the_permalink(); ?>" />
        </div>
        <div class="page-body">
		 	<div class="product_image">
			<?php
				/**
				 * woocommerce_before_single_product_summary hook.
				 *
				 * @hooked woocommerce_show_product_sale_flash - 10
				 * @hooked woocommerce_show_product_images - 20
				 */
				do_action( 'woocommerce_before_single_product_summary' );
			?>
			</div>
        </div>

<!-- </div> -->

	<?php
	// get categories
	$terms = wp_get_post_terms( $post->ID, 'product_cat' );
	foreach ( $terms as $term ) $cats_array[] = $term->term_id;
	$query_args = array( 'post__not_in' => array( $post->ID ), 'posts_per_page' => -1, 'no_found_rows' => 1, 'post_status' => 'publish', 'post_type' => 'product', 'tax_query' => array( 
	array(
	  'taxonomy' => 'product_cat',
	  'field' => 'id',
	  'terms' => $cats_array
	)));
	$r = new WP_Query($query_args);
		
	if ($r->have_posts()) {
	?>
	<ul class="product_list_widget">
	  <?php while ($r->have_posts()) : $r->the_post(); global $product; ?>
	    <li><a href="<?php the_permalink() ?>" title="<?php echo esc_attr(get_the_title() ? get_the_title() : get_the_ID()); ?>">
	    	<div class="inner">
		<?php if (has_post_thumbnail()) the_post_thumbnail('medium'); else echo '<img src="'. woocommerce_placeholder_img_src() .'" alt="Placeholder" width="'.$woocommerce->get_image_size('shop_thumbnail_image_width').'" height="'.$woocommerce->get_image_size('shop_thumbnail_image_height').'" />'; ?>
				<div class="overlay"><h4><?php if ( get_the_title() ) the_title(); else the_ID(); ?></h4></div>
			</div>
	    </a> <?php //echo $product->get_price_html(); ?></li>
	  <?php endwhile; ?>
	</ul>
	<?php
	// Reset the global $the_post as this query will have stomped on it
	wp_reset_query();
	}
	?>
    </div>
    </div>

	<div class="clear"></div>

	<ul>
	    <li class="footer">
	        <footer class="footer">
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



<?php do_action( 'woocommerce_after_single_product' ); ?>
