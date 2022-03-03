<?php 
if (!empty($args)) {
	if ($args['title']) {
		$title = $args['title'];
	} else {
		$title = get_field('after-post-content-banner_title', 'options');
	}

	if ($args['subtitle']) {
		$subtitle = $args['subtitle'];
	} else {
		$subtitle = get_field('after-post-content-banner_subtitle-text', 'options');
	}

	if ($args['button_link']) {
		$button_link = $args['button_link'];
	} else {
		$button_link = get_field('after-post-content-banner_link', 'options');
	}

	if ($args['button_text']) {
		$button_text = $args['button_text'];
	} else {
		$button_text = get_field('after-post-content-banner_button_text', 'options');	
	}		
    
    if ($args['image']) {
		$image = $args['image'];
	} else {
		$image = get_field('after-post-content-banner_banner-image', 'options');	
	}	
	
	
} else {
	$title = get_field('after-post-content-banner_title', 'options');
	$subtitle = get_field('after-post-content-banner_subtitle-text', 'options');
	$button_link = get_field('after-post-content-banner_button_link', 'options');
	$button_text = get_field('after-post-content-banner_button_text', 'options');		
    $image = get_field('after-post-content-banner_banner-image', 'options');		
}

//wp_enqueue_style( 'after-post-content-banner', get_template_directory_uri() . '/scss/template-parts/blog/banner-after-blog/banner.scss', array(), null, 'all');

?>

<section class="block banner-blog-fullwidth-1">
        <div class="banner-blog-fullwidth-1__inner">
			<div>
				<h2 class="text-white"><?php echo $title; ?></h2>
				<p class="text-white"><?php echo $subtitle; ?></p>
			</div>
			<img src="<?php echo $image; ?>" alt="">
			<a href="<?php echo $button_link; ?>" class="btn btn-secondary"><?php echo $button_text; ?></a>
        </div>
</section>
