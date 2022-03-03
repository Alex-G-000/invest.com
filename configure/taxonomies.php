<?php
// FAQ custom post type function
function create_faq_posttype() { 
    register_post_type( 'faq',    
        array(
            'labels' => array(
                'name' => __( 'FAQ' ),
                'singular_name' => __( 'faq' )
            ),            
            'rewrite'           => array('slug' => 'trading/faq'),
            'show_in_rest'      => true,
            'walk_dirs'         => false,
            'supports'          => array( 'title','excerpt', 'editor', 'custom-fields' ),        
            'taxonomies'        => array( 'faq_category' ),
            'hierarchical'      => true,
            'public'            => true,
            // 'show_ui'        => true,
            // 'show_in_menu'   => true,
            // 'show_in_nav_menus' => true,
            // 'show_in_admin_bar'  => true,
            //'menu_position'      => 5,
            'can_export'         => true,
            'has_archive'        => true,
            // 'exclude_from_search'=> false,
            'publicly_queryable' => true,
            // 'capability_type'    => 'post', 
        )
    );
}
add_action( 'init', 'create_faq_posttype' );



 
add_action( 'init', 'create_faq_hierarchical_taxonomy', 0 ); 
function create_faq_hierarchical_taxonomy() {
  $labels = array(
    'name' => _x( 'Faq Category', 'taxonomy general name' ),
    'singular_name' => _x( 'Faq Item', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Subjects' ),
    'all_items' => __( 'All Faq Items' ),
    'parent_item' => __( 'Faq Category' ),
    'parent_item_colon' => __( 'Faq Category:' ),    
    'menu_name' => __( 'FAQ Category' ),
  ); 
  register_taxonomy('faq_category',array('faq'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'faq_category' ),
    'has_archive'        => true,
  ));
 

}



// Symbol custom post type function
function create_symbol_posttype() { 
    register_post_type( 'symbol',    
        array(
            'labels' => array(
                'name' => __( 'Symbols' ),
                'singular_name' => __( 'Symbol' )
            ),            
            'rewrite'           => array('slug' => 'instruments/all-instruments'),
            'show_in_rest'      => true,
            'walk_dirs'         => false,
            'supports'          => array( 'title', 'custom-fields', 'slug' ),        
            'taxonomies'        => array( 'symbol_category' ),
            'hierarchical'      => false,
            'public'            => true,           
            'can_export'         => true,
            'has_archive'        => false,
            // 'exclude_from_search'=> false,
            'publicly_queryable' => true,
        )
    );
}
add_action( 'init', 'create_symbol_posttype' );



add_action( 'init', 'create_symbol_taxonomy', 0 ); 
function create_symbol_taxonomy() {
  $labels = array(
    'name' => _x( 'Symbol Category', 'taxonomy general name' ),
    'singular_name' => _x( 'Symbol Category', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Symbol Category' ),
    'all_items' => __( 'All Symbol Categories' ),
    'parent_item' => __( 'Faq Category' ),
    'parent_item_colon' => __( 'Symbol Category:' ),    
    'menu_name' => __( 'Symbol Category' ),
  ); 
  register_taxonomy('symbol_category',array('symbol'), array(
    'hierarchical' => false,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'symbol_category' ),
    'has_archive' => false,
  ));
 

}
