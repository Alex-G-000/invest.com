<?php 
// available fields
[
'title'           => $title,
'subtitle'        => $subtitle,
'text'            => $text,
'button_link'     => $button_link,
'button_text'     => $button_text,
'small_text'      => $small_text,
'small_link_url'  => $small_link_url,
'small_link_text' => $small_link_text,
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


<section class="first-screen hero bg-dark">
	<div class="container">
		<div class="row">

			<div class="col-md-6 hero__content-col">

				<div data-aos="fade-right" data-aos-duration="1200">

					<h1 class="hero__title text-gradient--dark text-white--light">

						<?php echo $title; ?>

					</h1>

					<h3 class="hero__subtitle text-gray--dark  text-white--light">

						<?php echo $subtitle; ?>

					</h3>

					<a href="<?php inv_show_download_link(); ?>"
						class="hero__btn btn btn-secondary"><?php echo $button_text; ?></a>

				</div>

				<div class="hero__app-links app-links">

					<div class="app-links__col">

						<a href="<?php the_field('app-links_apple-download-link', 'options'); ?>"
							class="app-links__button btn-app -store"></a>

						<a href="<?php the_field('app-links_google-download-link', 'options'); ?>"
							class="app-links__button btn-app -google"></a>

					</div>

					<div class="app-links__devider"></div>

					<div class="app-links__col">

						<img src="<?php the_field('app-links_qr-code-download', 'options'); ?>" alt="google play">

					</div>

				</div>

				<a href="<?php echo $small_link_url; ?>" class="hero__link"><?php echo $small_link_text; ?></a>

			</div>

			<div class="col-md-6 hero__image-col">

				<!-- <div class="hero__under-image"></div> -->

				<div class="hero__image" data-aos="fade-left">
					<?php echo $inner; ?>
				</div>

			</div>

		</div>
	</div>
</section>