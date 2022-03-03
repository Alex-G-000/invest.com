<?php get_header();  ?>

<div id="primary" class="content-area" >

	<main id="main" class="site-main faq-page" >

		<?php if (get_field('header-settings_show-header', '679')) { ?>
		<header class="faq-page__header page-header bg-dark text-center">
			<div class="container">				
				<h1 class="page-header__title text-gradient--dark text-white--light">
					<?php 
					if (get_field('header-settings_page-title', '679')) { 
						the_field('header-settings_page-title', '679');
					} else {
						the_title(); 
					}						
					?>
				</h1>
				<?php if (get_field('header-settings_show-search', '679')) { ?>
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

					<?php 
					$terms = get_terms([
						'taxonomy' => 'faq_category',
						'hide_empty' => true,
					]);	
					foreach ($terms as $term) { 
					?>

					<div class="col-12 col-md-6 col-lg-4 mb-large">				
						<?php 
						get_template_part( 'template-parts/faq/faq-list-category', null, array(
							'term_name' => $term->name,
							'term_id' => $term->term_id
						) );
						?>						
					</div>

					<?php }	?>	
							
				</div>
			</div>
		</div>
		
	</main>
</div><!-- .content-area -->

<?php
get_footer();