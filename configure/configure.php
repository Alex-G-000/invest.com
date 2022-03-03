<?php

// MENUS
function inv_custom_theme_register_menu() {
    register_nav_menus(
        array(
            'menu-main' => __( 'Menu main' ),
            'menu-footer-1' => __( 'Menu footer 1' ),
			'menu-footer-2' => __( 'Menu footer 2' ),
			'menu-footer-3' => __( 'Menu footer 3' ),
			'menu-footer-4' => __( 'Menu footer 4' ),			
        )
    );
}
add_action( 'init', 'inv_custom_theme_register_menu' );


// Register Custom Navigation Walker
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );


function custom_setup() {
	add_theme_support( 'post-thumbnails' );
	add_theme_support('title-tag');	
	add_theme_support( 'html5', [ 'script', 'style' ] );
	//load_theme_textdomain('textdomaintomodify', get_template_directory() . '/languages');

	remove_image_size( '100x100' );
	remove_image_size( '1536x1536' );
	remove_image_size( '2048x2048' );
}
add_action('after_setup_theme', 'custom_setup');


// remove default image sizes 
function remove_default_image_sizes( $sizes) {
	unset( $sizes['large']);
	unset( $sizes['medium_large']);	
	return $sizes;
}
add_filter('intermediate_image_sizes_advanced', 'remove_default_image_sizes');


// disabling big image sizes scaled
add_filter( 'big_image_size_threshold', '__return_false' );



// Move Yoast to bottom
function yoasttobottom() {
	return 'low';
}
add_filter( 'wpseo_metabox_prio', 'yoasttobottom');

// Remove WP Emoji
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );


// delete wp-embed.js from footer
function inv_deregister_scripts() {
	wp_deregister_script( 'wp-embed' );
}
add_action( 'wp_footer', 'inv_deregister_scripts' );


// dequeue jquery migrate
function dequeue_jquery_migrate( &$scripts){
	if(!is_admin()){
		$scripts->remove( 'jquery');		
	}
}
add_filter( 'wp_default_scripts', 'dequeue_jquery_migrate' );

/*
// force all scripts to load in footer
function clean_header() {
	remove_action('wp_head', 'wp_print_scripts');
	remove_action('wp_head', 'wp_print_head_scripts', 9);
	remove_action('wp_head', 'wp_enqueue_scripts', 1);
}
add_action('wp_enqueue_scripts', 'clean_header');
*/

//remove the WordPress version number
function inv_remove_version() {
	return '';
	}
	add_filter('the_generator', 'inv_remove_version');


//remove Welcome Panel from WordPress dashboard
remove_action('welcome_panel', 'wp_welcome_panel');
function inv_admin_bar_remove_logo() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu( 'wp-logo' );
}
add_action( 'wp_before_admin_bar_render', 'inv_admin_bar_remove_logo', 0 );


// Disallow file edit
define( 'DISALLOW_FILE_EDIT', true );


//limit upload image size
function whero_limit_image_size($file) {	
	$image_size = $file['size']/1024;
	$limit = 500;
	$is_image = strpos($file['type'], 'image');

	if ( ( $image_size > $limit ) && ($is_image !== false) )
        	$file['error'] = 'Your picture is too large. It has to be smaller than '. $limit .'KB';

	return $file;
}
add_filter('wp_handle_upload_prefilter', 'whero_limit_image_size');


// add SVG to allowed file uploads
function add_file_types_to_uploads($mime_types) {
	$mime_types['svg'] = 'image/svg+xml';
	return $mime_types;
}
add_action('upload_mimes', 'add_file_types_to_uploads', 1, 1);