<?php

// Utilities functions here

// check if current page is a subpage
function inv_is_subpage() {   
    $post = get_post();   
    if ( is_page() && $post->post_parent ) {       
        return $post->post_parent;
    } else {       
        return false;
    }
}

// limit excerpt length custom
function excerpt($limit) {
    $excerpt = explode(' ', get_the_excerpt(), $limit);
    if (count($excerpt)>=$limit) {
      array_pop($excerpt);
      $excerpt = implode(" ",$excerpt).'...';
    } else {
      $excerpt = implode(" ",$excerpt);
    }	
    $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
    return $excerpt;
  }


 // limit content length custom  
  function content($limit) {
    $content = explode(' ', get_the_content(), $limit);
    if (count($content)>=$limit) {
      array_pop($content);
      $content = implode(" ",$content).'...';
    } else {
      $content = implode(" ",$content);
    }	
    $content = preg_replace('/[.+]/','', $content);
    $content = apply_filters('the_content', $content); 
    $content = str_replace(']]>', ']]>', $content);
    return $content;
}


//add theme class to body
function inv_body_classes( $classes ) {
    if ( is_page() && get_field('general-settings_theme-color-overwrite') ) {
        $classes[] = get_field('general-settings_theme-color');
    } else {
        if(!isset($_COOKIE['theme'])) {
            $theme_default = get_field('theme-default', 'options');  
            if ( !empty($theme_default) ) {
                $theme = $theme_default;
            } else {
                $theme = 'theme-dark';
            }       
            $classes[] = $theme;       
        } else {        
            $classes[] = $_COOKIE['theme'];        
        } 
    }
    return $classes;
}
add_filter( 'body_class','inv_body_classes' );


//get current color-theme for widgets
function inv_widget_color() {
    if(!isset($_COOKIE['theme'])) {
        $theme_color_slug = substr(get_field('theme-default', 'options'), 6);
    } else {
        $theme_color_slug = substr($_COOKIE['theme'], 6);
    }
    return $theme_color_slug;
}


//show breadcrumbs
function show_breadcrumbs(){
    if ( is_singular( 'symbol' ) || is_single( 'symbol' ) ) { 
        return;
    }
    if (  is_page() && get_field('general-settings_show-breadcrumbs') == 'true' && function_exists('dimox_breadcrumbs') ) {				
        echo '<div class="breadcrumbs-section"><div class="container">';
        dimox_breadcrumbs();
        echo '</div></div>';			
    }	elseif ( !is_page() && !is_search() && function_exists('dimox_breadcrumbs') ) {
            echo '<div class="breadcrumbs-section"><div class="container">';
            dimox_breadcrumbs();
            echo '</div></div>';	
    }	elseif ( is_page_template( 'page-templates/blog.php' ) && function_exists('dimox_breadcrumbs') ) {
            echo '<div class="breadcrumbs-section"><div class="container">';
            dimox_breadcrumbs();
            echo '</div></div>';
    }
}


// get html from template part
function load_template_part($template_name, $part_name, $template_args) {
    ob_start();
    get_template_part($template_name, $part_name, $template_args);
    $var = ob_get_contents();
    ob_end_clean();
    return $var;
}


//detect device and show download link
function inv_show_download_link(){
    preg_match("/iPhone|Android|iPad|iPod/", $_SERVER['HTTP_USER_AGENT'], $matches);
    $os = current($matches);    
    switch($os){
        case 'iPhone':      
        case 'iPad':
        case 'iPod':
            echo get_field('app-links_apple-download-link', 'options');
            break;
        case 'Android':
            echo get_field('app-links_google-download-link', 'options');
            break;
        default:
            echo get_field('app-links_pc-download-link', 'options');    
            break;      
    }   
}


//check if url has param value
function getUrlParam( $param ) {
    global $wp;
    $current_url = add_query_arg( $_SERVER['QUERY_STRING'], '', home_url( $wp->request ) );     
    $url_components = parse_url($current_url);

    if (isset($url_components['query']) && $url_components['query']) {
        parse_str($url_components['query'], $params);
        if ( isset($params[$param]) && $params[$param] > 0) {
            return true;
        } else {
            return false;
        }
    }

    return false;    
    
}


//get url param value
function getUrlParamValue( $param ) {
    global $wp;
    $current_url = add_query_arg( $_SERVER['QUERY_STRING'], '', home_url( $wp->request ) );     
    $url_components = parse_url($current_url);

    if (isset($url_components['query']) && $url_components['query']) {
        parse_str($url_components['query'], $params);       
        if ( isset($params[$param]) ) {
            return strval( $params[$param] );
        } else {
            return false;
        }
    }

    return false;      
}


//random string generator
function generateRandomString($length = 5) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}





