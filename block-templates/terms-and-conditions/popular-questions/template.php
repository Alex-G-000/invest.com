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


<section class="terms-and-conditions-pop-ques">
	<div class="container">
		<h2 class="terms-and-conditions-pop-ques__title text-gradient--dark"><?php echo $title; ?>
		</h2>
		<div class="row"><?php echo $inner; ?></div>
	</div>
</section>