<?php 
	//*template name: Landing page*//
    get_header('landing');
?>

<div id="primary" class="content-area" >
	<main id="main" class="site-main" > 	

			<?php the_content(); ?>			
			
	</main>
</div><!-- .content-area -->

<?php
    get_footer('landing');
?>