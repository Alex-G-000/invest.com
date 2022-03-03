<?php

 get_header(); ?>

<?php wp_enqueue_script('blog-category-page'); ?>
<?php wp_enqueue_style('swiper'); ?>

<?php 
	$category = get_queried_object();
	$category_id = $category->term_id;
	$categoryCounter = 0;
	$categoryMax = get_category( $category_id )->count;
?>

<div id="primary" class="content-area" >
    <main id="main" class="blog-main" >
        <div class="container">
			<div class="archive__page-title category-page-title category-page-title--underline">
				<h1 class=" category-page-title__title text-gradient--dark"><?php single_cat_title('' , true ); ?></h1>
			</div>

			<section class="latest-fullwidth">			
				<div class="latest-fullwidth__slider swiper">
					<div class="swiper-wrapper">
					<?php										
					$query_latest = new WP_Query(array(
						'posts_per_page' => 3,
						'post_type' => 'post',
						'orderby' => 'date',
						'order'   => 'DESC',
						'category__in' => $category_id
					));
					while ( $query_latest->have_posts() ) {
						$query_latest->the_post();
						$categoryCounter = $categoryCounter + 1;
						get_template_part( 'template-parts/blog/article-loops/latest-fullwidth' );
					}
					wp_reset_postdata();
					?>
					</div>
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
						'order'   => 'DESC',
						'category__in' => $category_id
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
				<div class="section-header">
					<h2 class="section-header__header text-gray">All articles</span></h2>            
				</div>
				<div class="row ajax-container">
					<?php	

					$query_all = new WP_Query(array(
						'posts_per_page' => 6,
						'post_type' => 'post',
						'orderby' => 'date',
						'order'   => 'DESC',
						'category__in' => $category_id,
						'offset' => $categoryCounter
					));
					while ( $query_all->have_posts() ) {
						$query_all->the_post();
						$categoryCounter = $categoryCounter + 1;
						?>
						<div class="col-12 col-md-6 col-lg-4 mb-5">
							<?php get_template_part( 'template-parts/blog/article-loops/all-articles' ); ?>
						</div>
					<?php }
					wp_reset_postdata();
					?>	
				</div>
				<?php if($categoryCounter < $categoryMax): ?>
					<div class="row">					
						<button id="loadmore-category" class="btn btn-loadmore btn-outline-secondary btn-outline-black--light" data-category="<?php echo $category_id; ?>" data-max="<?php echo $categoryMax; ?>" data-counter="<?php echo $categoryCounter; ?>">Read More <i class="icon-down-open"></i></button>
					</div>
				<?php endif; ?>
			</section>	
			
		</div>
	</main>
</div><!-- .content-area -->



<?php
get_footer();