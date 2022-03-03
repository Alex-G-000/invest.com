<?php
//*template name: faq answers*//

 get_header(); 
 wp_enqueue_script('faq-answers');
 ?>

<div id="primary" class="content-area" >

	<main id="main" class="site-main faq-page" >

		<?php if (get_field('header-settings_show-header')) { ?>
		<header class="faq-page__header page-header bg-dark text-center">
			<div class="container">				
				<h1 class="page-header__title text-gradient--dark text-white--light">
					<?php 
					if (get_field('header-settings_page-title')) { 
						the_field('header-settings_page-title');
					} else {
						the_title(); 
					}						
					?>
				</h1>
				<?php if (get_field('header-settings_show-search')) { ?>
				<div class="page-header__search">
					<?php 		
						get_template_part( 'template-parts/search/form', 'page-header', array(
							'id' => 'searchform-faq',							
						));
					?>
				</div>
				<?php } ?>
			</div>
		</header>
		<?php } ?>

		<div class="faq-page__body">
			<div class="container">
				<div class="row">		
					<div class="col-12 col-md-3">						
						<div class="nav flex-column faq-tabs bg-dark bg-dark-1--light" id="faq-tabs" role="tablist" aria-orientation="vertical">
							<?php 
							$terms = get_terms([
								'taxonomy' => 'faq_category',
								'hide_empty' => true,
							]);	
							$count = 0;
							foreach ($terms as $term) { 
								$faq_cat_id = $term->term_id;
								$faq_cat_name = $term->name;
								$count +=1;
							?>
							<a 
							class="nav-link <?php if ($count === 1) { echo 'active'; } ?>" 
							id="faq-nav-<?php echo $faq_cat_id; ?>-tab" 
							data-toggle="tab" 
							href="#faq-nav-<?php echo $faq_cat_id; ?>" 
							role="tab" 
							aria-controls="faq-nav-<?php echo $faq_cat_id; ?>" 
							aria-selected="<?php if ($count === 1) { echo 'true'; } else { echo 'false'; } ?>">
								<?php echo $faq_cat_name; ?>
							</a>
							<?php } ?>
						</div>
					</div>

					<div class="col-12 col-md-9">
						<div class="tab-content faq-tabContent bg-dark bg-dark-1--light" id="faq-tabContent">							
							<?php 
							$count = 0;
							foreach ($terms as $term) { 
								$faq_cat_id = $term->term_id;
								$faq_cat_name = $term->name;
								$count +=1;
							?>
							<div class="tab-pane fade <?php if($count === 1) { echo 'show active'; } ?>"
								id="faq-nav-<?php echo $faq_cat_id; ?>" 
								role="tabpanel" 
								aria-labelledby="faq-nav-<?php echo $faq_cat_id; ?>-tab">
									<h2 class="faq-tabContent__title">
										<?php echo $faq_cat_name; ?>
									</h2>
							<?php
								$query = new WP_Query( array(
									'post_type' => 'faq',   
									'posts_per_page' => -1,       
									'tax_query' => array(
										array(
											'taxonomy' => 'faq_category',   
											'field' => 'term_id',           	
											'terms' => $faq_cat_id 
										)
									)
								) );
								while ( $query->have_posts() ) : $query->the_post();
								?>								
									<div class="faq-answer" id="faq-answer-<?php echo get_the_ID(); ?>">
										<h4 class="faq-answer__title">
											<?php the_title(); ?>
										</h4>
										<div class="faq-answer__text text-blog--dark text-gray--light">
											<?php the_content(); ?>
										</div>
										<a href="<?php echo get_post_permalink(); ?>" class="faq-answer__readmore text-gradient">
											Read more
										</a>
									</div>					
								<?php
								endwhile;				
								wp_reset_query();
								?>
								</div>
							<?php } ?>
						
						</div>
					</div>
							
				</div>
			</div>
		</div>


		<?php 
		$the_content = apply_filters('the_content', get_the_content());
		if ( !empty($the_content) ) {
			echo '<div class="faq-page__content">';
			echo $the_content;
			echo '</div>';
		}
		?>	
	</main>
</div><!-- .content-area -->

<?php
get_footer();