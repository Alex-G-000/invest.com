<?php
// ACF functions here

//refiste and add to admin sidebar
if( function_exists('acf_add_options_page') ) {	
	acf_add_options_page(array(
		'page_title' 	=> 'Invest Theme Settings',
		'menu_title'	=> 'Invest Theme',
		'menu_slug' 	=> 'invest',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));	

    // Add sub page
    acf_add_options_sub_page(array(
		'page_title' 	=> 'Banners Settings',
		'menu_title'	=> 'Banners',
		'parent_slug'	=> 'invest',
	));

    // Add sub page
    acf_add_options_sub_page(array(
		'page_title' 	=> 'Widjets Settings',
		'menu_title'	=> 'Widjets',
		'parent_slug'	=> 'invest',
	));

    // Add sub page
    acf_add_options_sub_page(array(
		'page_title' 	=> 'Disclaimers',
		'menu_title'	=> 'Disclaimers',
		'parent_slug'	=> 'invest',
	));
	
}


// header styles and scripts from ACF
function inv_custom_header_scripts(){
    $page_id = get_queried_object_id();
    $tracking_code = get_field('theme-js_header-js', 'options');
    if ( is_page() ) {        
		$custom_css = get_field('css_custom-css', $page_id);
		$custom_css_link = get_field('css_custom-css-link', $page_id);
        if (!empty($custom_css_link)) {
            echo '<link rel="stylesheet" id="custom-page-css" href="' . $custom_css_link . '" media="all">';			
		}	
		if (!empty($custom_css)) {
			echo '<style id="inline-page-css">' . $custom_css . '</style>';
		}		
	}
    if (!empty($tracking_code)) {
        echo '<script id="theme-custom-header-script">' . $tracking_code . '</script>';
    }
}


// footer styles and scripts from ACF
function inv_custom_footer_scripts(){
    $page_id = get_queried_object_id();
    $tracking_code = get_field('theme-js_footer-js', 'options');
    if ( is_page() ) {
        $custom_js_link = get_field('javascript_custom-js-link', $page_id);
        $custom_js = get_field('javascript_custom-js', $page_id);		
        if (!empty($custom_js_link)) {
            echo '<script src="' . $custom_js_link .'" id="custom-page-js"></script>';			
		}	
		if (!empty($custom_js)) {
			echo '<script id="inline-page-js">' . $custom_js . '</script>';
		}		
	}
    if (!empty($tracking_code)) {
        echo '<script id="theme-custom-footer-script">' . $tracking_code . '</script>';
    }
}


//show widjet tape in header
function show_widjet_tape() {
    if ( get_field('general-settings_show-stripe-widjet') === true ) {
        get_template_part( 'template-parts/tradeview-widjets/tape-ticker/widjet' ); 
    }
}


//views count for posts
function inv_track_post_views ( $post_id ) {
    if ( !is_single() ) return;        
    $count = (int) get_field('views_count', $post_id);
    $count++;
    update_field('views_count', $count, $post_id);   
}


//get user avatar
function inv_get_author_avatar ( $auth_id ) {
    $auth_id_string = 'user_' . $auth_id;  
    $auth_img = get_field( 'avatar', $auth_id_string );
    if (empty($auth_img)) {
        $auth_img  = get_avatar_url( $auth_id , array(
            'size' => 80,
            'default'=>'mystery',
        ));
    } 
    return $auth_img;      
}
