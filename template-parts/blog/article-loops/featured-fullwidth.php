<div class="featured-fullwidth-slider__item swiper-slide bg-dark--light bg-dark-1--dark">
    <div class="featured-fullwidth-slider__row row">
        
        <div class="featured-fullwidth-slider__col col-12 col-md-6">
            <div class="featured-fullwidth-slider__text post-item">
                <div class="post-item__date text-gray--dark text-white--light">
                    <?php echo get_the_date(); ?>
                </div>
                <h2 class="post-item__title  text-white--light" onclick="window.location.href='<?php the_permalink(); ?>';">
                    <?php the_title(); ?>
                </h2>
                <div class="post-item__exerpt text-gray--dark  text-white--light">
                    <?php echo excerpt(20); ?>
                </div>
                <div class="post-item__readmore">
                    <a href="<?php the_permalink(); ?>" class="btn btn-secondary btn-outline-secondary--dark">
                        Read more                         
                    </a>
                </div>
            </div>            
        </div>

        <div class="featured-fullwidth-slider__col col-12 col-md-6">
            <img src="<?php the_post_thumbnail_url( 'full' ); ?>" alt="" class="featured-fullwidth-slider__thubnail rounded"  onclick="window.location.href='<?php the_permalink(); ?>';">
        </div>

    </div>
</div>

  