<?php 
// available fields
[
'title'           => $title,
'subtitle'        => $subtitle,
'button_link'     => $button_link,
'button_text'     => $button_text,
'some_class'      => $some_class,
'some_id'         => $some_id,
'inner'           => $inner,
'template_path'   => $template_path,
'template_id'     => $template_id,
] = $args;
?>

<?php 
// wp_enqueue_script("script-id");  // load previously registered script
// wp_enqueue_style('style-id'); // load some other registered styles
?>

<div class="row align-items-center">
	<div class="col text-center">
		<a class="d-inline-block btn btn-secondary btn-outline-black--light my-3" href="<?php inv_show_download_link(); ?>">
			<?php echo $button_text ?> </a>
		<span class="d-block text-center"><?php echo $subtitle ?></span>
	</div>
</div>