<?php 
// available fields
[
'title'           => $title,
'some_class'      => $some_class,
'some_id'         => $some_id,
'inner'           => $inner,
'template_path'   => $template_path,
'template_id'     => $template_id,
] = $args;
?>

<?php 
wp_enqueue_script("homepage-blog-news");  // load previously registered script
wp_enqueue_style('swiper'); // load some other registered styles
?>

<section class="blog-news block <?php echo $some_class; ?>">
    <div class="container">
		<?php if( !empty($title) ) { ?>
        <div class="blog-news__header section-header">
            <h2 class="section-header__header"><?php echo $title; ?></h2>
        </div>
		<?php } ?>
        <div class="blog-news__row">
                <div class="blog-news__slider swiper">
					<div class="swiper-wrapper">
					<?php
					$query_top = new WP_Query(array(
						'posts_per_page' => 5,
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
        </div>
    </div>
</section>



