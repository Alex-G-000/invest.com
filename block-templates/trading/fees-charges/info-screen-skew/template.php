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



<section class="fees-charges-info-buy block bg-dark">
	<div class="container">
		<div class="row align-items-center">

			<div class="col-lg-8">

				<h2 class="text-gradient--dark text-white--light">

					<?php echo $title; ?>

				</h2>

				<h4 class="text-white--light">

					<?php echo $subtitle; ?>

				</h4>

				<div class="block__text">

					<?php echo $inner; ?>

				</div>

			</div>

			<div class="col-lg-4 block__img text-center mt-4 mt-lg-0">

				<!-- <img src="<?php echo wp_get_attachment_image_url( $image , 'full' ); ?>" alt="" /> -->
				<img class="block__img-dark" src="/wp-content/uploads/2021/12/arrows-new.png" alt="" />
				<img class="block__img-light" src="/wp-content/uploads/2021/12/arrows-new-white.png" alt="" />

			</div>

		</div>
	</div>
</section>