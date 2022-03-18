<?php

//register SCRIPTS first!!!
function inv_register_scripts() {
	//core
	wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.5.1.min.js', array(), null, false);
	// wp_register_script( 'popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js', array('jquery'), null, false);    	
	wp_register_script( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js', array('jquery'), null, false);
	wp_register_script( 'theme-functions', get_template_directory_uri() . '/js/theme-functions.js', array('bootstrap'), '1.0.3', true);
	//tools
	wp_register_script( 'swiper', get_template_directory_uri() . '/vendor/swiper-master/dist/swiper-bundle.min.js', array('jquery'), null, true);
	wp_register_script( 'AOS', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array('jquery'), null, true);		
	wp_register_script( 'countTo', get_template_directory_uri() . '/vendor/jquery-countTo-master/jquery.countTo.js', array('jquery'), null, true);
	//pages		
	wp_register_script( 'blog-homepage', get_template_directory_uri() . '/js/blog-homepage.js', array('swiper'), null, true);
	wp_register_script( 'blog-category-page', get_template_directory_uri() . '/js/blog-category-page.js', array('swiper'), null, true);
	wp_register_script( 'faq-answers', get_template_directory_uri() . '/js/faq-answers.js', array('jquery', 'bootstrap', 'theme-functions'), null, true);
	wp_register_script( 'search-page', get_template_directory_uri() . '/js/search-page.js', array('jquery', 'theme-functions'), null, true);
	//template-parts
	wp_register_script( 'archive-slider-category', get_template_directory_uri() . '/js/templte-parts/archive-slider-category.js', array('swiper'), null, true);  
	wp_register_script( 'economic-calendar', get_template_directory_uri() . '/js/templte-parts/economic-calendar.js', array(), null, true);  	
	//blocks
	wp_register_script( 'homepage-about-us', get_template_directory_uri() . '/block-templates/homepage/about-us/template.js', array('swiper'), null, true); 
	wp_register_script( 'homepage-blog-news', get_template_directory_uri() . '/block-templates/homepage/news/template.js', array('swiper'), null, true); 	
	wp_register_script( 'widjet-popular-markets-tabs', get_template_directory_uri() . '/block-templates/homepage/widjet-popular-markets-tabs/template.js', array('jquery', 'theme-functions'), null, true); 	
	wp_register_script( 'blog-numbers-block', get_template_directory_uri() . '/blocks/counter-blog-numbers/block.js', array('theme-functions', 'countTo'), null, true);
	wp_register_script( 'all-instruments-page', get_template_directory_uri() . '/block-templates/instruments-page/all-insruments/template.js', array('jquery'), null, true);
	wp_register_script( 'instruments-widget-fullwidth', get_template_directory_uri() . '/block-templates/instruments-page/widget-fullwidth/template.js', array('jquery'), null, true);
	wp_register_script( 'top-weekly-block', get_template_directory_uri() . '/block-templates/homepage/widjet-top-weekly/template.js', array('jquery'), null, true);
	wp_register_script( 'global-stocks-slider', get_template_directory_uri() . '/block-templates/homepage/global-stocks/template.js', array('jquery', 'swiper'), null, true);
	//theme
	wp_register_script( 'theme', get_template_directory_uri() . '/js/theme.js', array('theme-functions', 'AOS', 'bootstrap'), '1.1.9', true);
	//landing page
	wp_register_script( 'competitive-spread-top-weekly', get_template_directory_uri() . '/block-templates/landing-pages/competitive-spread/widjet-top-weekly-1/template.js', array('jquery'), null, true);
}
add_action( 'wp_enqueue_scripts', 'inv_register_scripts' );

//load scripts on front end
function inv_add_javascript() {	
	wp_enqueue_script( 'theme');	
}
add_action('wp_enqueue_scripts', 'inv_add_javascript', 100);




//register STYLES
add_action('wp_enqueue_scripts', 'inv_register_stylesheets');
function inv_register_stylesheets() {		
		$version = '1.2.7';
	//core
	wp_register_style('theme', get_template_directory_uri() . '/css/style.css', array('AOS','invest-icons'), $version, 'all' );
	wp_register_style('blog', get_template_directory_uri() . '/css/blog.css', array('AOS','invest-icons'), $version, 'all' );
	wp_register_style('invest-icons', get_template_directory_uri() . '/fonts/invest-icons/css/invest.css', array(), '1.0.0', 'all' );
	//tools
	wp_register_style('AOS', 'https://unpkg.com/aos@2.3.1/dist/aos.css', array(), null, 'all' );
	wp_register_style('swiper', get_template_directory_uri() . '/vendor/swiper-master/dist/swiper-bundle.min.css', array(), null, 'all' );
}


//load styles on front end
add_action('wp_enqueue_scripts', 'inv_add_stylesheets');
function inv_add_stylesheets() {	
	if ( is_single() || is_archive() || is_page_template( 'page-templates/blog.php' ) )   {
		if ( is_post_type_archive('faq') || is_singular( 'faq' ) || is_single( 'faq' ) || is_singular( 'symbol' ) || is_single( 'symbol' )) {			
			wp_enqueue_style('theme');
		} else {			
			wp_enqueue_style('blog');
		}		
	} else {
		wp_enqueue_style('theme');
	}		
}



//admin styles
add_action('admin_head', 'inv_admin_styles');
function inv_admin_styles() {
	wp_enqueue_style('admin-styles', get_template_directory_uri() . '/css/admin-styles.css', array(), null, 'all' );
}


//login page
function inv_login_logo() { 
	wp_enqueue_style('login-register', get_template_directory_uri() . '/css/login-register.css', array(), null, 'all' );
 }
function inv_login_logo_url() {
    return home_url();
} 
function inv_login_logo_url_title() {
    return 'Invest.com';
}
add_action( 'login_enqueue_scripts', 'inv_login_logo' );
add_filter( 'login_headerurl', 'inv_login_logo_url' );
add_filter( 'login_headertext', 'inv_login_logo_url_title' );




