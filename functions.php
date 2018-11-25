<?php
	error_reporting(0);
	
	function register_my_menu() {
	  register_nav_menu('main-menu',__( 'Main Menu' ));
	  register_nav_menu('footer-menu',__( 'Footer Menu' ));
	}
	add_action( 'init', 'register_my_menu' );

// add_action( 'after_setup_theme', 'tas_setup' );

function tas_setup() {
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
}
	// if ( function_exists( 'add_image_size' ) ) {
	// 	add_image_size( 'thumbnail-crop', 152, 152, true );
	// }

	/**
	 * Enqueue scripts and styles
	 */
	function theme_scripts_and_styles() {
		// wp_register_script( 'jquery', get_stylesheet_directory_uri() . '/bower_components/jquery/dist/jquery.min.js', array(), '', 'all' );

		wp_enqueue_script( 'jquery' );
		wp_register_script( 'popper', get_stylesheet_directory_uri() . '/js/popper/popper.min.js', array('jquery'), '', true );
		wp_enqueue_script( 'popper' );
		wp_register_script( 'bootstrap', get_stylesheet_directory_uri() . '/bower_components/bootstrap/dist/js/bootstrap.min.js', array('jquery','popper'), '', true );
		wp_enqueue_script( 'bootstrap' );
		wp_register_script( 'bootstrap-select', get_stylesheet_directory_uri() . '/bower_components/bootstrap-select/dist/js/bootstrap-select.min.js', array('bootstrap'), '', true );
		wp_enqueue_script( 'bootstrap-select' );
		// wp_register_script( 'modal', get_stylesheet_directory_uri() . '/bower_components/bootstrap/js/dist/modal.js', array('bootstrap'), '', true );
		// wp_enqueue_script( 'modal' );
		wp_register_script( 'fancybox', get_stylesheet_directory_uri() . '/bower_components/fancybox/dist/jquery.fancybox.min.js', array('jquery'), '', true );
		wp_enqueue_script( 'fancybox' );
		wp_register_script( 'slick', get_stylesheet_directory_uri() . '/bower_components/slick.js/slick/slick.min.js', array('jquery'), '', true );
		wp_enqueue_script( 'slick' );
		wp_register_script( 'velocity', get_stylesheet_directory_uri() . '/js/velocity.min.js', array(), '', true );
		wp_enqueue_script( 'velocity' );
		wp_register_script( 'custom-scrollbar', get_stylesheet_directory_uri() . '/js/jquery.mCustomScrollbar.concat.min.js', array(), '', true );
		wp_enqueue_script( 'custom-scrollbar' );
		wp_register_script( 'animsition', get_stylesheet_directory_uri() . '/bower_components/animsition/dist/js/animsition.min.js', array('jquery'), '', true );
		wp_enqueue_script( 'animsition' );
		wp_register_script( 'moment', get_stylesheet_directory_uri() . '/bower_components/moment/moment.js', array('jquery'), '', true );
		wp_enqueue_script( 'moment' );
		wp_register_script( 'moment-timezone', get_stylesheet_directory_uri() . '/bower_components/moment-timezone/builds/moment-timezone-with-data.min.js', array('jquery'), '', true );
		wp_enqueue_script( 'moment-timezone' );
		wp_register_script( 'readmore', get_stylesheet_directory_uri() . '/js/readmore.min.js', array('jquery'), '', true );
		wp_enqueue_script( 'readmore' );
		// register main script
		wp_register_script( 'main-script', get_stylesheet_directory_uri() . '/js/main.js', array('jquery'), '', true );
		wp_enqueue_script( 'main-script' );
		wp_localize_script('main-script', 'images_path', array('url' => get_template_directory_uri().'/images/'));

		// wp_register_style( 'gridle', get_stylesheet_directory_uri() . '/css/grid.css', array(), '', 'all' );
		// wp_enqueue_style( 'gridle' );
		wp_register_style( 'animsition', get_stylesheet_directory_uri() . '/bower_components/animsition/dist/css/animsition.css', array(), '', 'all' );
		wp_enqueue_style( 'animsition' );




		wp_register_style( 'bootstrap', get_stylesheet_directory_uri() . '/bower_components/bootstrap/dist/css/bootstrap.min.css', array(), '', 'all' );
		wp_enqueue_style( 'bootstrap' );
		wp_register_style( 'bootstrap-select', get_stylesheet_directory_uri() . '/bower_components/bootstrap-select/dist/css/bootstrap-select.min.css', array('bootstrap'), '', 'all' );
		wp_enqueue_style( 'bootstrap-select' );

		wp_register_style( 'fancybox', get_stylesheet_directory_uri() . '/bower_components/fancybox/dist/jquery.fancybox.min.css', array(), '', 'all' );
		wp_enqueue_style( 'fancybox' );
		wp_register_style( 'slick', get_stylesheet_directory_uri() . '/bower_components/slick.js/slick/slick.css', array(), '', 'all' );
		wp_register_style( 'slick-theme', get_stylesheet_directory_uri() . '/bower_components/slick.js/slick/slick-theme.css', array(), '', 'all' );
		wp_enqueue_style( 'slick' );
		wp_enqueue_style( 'slick-theme' );
		wp_register_style( 'custom-scrollbar', get_stylesheet_directory_uri() . '/css/jquery.mCustomScrollbar.css', array(), '', 'all' );
		wp_enqueue_style( 'custom-scrollbar' );
		wp_register_style( 'webfont', get_stylesheet_directory_uri() . '/css/MyFontsWebfontsKit.css', array(), '', 'all' );
		wp_enqueue_style( 'webfont' );
		wp_register_style( 'main-css', get_stylesheet_directory_uri() . '/css/style.css', array('bootstrap-select','fancybox'), '1.2', 'all' );
		wp_enqueue_style( 'main-css' );
		// wp_register_style( 'magnific-popup', get_stylesheet_directory_uri() . '/bower_components/magnific-popup/dist/magnific-popup.css', array(), '', 'all' );
		// wp_enqueue_style( 'magnific-popup' );

		// if ( !is_product()) {
			wp_register_script( 'photoswipe', get_stylesheet_directory_uri() . '/js/photoswipe.min.js', array('jquery'), '', true );
			wp_register_script( 'photoswipe-ui', get_stylesheet_directory_uri() . '/js/photoswipe-ui-default.min.js', array('jquery'), '', true );
			wp_register_style( 'photoswipe', get_stylesheet_directory_uri() . '/css/photoswipe.css', array(), '', 'all' );
			wp_register_style( 'photoswipe-style', get_stylesheet_directory_uri() . '/css/default-skin/default-skin.css', array(), '', 'all' );
			wp_enqueue_script( 'photoswipe' );
			wp_enqueue_script( 'photoswipe-ui' );
			wp_enqueue_style( 'photoswipe' );
			wp_enqueue_style( 'photoswipe-style' );
		// }

	}

	add_action( 'wp_enqueue_scripts', 'theme_scripts_and_styles', 999 );

	// add_theme_support( 'post-thumbnails' );
	// set_post_thumbnail_size(350, 230, true);


	// add_action( 'widgets_init', 'tas_widgets_init' );
	// function tas_widgets_init() {
	//     register_sidebar( array(
	//         'name' => __( 'Main Sidebar', 'tas' ),
	//         'id' => 'main-sidebar',
	//         'description' => __( 'Widgets in this area will be shown under navigation.', 'tas' ),
	//         'before_widget' => '<li id="%1$s" class="widget %2$s">',
	// 	'after_widget'  => '</li>',
	// 	'before_title'  => '<h2 class="widgettitle">',
	// 	'after_title'   => '</h2>',
	//     ) );
	// }

	// let's create the function for the custom type
	function custom_post_monozukuri() {
		// creating (registering) the custom type
		register_post_type( 'monozukuri', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
			// let's now add all the options for this post type
			array( 'labels' => array(
				'name' => __( 'Monozukuri', 'tas' ), /* This is the Title of the Group */
				'singular_name' => __( 'Monozukuri', 'tas' ), /* This is the individual type */
				'all_items' => __( 'All Monozukuri', 'tas' ), /* the all items menu item */
				'add_new' => __( 'Add New', 'tas' ), /* The add new menu item */
				'add_new_item' => __( 'Add New Monozukuri', 'tas' ), /* Add New Display Title */
				'edit' => __( 'Edit', 'tas' ), /* Edit Dialog */
				'edit_item' => __( 'Edit Monozukuri', 'tas' ), /* Edit Display Title */
				'new_item' => __( 'New Monozukuri', 'tas' ), /* New Display Title */
				'view_item' => __( 'View Monozukuri', 'tas' ), /* View Display Title */
				'search_items' => __( 'Search Monozukuri', 'tas' ), /* Search Custom Type Title */
				'not_found' =>  __( 'Nothing found in the Database.', 'tas' ), /* This displays if there are no entries yet */
				'not_found_in_trash' => __( 'Nothing found in Trash', 'tas' ), /* This displays if there is nothing in the trash */
				'parent_item_colon' => ''
				), /* end of arrays */
				'description' => __( 'Monozukuri', 'tas' ), /* Custom Type Description */
				'public' => true,
				'publicly_queryable' => true,
				'exclude_from_search' => false,
				'show_ui' => true,
				'query_var' => true,
				'menu_position' => 7, /* this is what order you want it to appear in on the left hand side menu */
				'menu_icon' => 'dashicons-admin-generic', /* the icon for the custom post type menu */
				'rewrite'	=> array( 'slug' => 'monozukuri', 'with_front' => false ), /* you can specify its url slug */
				'has_archive' => 'monozukuri', /* you can rename the slug here */
				'capability_type' => 'post',
				'hierarchical' => false,
				/* the next one is important, it tells what's enabled in the post editor */
				'supports' => array( 'title', 'editor', 'author', 'excerpt', 'custom-fields', 'thumbnail', 'revisions', 'sticky')
			) /* end of options */
		); /* end of register post type */

		/* this adds your post categories to your custom post type */
		// register_taxonomy_for_object_type( 'category', 'monozukuri' );
		/* this adds your post tags to your custom post type */
		// register_taxonomy_for_object_type( 'post_tag', 'event' );

	}

	// // adding the function to the Wordpress init
	add_action( 'init', 'custom_post_monozukuri');



	register_taxonomy( 'monozukuri_category',
		array('monozukuri'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
		array('hierarchical' => true,     /* if this is true, it acts like categories */
			'labels' => array(
				'name' => __( 'Monozukuri Categories', 'tas' ), /* name of the custom taxonomy */
				'singular_name' => __( 'Monozukuri Category', 'tas' ), /* single taxonomy name */
				'search_items' =>  __( 'Search Monozukuri Categories', 'tas' ), /* search title for taxomony */
				'all_items' => __( 'All Monozukuri Categories', 'tas' ), /* all title for taxonomies */
				'parent_item' => __( 'Parent Monozukuri Category', 'tas' ), /* parent title for taxonomy */
				'parent_item_colon' => __( 'Parent Monozukuri Category:', 'tas' ), /* parent taxonomy title */
				'edit_item' => __( 'Edit Monozukuri Category', 'tas' ), /* edit custom taxonomy title */
				'update_item' => __( 'Update Monozukuri Category', 'tas' ), /* update title for taxonomy */
				'add_new_item' => __( 'Add New Monozukuri Category', 'tas' ), /* add new title for taxonomy */
				'new_item_name' => __( 'New Monozukuri Category Name', 'tas' ) /* name title for taxonomy */
			),
			'show_admin_column' => true,
			'show_ui' => true,
			'query_var' => true,
			'rewrite' => array( 'slug' => 'monozukuri-category' ),
		)
	);

	// let's create the function for the custom type
	function custom_post_project() {
		// creating (registering) the custom type
		register_post_type( 'project', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
			// let's now add all the options for this post type
			array( 'labels' => array(
				'name' => __( 'Project', 'tas' ), /* This is the Title of the Group */
				'singular_name' => __( 'Project', 'tas' ), /* This is the individual type */
				'all_items' => __( 'All Project', 'tas' ), /* the all items menu item */
				'add_new' => __( 'Add New', 'tas' ), /* The add new menu item */
				'add_new_item' => __( 'Add New Project', 'tas' ), /* Add New Display Title */
				'edit' => __( 'Edit', 'tas' ), /* Edit Dialog */
				'edit_item' => __( 'Edit Project', 'tas' ), /* Edit Display Title */
				'new_item' => __( 'New Project', 'tas' ), /* New Display Title */
				'view_item' => __( 'View Project', 'tas' ), /* View Display Title */
				'search_items' => __( 'Search Project', 'tas' ), /* Search Custom Type Title */
				'not_found' =>  __( 'Nothing found in the Database.', 'tas' ), /* This displays if there are no entries yet */
				'not_found_in_trash' => __( 'Nothing found in Trash', 'tas' ), /* This displays if there is nothing in the trash */
				'parent_item_colon' => ''
				), /* end of arrays */
				'description' => __( 'Project', 'tas' ), /* Custom Type Description */
				'public' => true,
				'publicly_queryable' => true,
				'exclude_from_search' => false,
				'show_ui' => true,
				'query_var' => true,
				'menu_position' => 7, /* this is what order you want it to appear in on the left hand side menu */
				'menu_icon' => 'dashicons-admin-generic', /* the icon for the custom post type menu */
				// 'rewrite'	=> array( 'slug' => 'project', 'with_front' => false ), /* you can specify its url slug */
				'has_archive' => 'projects', /* you can rename the slug here */
				'capability_type' => 'post',
				'hierarchical' => false,
				/* the next one is important, it tells what's enabled in the post editor */
				'supports' => array( 'title', 'editor', 'author', 'excerpt', 'custom-fields', 'thumbnail', 'revisions', 'sticky')
			) /* end of options */
		); /* end of register post type */

	}

	// // adding the function to the Wordpress init
	add_action( 'init', 'custom_post_project');



	register_taxonomy( 'project_category',
		array('project'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
		array('hierarchical' => true,     /* if this is true, it acts like categories */
			'labels' => array(
				'name' => __( 'Project Categories', 'tas' ), /* name of the custom taxonomy */
				'singular_name' => __( 'Project Category', 'tas' ), /* single taxonomy name */
				'search_items' =>  __( 'Search Project Categories', 'tas' ), /* search title for taxomony */
				'all_items' => __( 'All Project Categories', 'tas' ), /* all title for taxonomies */
				'parent_item' => __( 'Parent Project Category', 'tas' ), /* parent title for taxonomy */
				'parent_item_colon' => __( 'Parent Project Category:', 'tas' ), /* parent taxonomy title */
				'edit_item' => __( 'Edit Project Category', 'tas' ), /* edit custom taxonomy title */
				'update_item' => __( 'Update Project Category', 'tas' ), /* update title for taxonomy */
				'add_new_item' => __( 'Add New Project Category', 'tas' ), /* add new title for taxonomy */
				'new_item_name' => __( 'New Project Category Name', 'tas' ) /* name title for taxonomy */
			),
			'show_admin_column' => true,
			'show_ui' => true,
			'query_var' => true,
			'rewrite' => array( 'slug' => 'project-category' ),
		)
	);



	function cc_mime_types($mimes) {
	  $mimes['svg'] = 'image/svg+xml';
	  return $mimes;
	}
	add_filter('upload_mimes', 'cc_mime_types');

	// Apply filter
	// add_filter('body_class', 'multisite_body_classes');

	// function multisite_body_classes($classes) {
	//         $id = get_current_blog_id();
	//         $slug = strtolower(str_replace(' ', '-', trim(get_bloginfo('name'))));
	//         $classes[] = $slug;
	//         $classes[] = 'site-id-'.$id;
	//         if(ICL_LANGUAGE_CODE=="ja"):
	//         $classes[] = 'tk-heisei-kaku-gothic-std site-jp';
	// 		else:
	//         $classes[] = 'tk-brandon-grotesque';
	// 		endif;
	//         return $classes;
	// }


	function my_loginlogo() {
	  echo '<style type="text/css">
	    h1 a {
	      background-image: url(' . get_template_directory_uri() . '/images/logo.svg) !important;
	      -webkit-background-size: 240px !important;
		  background-size: 240px !important;
		  width: 100% !important;
		  height: 110px !important;
	    }
	  </style>';
	}
	add_action('login_head', 'my_loginlogo');

/*
 * wc_remove_related_products
 *
 * Clear the query arguments for related products so none show.
 * Add this code to your theme functions.php file.
 */
// function wc_remove_related_products( $args ) {
//   return array();
// }
// add_filter('woocommerce_related_products_args','wc_remove_related_products', 10);

function mytheme_add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );

remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 );
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );

add_action( 'woocommerce_after_single_product_summary', 'woocommerce_template_single_price', 10 );
add_action( 'woocommerce_after_single_product_summary', 'woocommerce_template_single_add_to_cart', 15 );

/**
 * Ensure cart contents update when products are added to the cart via AJAX
 */
function my_header_add_to_cart_fragment( $fragments ) {

    ob_start();
    $count = WC()->cart->cart_contents_count;
    ?><a class="cart-contents" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php
    if ( $count > 0 ) {
        ?>
        <span class="cart-contents-count"><?php echo esc_html( $count ); ?></span>
        <?php
    }
        ?></a><?php

    $fragments['a.cart-contents'] = ob_get_clean();

    return $fragments;
}
add_filter( 'woocommerce_add_to_cart_fragments', 'my_header_add_to_cart_fragment' );


function my_wc_cart_totals_order_total_html() {
    $value = '<strong>' . WC()->cart->get_total() . '</strong> ';

    // If prices are tax inclusive, show taxes here
    if ( wc_tax_enabled() && WC()->cart->tax_display_cart == 'incl' ) {
        $tax_string_array = array();

        if ( get_option( 'woocommerce_tax_total_display' ) == 'itemized' ) {
            foreach ( WC()->cart->get_tax_totals() as $code => $tax )
                $tax_string_array[] = sprintf( '%s %s', $tax->formatted_amount, $tax->label );
        } else {
            $tax_string_array[] = sprintf( '%s %s', wc_price( WC()->cart->get_taxes_total( true, true ) ), WC()->countries->tax_or_vat() );
        }

        if ( ! empty( $tax_string_array ) ) {
            $taxable_address = WC()->customer->get_taxable_address();
            $estimated_text  = WC()->customer->is_customer_outside_base() && ! WC()->customer->has_calculated_shipping()
                ? sprintf( ' ' . __( 'estimated for %s', 'woocommerce' ), WC()->countries->estimated_for_prefix( $taxable_address[0] ) . WC()->countries->countries[ $taxable_address[0] ] )
                : '';
            $value .= '<small class="includes_tax">' . sprintf( __( '(incl. %s)', 'woocommerce' ), implode( ', ', $tax_string_array ) . $estimated_text ) . '</small>';
        }
    }

    echo apply_filters( 'woocommerce_cart_totals_order_total_html', $value );
}

/**
 * Changes the redirect URL for the Return To Shop button in the cart.
 *
 * @return string
 */
function wc_empty_cart_redirect_url() {
	return 'http://timeandstyle.nl/tableware/';
}
add_filter( 'woocommerce_return_to_shop_redirect', 'wc_empty_cart_redirect_url' );

add_filter( 'woocommerce_shipping_package_name' , 'woocommerce_replace_text_shipping_to_delivery', 10, 3);

/**
 *
 * Function to replace shipping text to delivery text
 *
 * @param $package_name
 * @param $i
 * @param $package
 *
 * @return string
 */
function woocommerce_replace_text_shipping_to_delivery($package_name, $i, $package){
    return sprintf( _nx( 'Delivery', 'Delivery %d', ( $i + 1 ), 'shipping packages', 'timeandstyle' ), ( $i + 1 ) );
}


/*
 *  Change the string "Shipping" to "Delivery" on Order Received page.
 */
add_filter('gettext', 'translate_reply');
add_filter('ngettext', 'translate_reply');

function translate_reply($translated) {
$translated = str_ireplace('Shipping', 'Delivery', $translated);
return $translated;
}

add_filter( 'woocommerce_ajax_variation_threshold', 'wc_ninja_ajax_threshold' );
function wc_ninja_ajax_threshold() {
    return 150;
}
