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
		wp_register_script( 'animsition', get_stylesheet_directory_uri() . '/bower_components/animsition/dist/js/animsition.min.js', array('jquery'), '', true );
		wp_enqueue_script( 'animsition' );
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

	// add_theme_support( 'post-thumbnails' );
	// set_post_thumbnail_size(350, 230, true);


	// add_action( 'widgets_init', 'hxk_widgets_init' );
	// function hxk_widgets_init() {
	//     register_sidebar( array(
	//         'name' => __( 'Main Sidebar', 'hxk' ),
	//         'id' => 'main-sidebar',
	//         'description' => __( 'Widgets in this area will be shown under navigation.', 'hxk' ),
	//         'before_widget' => '<li id="%1$s" class="widget %2$s">',
	// 	'after_widget'  => '</li>',
	// 	'before_title'  => '<h2 class="widgettitle">',
	// 	'after_title'   => '</h2>',
	//     ) );
	// }

	// // let's create the function for the custom type
	// function custom_post_projects() {
	// 	// creating (registering) the custom type
	// 	register_post_type( 'projects', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
	// 		// let's now add all the options for this post type
	// 		array( 'labels' => array(
	// 			'name' => __( 'Projects', 'hxk' ), /* This is the Title of the Group */
	// 			'singular_name' => __( 'Project', 'hxk' ), /* This is the individual type */
	// 			'all_items' => __( 'All Projects', 'hxk' ), /* the all items menu item */
	// 			'add_new' => __( 'Add New', 'hxk' ), /* The add new menu item */
	// 			'add_new_item' => __( 'Add New Project', 'hxk' ), /* Add New Display Title */
	// 			'edit' => __( 'Edit', 'hxk' ), /* Edit Dialog */
	// 			'edit_item' => __( 'Edit Project', 'hxk' ), /* Edit Display Title */
	// 			'new_item' => __( 'New Project', 'hxk' ), /* New Display Title */
	// 			'view_item' => __( 'View Project', 'hxk' ), /* View Display Title */
	// 			'search_items' => __( 'Search Project', 'hxk' ), /* Search Custom Type Title */
	// 			'not_found' =>  __( 'Nothing found in the Database.', 'hxk' ), /* This displays if there are no entries yet */
	// 			'not_found_in_trash' => __( 'Nothing found in Trash', 'hxk' ), /* This displays if there is nothing in the trash */
	// 			'parent_item_colon' => ''
	// 			), /* end of arrays */
	// 			'description' => __( 'Projects', 'hxk' ), /* Custom Type Description */
	// 			'public' => true,
	// 			'publicly_queryable' => true,
	// 			'exclude_from_search' => false,
	// 			'show_ui' => true,
	// 			'query_var' => true,
	// 			'menu_position' => 7, /* this is what order you want it to appear in on the left hand side menu */
	// 			'menu_icon' => 'dashicons-format-aside', /* the icon for the custom post type menu */
	// 			'rewrite'	=> array( 'slug' => 'project', 'with_front' => false ), /* you can specify its url slug */
	// 			'has_archive' => 'projects', /* you can rename the slug here */
	// 			'capability_type' => 'post',
	// 			'hierarchical' => false,
	// 			/* the next one is important, it tells what's enabled in the post editor */
	// 			'supports' => array( 'title', 'editor', 'author', 'excerpt', 'custom-fields', 'thumbnail', 'revisions', 'sticky')
	// 		) /* end of options */
	// 	); /* end of register post type */

	// 	/* this adds your post categories to your custom post type */
	// 	// register_taxonomy_for_object_type( 'category', 'event' );
	// 	/* this adds your post tags to your custom post type */
	// 	// register_taxonomy_for_object_type( 'post_tag', 'event' );

	// }

	// // adding the function to the Wordpress init
	// add_action( 'init', 'custom_post_projects');

	// function custom_post_tips() {
	// 	// creating (registering) the custom type
	// 	register_post_type( 'tips', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
	// 		// let's now add all the options for this post type
	// 		array( 'labels' => array(
	// 			'name' => __( 'Tips', 'hxk' ), /* This is the Title of the Group */
	// 			'singular_name' => __( 'Tip', 'hxk' ), /* This is the individual type */
	// 			'all_items' => __( 'All Tips', 'hxk' ), /* the all items menu item */
	// 			'add_new' => __( 'Add New', 'hxk' ), /* The add new menu item */
	// 			'add_new_item' => __( 'Add New Tip', 'hxk' ), /* Add New Display Title */
	// 			'edit' => __( 'Edit', 'hxk' ), /* Edit Dialog */
	// 			'edit_item' => __( 'Edit Tip', 'hxk' ), /* Edit Display Title */
	// 			'new_item' => __( 'New Tip', 'hxk' ), /* New Display Title */
	// 			'view_item' => __( 'View Tip', 'hxk' ), /* View Display Title */
	// 			'search_items' => __( 'Search Tip', 'hxk' ), /* Search Custom Type Title */
	// 			'not_found' =>  __( 'Nothing found in the Database.', 'hxk' ), /* This displays if there are no entries yet */
	// 			'not_found_in_trash' => __( 'Nothing found in Trash', 'hxk' ), /* This displays if there is nothing in the trash */
	// 			'parent_item_colon' => ''
	// 			), /* end of arrays */
	// 			'description' => __( 'Tips', 'hxk' ), /* Custom Type Description */
	// 			'public' => true,
	// 			'publicly_queryable' => true,
	// 			'exclude_from_search' => false,
	// 			'show_ui' => true,
	// 			'query_var' => true,
	// 			'menu_position' => 7, /* this is what order you want it to appear in on the left hand side menu */
	// 			'menu_icon' => 'dashicons-format-status', /* the icon for the custom post type menu */
	// 			'rewrite'	=> array( 'slug' => 'tip', 'with_front' => false ), /* you can specify its url slug */
	// 			'has_archive' => 'tips', /* you can rename the slug here */
	// 			'capability_type' => 'post',
	// 			'hierarchical' => false,
	// 			/* the next one is important, it tells what's enabled in the post editor */
	// 			'supports' => array( 'title', 'editor', 'author', 'excerpt', 'custom-fields', 'thumbnail', 'revisions', 'sticky')
	// 		) /* end of options */
	// 	); /* end of register post type */

	// 	/* this adds your post categories to your custom post type */
	// 	// register_taxonomy_for_object_type( 'category', 'event' );
	// 	/* this adds your post tags to your custom post type */
	// 	// register_taxonomy_for_object_type( 'post_tag', 'event' );

	// }

	// // adding the function to the Wordpress init
	// add_action( 'init', 'custom_post_tips');

	// // let's create the function for the custom type
	// function custom_post_agenda() {
	// 	// creating (registering) the custom type
	// 	register_post_type( 'agenda', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
	// 		// let's now add all the options for this post type
	// 		array( 'labels' => array(
	// 			'name' => __( 'Agenda', 'hxk' ), /* This is the Title of the Group */
	// 			'singular_name' => __( 'Agenda', 'hxk' ), /* This is the individual type */
	// 			'all_items' => __( 'All Agenda', 'hxk' ), /* the all items menu item */
	// 			'add_new' => __( 'Add New', 'hxk' ), /* The add new menu item */
	// 			'add_new_item' => __( 'Add New Agenda', 'hxk' ), /* Add New Display Title */
	// 			'edit' => __( 'Edit', 'hxk' ), /* Edit Dialog */
	// 			'edit_item' => __( 'Edit Agenda', 'hxk' ), /* Edit Display Title */
	// 			'new_item' => __( 'New Agenda', 'hxk' ), /* New Display Title */
	// 			'view_item' => __( 'View Agenda', 'hxk' ), /* View Display Title */
	// 			'search_items' => __( 'Search Agenda', 'hxk' ), /* Search Custom Type Title */
	// 			'not_found' =>  __( 'Nothing found in the Database.', 'hxk' ), /* This displays if there are no entries yet */
	// 			'not_found_in_trash' => __( 'Nothing found in Trash', 'hxk' ), /* This displays if there is nothing in the trash */
	// 			'parent_item_colon' => ''
	// 			), /* end of arrays */
	// 			'description' => __( 'Agenda', 'hxk' ), /* Custom Type Description */
	// 			'public' => true,
	// 			'publicly_queryable' => true,
	// 			'exclude_from_search' => false,
	// 			'show_ui' => true,
	// 			'query_var' => true,
	// 			'menu_position' => 7, /* this is what order you want it to appear in on the left hand side menu */
	// 			'menu_icon' => 'dashicons-calendar', /* the icon for the custom post type menu */
	// 			'rewrite'	=> array( 'slug' => 'event', 'with_front' => false ), /* you can specify its url slug */
	// 			'has_archive' => 'agenda', /* you can rename the slug here */
	// 			'capability_type' => 'post',
	// 			'hierarchical' => false,
	// 			/* the next one is important, it tells what's enabled in the post editor */
	// 			'supports' => array( 'title', 'editor', 'author', 'excerpt', 'custom-fields', 'revisions', 'sticky')
	// 		) /* end of options */
	// 	); /* end of register post type */

	// 	/* this adds your post categories to your custom post type */
	// 	// register_taxonomy_for_object_type( 'category', 'event' );
	// 	/* this adds your post tags to your custom post type */
	// 	// register_taxonomy_for_object_type( 'post_tag', 'event' );

	// }

	// // adding the function to the Wordpress init
	// add_action( 'init', 'custom_post_agenda');

	// function custom_post_mention() {
	// 	// creating (registering) the custom type
	// 	register_post_type( 'mention', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
	// 		// let's now add all the options for this post type
	// 		array( 'labels' => array(
	// 			'name' => __( 'Mention', 'hxk' ), /* This is the Title of the Group */
	// 			'singular_name' => __( 'Mention', 'hxk' ), /* This is the individual type */
	// 			'all_items' => __( 'All Mentions', 'hxk' ), /* the all items menu item */
	// 			'add_new' => __( 'Add New', 'hxk' ), /* The add new menu item */
	// 			'add_new_item' => __( 'Add New Mention', 'hxk' ), /* Add New Display Title */
	// 			'edit' => __( 'Edit', 'hxk' ), /* Edit Dialog */
	// 			'edit_item' => __( 'Edit Mention', 'hxk' ), /* Edit Display Title */
	// 			'new_item' => __( 'New Mention', 'hxk' ), /* New Display Title */
	// 			'view_item' => __( 'View Mention', 'hxk' ), /* View Display Title */
	// 			'search_items' => __( 'Search Mention', 'hxk' ), /* Search Custom Type Title */
	// 			'not_found' =>  __( 'Nothing found in the Database.', 'hxk' ), /* This displays if there are no entries yet */
	// 			'not_found_in_trash' => __( 'Nothing found in Trash', 'hxk' ), /* This displays if there is nothing in the trash */
	// 			'parent_item_colon' => ''
	// 			), /* end of arrays */
	// 			'description' => __( 'Mentions', 'hxk' ), /* Custom Type Description */
	// 			'public' => true,
	// 			'publicly_queryable' => true,
	// 			'exclude_from_search' => false,
	// 			'show_ui' => true,
	// 			'query_var' => true,
	// 			'menu_position' => 7, /* this is what order you want it to appear in on the left hand side menu */
	// 			'menu_icon' => 'dashicons-format-quote', /* the icon for the custom post type menu */
	// 			'rewrite'	=> array( 'slug' => 'mention', 'with_front' => false ), /* you can specify its url slug */
	// 			'has_archive' => 'mentions', /* you can rename the slug here */
	// 			'capability_type' => 'post',
	// 			'hierarchical' => false,
	// 			/* the next one is important, it tells what's enabled in the post editor */
	// 			'supports' => array( 'title', 'editor', 'author', 'excerpt', 'custom-fields', 'thumbnail', 'revisions', 'sticky')
	// 		) /* end of options */
	// 	); /* end of register post type */

	// 	/* this adds your post categories to your custom post type */
	// 	// register_taxonomy_for_object_type( 'category', 'event' );
	// 	/* this adds your post tags to your custom post type */
	// 	// register_taxonomy_for_object_type( 'post_tag', 'event' );

	// }

	// // adding the function to the Wordpress init
	// add_action( 'init', 'custom_post_mention');

	// register_taxonomy( 'agenda_category',
	// 	array('agenda'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
	// 	array('hierarchical' => true,     /* if this is true, it acts like categories */
	// 		'labels' => array(
	// 			'name' => __( 'Agenda Categories', 'hxk' ), /* name of the custom taxonomy */
	// 			'singular_name' => __( 'Agenda Category', 'hxk' ), /* single taxonomy name */
	// 			'search_items' =>  __( 'Search Agenda Categories', 'hxk' ), /* search title for taxomony */
	// 			'all_items' => __( 'All Agenda Categories', 'hxk' ), /* all title for taxonomies */
	// 			'parent_item' => __( 'Parent Agenda Category', 'hxk' ), /* parent title for taxonomy */
	// 			'parent_item_colon' => __( 'Parent Agenda Category:', 'hxk' ), /* parent taxonomy title */
	// 			'edit_item' => __( 'Edit Agenda Category', 'hxk' ), /* edit custom taxonomy title */
	// 			'update_item' => __( 'Update Agenda Category', 'hxk' ), /* update title for taxonomy */
	// 			'add_new_item' => __( 'Add New Agenda Category', 'hxk' ), /* add new title for taxonomy */
	// 			'new_item_name' => __( 'New Agenda Category Name', 'hxk' ) /* name title for taxonomy */
	// 		),
	// 		'show_admin_column' => true,
	// 		'show_ui' => true,
	// 		'query_var' => true,
	// 		'rewrite' => array( 'slug' => 'agenda-category' ),
	// 	)
	// );

	// register_taxonomy( 'mention_category',
	// 	array('mention'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
	// 	array('hierarchical' => true,     /* if this is true, it acts like categories */
	// 		'labels' => array(
	// 			'name' => __( 'Mention Categories', 'hxk' ), /* name of the custom taxonomy */
	// 			'singular_name' => __( 'Mention Category', 'hxk' ), /* single taxonomy name */
	// 			'search_items' =>  __( 'Search Mention Categories', 'hxk' ), /* search title for taxomony */
	// 			'all_items' => __( 'All Mention Categories', 'hxk' ), /* all title for taxonomies */
	// 			'parent_item' => __( 'Parent Mention Category', 'hxk' ), /* parent title for taxonomy */
	// 			'parent_item_colon' => __( 'Parent Mention Category:', 'hxk' ), /* parent taxonomy title */
	// 			'edit_item' => __( 'Edit Mention Category', 'hxk' ), /* edit custom taxonomy title */
	// 			'update_item' => __( 'Update Mention Category', 'hxk' ), /* update title for taxonomy */
	// 			'add_new_item' => __( 'Add New Mention Category', 'hxk' ), /* add new title for taxonomy */
	// 			'new_item_name' => __( 'New Mention Category Name', 'hxk' ) /* name title for taxonomy */
	// 		),
	// 		'show_admin_column' => true,
	// 		'show_ui' => true,
	// 		'query_var' => true,
	// 		'rewrite' => array( 'slug' => 'mention-category' ),
	// 	)
	// );



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
