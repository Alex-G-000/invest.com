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


<section class="block-chain">
	<div class="container">

		<h2 class="block-chain__title text-center" data-aos="fade-in">

			<?php echo $title; ?>

		</h2>

		<h3 class="block-chain__subtitle text-center" data-aos="fade-in"><?php echo $subtitle; ?></h3>


		<div class="block-chain__box" data-aos="fade-up">
			<div class="row">
				<?php echo $inner; ?>
			</div>
		</div>

	</div>
</section>