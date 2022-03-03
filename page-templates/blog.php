<?php
//*template name: Blog homepage*//

 get_header(); ?>

<?php wp_enqueue_script('blog-homepage'); ?>
<?php wp_enqueue_style('swiper'); ?>			

<div id="primary" class="content-area" >
	<main id="main" class="blog-main" >
		<div class="container">
			<div class="blog__page-title blog-page-title">
				<h1 class=" blog-page-title__title text-gradient--dark">invest.com - blog</h1>
			</div>			

			<?php get_template_part( 'template-parts/blog/archive-slider-category' ); ?>							
			
			<section class="featured-fullwidth-slider">				
				<div class="featured-fullwidth-slider__slider swiper">
					<div class="swiper-wrapper">
					<?php										
					$query_featured = new WP_Query(array(
						'posts_per_page' => 3,
						'post_type' => 'post',
						'orderby' => 'date',
						'order'   => 'DESC'
					));
					while ( $query_featured->have_posts() ) {
						$query_featured->the_post();
						get_template_part( 'template-parts/blog/article-loops/featured-fullwidth' );
					}
					wp_reset_postdata();
					?>
					</div>
					<div class="featured-fullwidth-slider__pagination swiper-pagination"></div>
				</div> 				
			</section>		

			<section class="top-articles">
				<div class="top-articles__section-header section-header">
					<h2 class="section-header__header">Top articles</span></h2>            
				</div>
				<div class="top-articles__slider swiper">
					<div class="swiper-wrapper">
					<?php
					$query_top = new WP_Query(array(
						'posts_per_page' => 3,
						'post_type' => 'post',
						'orderby' => 'date',
						'order'   => 'DESC'
					));
					while ( $query_top->have_posts() ) {
						$query_top->the_post();
						get_template_part( 'template-parts/blog/article-loops/top-articles' );
					}   
					wp_reset_postdata();
					?>    
					</div>
				</div> 
			</section>
						
			<section class="all-articles">
				<div class="all-articles__section-header section-header">
					<h2 class="section-header__header text-gray">All articles</span></h2>            
				</div>
				<div class="all-articles__row row">
					<?php					
					$query_all = new WP_Query(array(
						'posts_per_page' => 6,
						'post_type' => 'post',
						'orderby' => 'date',
						'order'   => 'DESC'            
					));
					while ( $query_all->have_posts() ) {
						$query_all->the_post();
						?>
						<div class="col-12 col-md-6 col-lg-4 mb-5">
							<?php get_template_part( 'template-parts/blog/article-loops/all-articles' ); ?>
						</div>
					<?php }
					wp_reset_postdata();
					?>	
				</div>
			</section>			
			
		</div>
	</main>
</div><!-- .content-area -->



<?php
get_footer();