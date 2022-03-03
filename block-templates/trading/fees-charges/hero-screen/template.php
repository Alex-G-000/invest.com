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


<section class="fees-charges hero bg-dark">
	<div class="container">
		<div class="row">

			<div class="col-md-6 col-lg-7 hero__content-col order-2 order-md-1">

				<div data-aos="fade-right" data-aos-duration="1200">

					<h1 class="hero__title text-gradient--dark text-white--light">

						<?php echo $title; ?>

					</h1>

					<h3 class="hero__subtitle text-gradient--dark text-white--light">

						<?php echo $subtitle; ?>

					</h3>

					<p class="hero__text text-white--light">

						<?php echo $text; ?>

					</p>

				</div>

			</div>

			<div class="col-md-6 col-lg-5 hero__image-col order-1 order-md-2">

				<div class="hero__image-col-box text-center">
					<div class="hero__image" data-aos="fade-in">
						<?php echo $inner; ?>
					</div>
				</div>

			</div>

		</div>
	</div>
</section>