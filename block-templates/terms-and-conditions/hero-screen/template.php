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


<section class="terms-and-conditions hero">
	<div class="container">
		<div class="row">

			<div class="col-md-6 col-lg-7 hero__content-col">

				<div data-aos="fade-right" data-aos-duration="1200">

					<h1 class="hero__title text-gradient--dark">

						<?php echo $title; ?>

					</h1>

					<h3 class="hero__subtitle">

						<?php echo $subtitle; ?>

					</h3>

				</div>

			</div>

			<div class="col-md-6 col-lg-5 hero__image-col">

				<div class="hero__image-col-box">
					<div class="hero__image" data-aos="fade-in">
						<?php echo $inner; ?>
					</div>
				</div>

			</div>

		</div>
	</div>
</section>