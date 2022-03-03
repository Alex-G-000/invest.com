<?php 
if (get_field('blog-sidebar-banner_enable', 'options')) {

	$args = get_field('blog-sidebar-banner', 'options');

	if (block_value('title')) {
		$title = block_value('title');
	} else {
		$title = $args['title'];
	}
	
	if (block_value('subtitle')) {
		$subtitle = block_value('subtitle');
	} else {
		$subtitle = $args['subtitle'];
	}
	
	if (block_value('button-text')) {
		$btn_text = block_value('button-text');
	} else {
		$btn_text = $args['button_text'];
	}
	
	if (block_value('button-link')) {
		$btn_link = block_value('button-link');
	} else {
		$btn_link = $args['button_link'];
	}

    if (block_value('image')) {
		$image = block_value('image');
	} else {
		$image = $args['banner_image'];
	}	
	
	$template_id = 'blog-sidebar-banner';
	$template_path = "block-templates/banners/sidebar-banner/template";
	
	wp_enqueue_style( $template_id, get_template_directory_uri() . '/' . $template_path.'.css', array(), null, 'all');  
	
	get_template_part( $template_path, null, array(
		'title' => $title,
		'subtitle' => $subtitle,
		'button_text' => $btn_text,
		'button_link' => $btn_link, 
        'image' => $image
	) );    
}
?>