<?php 
// available fields
[
'title'           => $title,
'subtitle'        => $subtitle,
'image'           => $image,
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



<section class="fees-charges-info block">
	<div class="container">
		<div class="row">

			<div class="col-md-6 col-lg-7 order-2 order-md-1 d-flex flex-column justify-content-center" data-aos="fade-right">

				<h2 class="text-gradient--dark text-gradient--light">

					<?php echo $title; ?>

				</h2>

				<div class="block__text">

					<?php echo $inner; ?>

				</div>

			</div>

			<div class="col-md-6 col-lg-5 block__img align-item align-self-center order-1 order-md-2" data-aos="fade-left">

				<img src="<?php echo wp_get_attachment_image_url( $image , 'full' ); ?>" alt="" />

			</div>
		</div>
	</div>
</section>