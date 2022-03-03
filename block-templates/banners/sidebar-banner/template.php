<?php 
if (!empty($args)) {
	if ($args['title']) {
		$title = $args['title'];
	} else {
		$title = get_field('blog-sidebar-banner_title', 'options');
	}

	if ($args['subtitle']) {
		$subtitle = $args['subtitle'];
	} else {
		$subtitle = get_field('blog-sidebar-banner_subtitle', 'options');
	}

	if ($args['button_link']) {
		$button_link = $args['button_link'];
	} else {
		$button_link = get_field('blog-sidebar-banner_button_link', 'options');
	}

	if ($args['button_text']) {
		$button_text = $args['button_text'];
	} else {
		$button_text = get_field('blog-sidebar-banner_button_text', 'options');	
	}		
    
    if ($args['image']) {
		$image = $args['image'];
	} else {
		$image = get_field('blog-sidebar-banner_banner_image', 'options');	
	}	
	
	
} else {
	$title = get_field('blog-sidebar-banner_title', 'options');
	$subtitle = get_field('blog-sidebar-banner_subtitle', 'options');
	$button_link = get_field('blog-sidebar-banner_button_link', 'options');
	$button_text = get_field('blog-sidebar-banner_button_text', 'options');		
    $image = get_field('blog-sidebar-banner_banner_image', 'options');		
}

wp_enqueue_style( 'blog-sidebar-banner', get_template_directory_uri() . '/block-templates/banners/sidebar-banner/template.css', array(), null, 'all');

?>

<section class="block sidebar-banner">
        <div class="sidebar-banner__inner">
			<div>
				<h2 class="text-white"><?php echo $title; ?></h2>
				<p class="text-white"><?php echo $subtitle; ?></p>
			</div>
			<a href="<?php echo $button_link; ?>" class="btn btn-secondary"><?php echo $button_text; ?></a>
            <img src="<?php echo $image; ?>" alt="">
        </div>
</section>
