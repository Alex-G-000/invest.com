<?php

 get_header(); 
 
 wp_enqueue_script('search-page');

 $s=get_search_query(); 
 $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;

 $args_posts = array(
    'posts_per_page' => 5,    
     's' => $s,
     'paged' => $paged
    );

 $query_results = new WP_Query($args_posts);
 $total = $query_results->found_posts; 
?>

<div id="primary" class="content-area" >

	<main id="main" class="site-main search-page" >
		
		<header class="search-page__header page-header bg-dark text-center">
			<div class="container">				
				<h1 class="page-header__title text-gradient--dark text-white--light">
                    Search
				</h1>				
				<div class="page-header__search">
                    <?php get_template_part( 'template-parts/search/form', 'page-header', array( 'id' => 'searchform-searchresults' ));	?>
				</div>				
			</div>
		</header>
		

		<div class="search-page__body mb-section mt-section">
			<div class="container">            
				<div class="text-left mb-5 text-gray"><?php echo $total; ?> results found</div>
				<div class="search-results">
					<?php	
                    if ( have_posts() ) {                    		
                        while ( $query_results->have_posts() ) {
                            $query_results->the_post();
                            get_template_part( '/template-parts/search/loop-result', null, array() );
                        }

                        $big = 999999999; 
                        $pagi_args = array(
                            'base'    => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                            'current' => max( 1, get_query_var('paged') ),
                            'prev_next'    => True,
                            'prev_text'    => __('< Back'),
                            'next_text'    => __('Next >'),
                            'total'   => $query_results->max_num_pages
                        );
                        echo '<div class="pagination">';
                        echo paginate_links( $pagi_args ); 
                        echo '</div>'; 

					    wp_reset_postdata();
                    } else { ?>
                    <div class="row">
                        <div class="col-12">
                            Nothing found
                        </div>
                    </div>

                    <?php } ?>	
				</div>
			
			</div>
		</div>

		
	</main>
</div><!-- .content-area -->

<?php
get_footer();