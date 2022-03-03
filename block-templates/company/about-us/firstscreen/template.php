<?php 
// available fields
[
'title'           => $title,
'subtitle'        => $subtitle,
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



<section class="company-about-us-firstscreen block">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-6 company-about-us-firstscreen__content-col">
				<div class="company-about-us-firstscreen__header section-header">
					<h1 class="section-header__header text-gradient"><?php echo $title; ?></h1>
					<p class="section-header__text" data-aos="fade-in"><?php echo $subtitle; ?></p>
				</div>
			</div>
			<div class="col-12 col-lg-6 company-about-us-firstscreen__image-col d-flex">
				<div class="company-about-us-firstscreen__image">
					<?php echo $inner; ?>
				</div>
			</div>
		</div>
	</div>
</section>