<?php 
// available fields
[
'title'           => $title,
'subtitle'        => $subtitle,
// 'text'            => $text,
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

<section class="popular-markets block <?php echo $some_class; ?>">
	<div class="container">
		<div class="block__header section-header">
			<h2 class="section-header__header"><?php echo $title; ?></h2>
			<p class="section-header__text"><?php echo $subtitle; ?></p>
		</div>

		<div class="row">
			<div class="col-lg-4 block__content-col" data-aos="fade-up">
				<?php echo $inner; ?>
				<div class="block__button-wrap">
					<a href="<?php inv_show_download_link(); ?>"
						class="block__button btn btn-secondary btn-outline-black--light"><?php echo $button_text; ?>
					</a>
				</div>
					
				<div class="block__buy-links buy-links">
					<a href="<?php the_field('app-links_apple-download-link', 'options'); ?>"
						class="btn-app -store"></a>
					<a href="<?php the_field('app-links_google-download-link', 'options'); ?>"
						class="btn-app -google"></a>
				</div>
			</div>

			<div class="col-lg-8 block__data-col" data-aos="fade-up">
				<?php get_template_part('template-parts/tradeview-widjets/market-overview/widjet'); ?>
			</div>

		</div>


	</div>
</section>