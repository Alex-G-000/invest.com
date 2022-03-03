<div class="top-articles__item swiper-slide">
    <div class="top-articles__item-inner post-item">
        <div class="post-item__image-wrap">
            <img src="<?php the_post_thumbnail_url( 'medium' ); ?>" alt="" class="post-item__image rounded"  onclick="window.location.href='<?php the_permalink(); ?>';">
        </div>
        <div class="post-item__text-wrap">                       
            <h4 class="post-item__title" onclick="window.location.href='<?php the_permalink(); ?>';">
                <?php the_title(); ?>
            </h4>
            <div class="post-item__exerpt text-gray">
                <?php echo excerpt(16); ?>
            </div>                       
        </div>
    </div>
</div>
