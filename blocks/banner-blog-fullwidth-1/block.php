<?php 
if (get_field('after-post-content-banner_enable', 'options')) {

	$args = get_field('after-post-content-banner', 'options');

	if (block_value('banner-title')) {
		$title = block_value('banner-title');
	} else {
		$title = $args['title'];
	}
	
	if (block_value('banner-subtitle')) {
		$subtitle = block_value('banner-subtitle');
	} else {
		$subtitle = $args['subtitle-text'];
	}
	
	if (block_value('button-text')) {
		$btn_text = block_value('button-text');
	} else {
		$btn_text = $args['button_text'];
	}
	
	if (block_value('button-link')) {
		$btn_link = block_value('button-link');
	} else {
		$btn_link = $args['link'];
	}

    if (block_value('image')) {
		$image = block_value('image');
	} else {
		$image = $args['banner-image'];
	}	
	
	$template_id = 'after-post-content-banner';
	$template_path = "template-parts\banners\after-article\banner";
	
	wp_enqueue_style( $template_id, $template_path.'.css', array(), null, 'all');  
	
	get_template_part( $template_path, null, array(
		'title' => $title,
		'subtitle' => $subtitle,
		'button_text' => $btn_text,
		'button_link' => $btn_link, 
        'image' => $image
	) );    
}
?>