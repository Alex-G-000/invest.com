<?php 
// available fields
[
'title'           => $title,
'subtitle'        => $subtitle,
'inner'           => $inner,
'some_class'      => $some_class,
] = $args;
?>



<div class="col-12 col-lg-6">
	<div class="block-chain-box-content">
		<div class="block-chain-box-content__img">
			<i class="icon-ok-squared"></i>
		</div>
		<h4 class="block-chain-box-content__title mt-2 mb-1"><?php echo $title; ?></h4>
		<p class="block-chain-box-content__text"><?php echo $subtitle; ?></p>
	</div>
</div>