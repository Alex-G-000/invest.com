<?php 
// available fields
[
'title'           => $title,
'subtitle'        => $subtitle,
'text'            => $text,
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


<div class="terms-and-conditions-pop-ques-content col-12 col-xl-10">
	<h3 class="terms-and-conditions-pop-ques-content__title">
		<?php echo $title; ?>
	</h3>
	<p class="terms-and-conditions-pop-ques-content__text"><?php echo $subtitle; ?></p>
</div>