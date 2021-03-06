<?php 
// available fields
[
'title'           => $title,
'subtitle'        => $subtitle,
'inner'           => $inner,
] = $args;
?>

<?php 
// wp_enqueue_script("script-id");  // load previously registered script
// wp_enqueue_style('style-id'); // load some other registered styles
?>


<section class="cmp-second-screen">
	<div class="container">
		<div class="row">

			<div class="cmp-second-screen__image col-12 col-md-6 col-lg-5 order-md-first text-center align-self-center" data-aos="fade-right">
				<?php echo $inner; ?>
			</div>

			<div class="col-12 col-md-6 col-lg-6 offset-lg-1 align-self-center mb-5 mb-lg-0">
				<h2 class="cmp-second-screen__title text-gradient--dark mb-4" data-aos="fade-in">
					<?php echo $title; ?>
				</h2>
				<h3 class="cmp-second-screen__subtitle text-gray--dark" data-aos="fade-in">
					<?php echo $subtitle; ?>
				</h3>
			</div>

		</div>
	</div>
</section>