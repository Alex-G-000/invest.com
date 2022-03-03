<?php
//*template name: document*//

 get_header('document'); ?>

<div id="primary" class="content-area" >
	<main id="main" class="site-main" >
		
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

		<div class="container py-5">
			<?php the_content(); ?>
		</div>
	</main>
</div><!-- .content-area -->


<?php 
	if ( getUrlParam('mobile') ) { 
 		wp_footer(); 
	} else {
		get_footer();
	}
 ?>