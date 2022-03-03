<?php

add_action( 'widgets_init', 'inv_widgets_init' );
function inv_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Single Post sidebar ', 'invest-com' ),
        'id'            => 'single_post',
        'before_widget' => '<aside class="widget">',
        'after_widget'  => '</aside>'        
    ) ); 
    
}