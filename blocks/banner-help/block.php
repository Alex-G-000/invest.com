<?php 
if (get_field('help-banner-support_enable', 'options')) {

	$args = get_field('help-banner-support', 'options');

	if (block_value('banner-title')) {
		$title = block_value('banner-title');
	} else {
		$title = $args['title'];
	}
	
	if (block_value('banner-subtitle')) {
		$subtitle = block_value('banner-subtitle');
	} else {
		$subtitle = $args['subtitle'];
	}
	
	if (block_value('button-text')) {
		$btn_text = block_value('button-text');
	} else {
		$btn_text = $args['button-text'];
	}
	
	if (block_value('button-link')) {
		$btn_link = block_value('button-link');
	} else {
		$btn_link = $args['button-link'];
	}

	if (block_value('add-class')) {
		$add_class = block_value('add-class');
	} else {
		$add_class = '';
	}
	
	
	$template_id = 'banner-help-support';
	$template_path = "block-templates/banners/banner-help/template";
	
	wp_enqueue_style( $template_id, get_template_directory_uri() . '/' . $template_path.'.css', array(), null, 'all');  
	
	get_template_part( $template_path, null, array(
		'title' => $title,
		'subtitle' => $subtitle,
		'button_text' => $btn_text,
		'button_link' => $btn_link,    
		'some_class' => $add_class,    
	) );    
}
?>



