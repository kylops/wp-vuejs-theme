<?php
/**
 * @package WordPress
 * @subpackage Third_Wunder_2017
 * @since Third Wunder 2017
 */

add_filter( 'allowed_http_origin', '__return_true' );
add_theme_support( 'post-thumbnails' );

/**
 * Enqueue scripts and styles.
 */
if( !function_exists( "tw_theme_css" ) ) {
	function tw_theme_css() {
		// wp_register_style( 'uikit', get_stylesheet_directory_uri().'/node_modules/uikit/dist/css/uikit.min.css',array(),null, 'all' );
		// wp_enqueue_style( 'uikit' );

		wp_register_style( 'style',        get_stylesheet_directory_uri().'/style.css',array(),                     null, 'all' );
		wp_enqueue_style( 'style' );

		wp_register_style( 'main-css',        get_stylesheet_directory_uri().'/dist/main.css',array(),                     null, 'all' );
		wp_enqueue_style( 'main-css' );


	}
	add_action( 'wp_enqueue_scripts', 'tw_theme_css' );
}

if( !function_exists( "tw_theme_js" ) ) {
	function tw_theme_js() {
	// 	wp_register_script( 'uikit-js', get_template_directory_uri() . '/node_modules/uikit/dist/js/uikit.min.js', array('jquery'), null, true );
	//   wp_enqueue_script( 'uikit-js');
	  //
	//   wp_register_script( 'uikit-icons-js', get_template_directory_uri() . '/node_modules/uikit/dist/js/uikit-icons.min.js', array('uikit-js'), null, true );
	//   wp_enqueue_script( 'uikit-js');

    	wp_register_script( 'bundle-js', get_template_directory_uri() . '/dist/bundle.js', array(), null, true );
    	wp_enqueue_script( 'bundle-js');


	}
	add_action( 'wp_enqueue_scripts', 'tw_theme_js' );
}


if(!function_exists('tw_theme_support')){
  function tw_theme_support() {
    $theme_menus = array(
                      'mobile' => 'Mobile Menu',    // mobile main navigation
                  		'primary' => 'Primary Menu',  // main nav in header
                    );

    load_theme_textdomain( 'thirdwunder', get_template_directory() . '/language' );
    add_theme_support( 'post-thumbnails');      // wp thumbnails (sizes handled in functions.php)
    add_theme_support( 'title-tag' );
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
      ) );
    add_theme_support( 'menus' );            // wp menus
    register_nav_menus( $theme_menus );      // wp3+ menus
  }
  add_action('after_setup_theme','tw_theme_support');
}

function tw_blog_info_endpoint(  ) {
	return array(
		'name'=> get_bloginfo('name'),
		'description'=>get_bloginfo('description'),
		'url' => get_bloginfo('wpurl'),
		'charset' => get_bloginfo('charset'),
		'language' => get_bloginfo('language'),
		'posts_per_page'=> get_option( 'posts_per_page' ),
		'posts_per_rss'=> get_option( 'posts_per_rss' ),
		'date_format'=> get_option( 'date_format' ),
		'start_of_week'=> get_option( 'start_of_week' ),
		'default_category'=> get_option( 'default_category' ),
		'front_page' => get_option( 'page_on_front' ),
		'blog_page' => get_option( 'page_for_posts' ),
		'menus' => tw_get_menus(),
	);
}

// function tw_blog_option_endpoint(  ) {
// 	return array(
// 		'posts_per_page'=> get_option( 'posts_per_page' ),
// 		'posts_per_rss'=> get_option( 'posts_per_rss' ),
// 		'date_format'=> get_option( 'date_format' ),
// 		'start_of_week'=> get_option( 'start_of_week' ),
// 		'default_category'=> get_option( 'default_category' ),
// 		'front_page' => get_option( 'page_on_front' ),
// 		'blog_page' => get_option( 'page_for_posts' ),
//
// 	);
// }

add_action( 'rest_api_init', function () {
  register_rest_route( 'vv3/v1', '/info', array(
    'methods' => 'GET',
    'callback' => 'tw_blog_info_endpoint',
  ) );

	// register_rest_route( 'tw/v1', '/options', array(
  //   'methods' => 'GET',
  //   'callback' => 'tw_blog_option_endpoint',
  // ) );
} );


/* Removing fields from the JSON response */
function kylops_remove_extra_data( $data, $post, $context ) {
  // We only want to modify the 'view' context, for reading posts
  if ( $context !== 'view' || is_wp_error( $data ) ) {
    return $data;
  }

  // Here, we unset any data we don't want to see on the front end:
  unset( $data['author'] );
  unset( $data['status'] );
  // continue unsetting whatever other fields you want

  return $data;
}

add_filter( 'json_prepare_post', 'kylops_remove_extra_data', 12, 3 );

/* Adding fields to the JSON response */
function kylops_add_custom_meta_to_posts( $data, $post, $context ) {
  // We only want to modify the 'view' context, for reading posts
  if ( $context !== 'view' || is_wp_error( $data ) ) {
    return $data;
  }

  $source = get_post_meta( $post['ID'], 'Source', true );

  if ( ! empty( $source ) ) {
    $data['custom_meta'] = array( 'Source' => $source );
  }

  return $data;
}
add_filter( 'json_prepare_post', 'kylops_add_custom_meta_to_posts', 10, 3 );

function kylops_blog_info_endpoint(  ) {
	$options = array(
		'name'=> get_bloginfo('name'),
		'description'=>get_bloginfo('description'),
		'url' => get_bloginfo('wpurl'),
		'charset' => get_bloginfo('charset'),
		'language' => get_bloginfo('language'),
		'posts_per_page'=> get_option( 'posts_per_page' ),
		'posts_per_rss'=> get_option( 'posts_per_rss' ),
		'date_format'=> get_option( 'date_format' ),
		'start_of_week'=> get_option( 'start_of_week' ),
		'default_category'=> get_option( 'default_category' ),
		'front_page' => get_option( 'page_on_front' ),
		'blog_page' => get_option( 'page_for_posts' ),
		// 'featured_image' => '',
		// 'author_avatar' => get_avatar_url('id'),
		// 'menus' => tw_get_menus(),
		// 'wunder_panels' => false,
		// 'wunder_testimonials' => false,
		// 'wunder_services' => false,
	);
	return $options;
}



add_action( 'rest_api_init', function () {
  register_rest_route( 'kylops/v1', '/info', array(
    'methods' => 'GET',
    'callback' => 'kylops_blog_info_endpoint',
  ) );
} );

// function theme_prefix_setup() {
//
// 	add_theme_support( 'custom-logo', array(
// 		'height'      => 100,
// 		'width'       => 400,
// 		'flex-width' => true,
// 	) );
//
// }
// add_action( 'after_setup_theme', 'theme_prefix_setup' );
