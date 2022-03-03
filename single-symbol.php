<?php

 get_header(); ?>

<?php 

$symbol = get_field('symbol');


?>
<div id="primary" class="content-area" >
	<main id="main" class="site-main instrument" > 		
		<div class="container">
			<div class="row py-4">
				<div class="col-12 col-md-6">

					<div class="instrument__data instrument-data mb-0">
						<?php get_template_part( 'template-parts/tradeview-widjets/single-ticker/widjet', null, array('symbol' => $symbol)); ?>
					</div>

					<div class="instrument__buttons instrument-buttons pb-5 mb-5">
						<div class="instrument-buttons__small mb-3">
							<a href="#" class="instrument-buttons__favoutite"><i class="icon-star-empty"></i> Add favorite</a>
							<a href="#" class="instrument-buttons__alert"><i class="icon-bell"></i> Set alert</a>
						</div>
						<div class="instrument-buttons__main">
							<button class="instrument-buttons__button btn btn-primary btn-lg mr-3">SELL</button>
							<button class="instrument-buttons__button btn btn-outline-primary btn-lg">BUY</button>
						</div>
					</div>

					<div class="instrument__description instrument-description mb-5">
						<?php get_template_part( 'template-parts/tradeview-widjets/company-profile/widjet', null, array('symbol' => $symbol)); ?>
					</div>

					<div class="instrument__posts mb-5">
						<div class="row">
							<div class="col-12">
								<h3 class="mb-2 pb-2 --underline">
									Latest news
								</h3>
							</div>

							<?php						

							$post_count = 0;
							$query = new WP_Query(array(
								'posts_per_page' => 3,
								'post_type' => 'post',
								'meta_query' => array(									
									'current_symbol' => array(
										'key' => 'symbol',
										'value' => $symbol
										// 'compare' => 'LIKE'
									)
								),
								'orderby' => array(
									'date' => 'DESC'									
								),							
							));
							while ( $query->have_posts() ) {
								$query->the_post();
								echo '<div class="col-12">';
								get_template_part( 'template-parts/blog/article-loops/horizontal-small', null, array('symbol' => $symbol) );
								echo '</div>';	
								$post_count=+1;							
							}   
							wp_reset_postdata();

							if ( $post_count < 3 ) {
								$query_other = new WP_Query(array(
									'posts_per_page' => 3 - $post_count,
									'post_type' => 'post',
									'meta_query' => array(									
										'current_symbol' => array(
											'key' => 'symbol',
											'value' => $symbol,
											'compare' => '!='
										)
									),
									'orderby' => array(
										'date' => 'DESC'									
									),							
								));
								while ( $query_other->have_posts() ) {
									$query_other->the_post();
									echo '<div class="col-12">';
									get_template_part( 'template-parts/blog/article-loops/horizontal-small', null, array('symbol' => $symbol) );
									echo '</div>';															
								}   
								wp_reset_postdata();
							}
							


							?>

							<div class="col-12 text-center mt-3">
								<a href="<?php echo home_url() . '/blog/'; ?>" class="btn btn-outline-secondary--dark btn-outline-black--light">
									More news
								</a>
							</div>
						</div>						
					</div>

				</div>


				<div class="col-12 col-md-6">				

					<div class="card mb-5">
						<div class="card-body">
							<h3 class="text-white--dark">Graph</h3>
							<div class="instrument__widjet-card">
								<?php get_template_part('template-parts/tradeview-widjets/market-overview/widjet-instrument-single', null, array('symbol' => $symbol)); ?>
							</div>
						</div>
					</div>

					<div class="card mb-5">
						<div class="card-body">
							<h3 class="text-white--dark">Info</h3>
							<div class="instrument__info-card row">
								<?php get_template_part( 'template-parts/tradeview-widjets/fundamental-data/widjet', null, array('symbol' => $symbol)); ?>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>		
	</main>
</div><!-- .content-area -->



<?php
get_footer();