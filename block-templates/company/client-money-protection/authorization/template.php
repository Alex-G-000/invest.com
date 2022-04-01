<?php 
// available fields
[
'title'           => $title,
'subtitle'        => $subtitle,
'inner'           => $inner,
] = $args;
?>


<section class="cmp-authorization">
	<div class="container">
		<div class="row">

			<div class="cmp-authorization__image col-12 col-md-6 col-lg-5 order-md-last text-center align-self-center" data-aos="fade-left">
				<?php echo $inner; ?>
			</div>			

			<div class="col-12 col-md-6 col-lg-6 offset-lg-1 align-self-center mb-5 mb-lg-0">
				<h2 class="cmp-authorization__title text-gradient--dark mb-4" data-aos="fade-in">
					<?php echo $title; ?>
				</h2>
				<h3 class="cmp-authorization__subtitle text-gray--dark" data-aos="fade-in">
					<?php echo $subtitle; ?>
				</h3>
			</div>			

		</div>
	</div>
</section>