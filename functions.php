<?php
	function register_my_menu() {
	  register_nav_menu('main-menu',__( 'Main Menu' ));
	}
	add_action( 'init', 'register_my_menu' );

	// if ( function_exists( 'add_image_size' ) ) { 
	// 	add_image_size( 'thumbnail-crop', 152, 152, true );
	// }

	/**
	 * Enqueue scripts and styles
	 */
	function theme_scripts_and_styles() {
		// wp_register_script( 'jquery', get_stylesheet_directory_uri() . '/bower_components/jquery/dist/jquery.min.js', array(), '', 'all' );

		wp_enqueue_script( 'jquery' );

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
		// register main script
		wp_register_script( 'main-script', get_stylesheet_directory_uri() . '/js/main.js', array('jquery'), '', true );
		wp_enqueue_script( 'main-script' );
		wp_localize_script('main-script', 'images_path', array('url' => get_template_directory_uri().'/images/'));

		// wp_register_style( 'gridle', get_stylesheet_directory_uri() . '/css/grid.css', array(), '', 'all' );
		// wp_enqueue_style( 'gridle' );
		wp_register_style( 'animsition', get_stylesheet_directory_uri() . '/bower_components/animsition/dist/css/animsition.css', array(), '', 'all' );
		wp_enqueue_style( 'animsition' );




		// wp_register_style( 'webfont', get_stylesheet_directory_uri() . '/MyFontsWebfontsKit.css', array(), '', 'all' );
		// wp_enqueue_style( 'webfont' );
		wp_register_style( 'slick', get_stylesheet_directory_uri() . '/bower_components/slick.js/slick/slick.css', array(), '', 'all' );
		wp_register_style( 'slick-theme', get_stylesheet_directory_uri() . '/bower_components/slick.js/slick/slick-theme.css', array(), '', 'all' );
		wp_enqueue_style( 'slick' );
		wp_enqueue_style( 'slick-theme' );
		wp_register_style( 'custom-scrollbar', get_stylesheet_directory_uri() . '/css/jquery.mCustomScrollbar.css', array(), '', 'all' );
		wp_enqueue_style( 'custom-scrollbar' );
		wp_register_style( 'webfont', get_stylesheet_directory_uri() . '/css/MyFontsWebfontsKit.css', array(), '', 'all' );
		wp_enqueue_style( 'webfont' );
		wp_register_style( 'main-css', get_stylesheet_directory_uri() . '/css/style.css', array(), '', 'all' );
		wp_enqueue_style( 'main-css' );
		// wp_register_style( 'magnific-popup', get_stylesheet_directory_uri() . '/bower_components/magnific-popup/dist/magnific-popup.css', array(), '', 'all' );
		// wp_enqueue_style( 'magnific-popup' );

/*
		wp_register_style( 'calendar', get_stylesheet_directory_uri() . '/bower_components/fullcalendar/dist/fullcalendar.css', array(), '', 'all' );
		wp_enqueue_style( 'calendar' );
		wp_register_script( 'calendar', get_stylesheet_directory_uri() . '/bower_components/fullcalendar/dist/fullcalendar.min.js', array('moment'), '', true );
		wp_enqueue_script( 'calendar' );
		wp_register_script( 'moment', get_stylesheet_directory_uri() . '/bower_components/moment/min/moment.min.js', array('jquery'), '', true );
		wp_enqueue_script( 'moment' );
		wp_register_script( 'gcal', get_stylesheet_directory_uri() . '/bower_components/fullcalendar/dist/gcal.js', array('calendar'), '', true );
		wp_enqueue_script( 'gcal' );
		wp_register_script( 'headhesive', get_stylesheet_directory_uri() . '/bower_components/headhesive/dist/headhesive.min.js', array('jquery'), '', true );
		wp_enqueue_script( 'headhesive' );
		wp_register_script( 'magnific-popup', get_stylesheet_directory_uri() . '/bower_components/magnific-popup/dist/jquery.magnific-popup.min.js', array('jquery'), '', true );
		wp_enqueue_script( 'magnific-popup' );
*/
	}

	add_action( 'wp_enqueue_scripts', 'theme_scripts_and_styles', 999 );



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

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );

remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );

