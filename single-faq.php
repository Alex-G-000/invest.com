<?php

 get_header(); ?>

<?php if( have_posts() ) the_post(); ?>

<div id="primary" class="content-area">
	<main id="main" class="blog-main">

		<article class="faq-article">
			<div class="container">

				<div class="faq-article__title section-header">
					<h1 class="section-header__header text-center text-md-left">
						<?php the_title(); ?>
					</h1>
				</div>

				<div class="faq-article__body">
					<?php the_content(); ?>
				</div>

			</div>
		</article>

		<?php get_template_part('block-templates/banners/banner-help/template', null); ?>

	</main>
</div>


<?php
get_footer();