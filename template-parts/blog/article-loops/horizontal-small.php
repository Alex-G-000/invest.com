<?php 

    $aos = 'data-aos="fade-in"';
    if(isset($args['aos-false'])){
        $aos = '';
    }
?>

<div class="horizontal-small mb-3">
    <div class="horizontal-small__inner d-flex justify-content-between" <?php echo $aos; ?>>

        <div class="horizontal-small__image-wrap mr-3">
            <img src="<?php the_post_thumbnail_url( 'medium' ); ?>" alt="" class="horizontal-small__image rounded"  onclick="window.location.href='<?php the_permalink(); ?>';">
        </div>

        <div class="horizontal-small__text-wrap">                                  
            <h4 class="horizontal-small__title mb-1" onclick="window.location.href='<?php the_permalink(); ?>';">
                <?php the_title(); ?>
            </h4>
            <div class="horizontal-small__info d-flex justify-content-between align-items-center">
                <div class="horizontal-small__date text-gray">
                    <?php echo get_the_date(); ?>
                </div>
                <a class="horizontal-small__link text-gradient" href="<?php the_permalink(); ?>">
                    Read More
                    <!-- <span>
                        <svg width="21" height="12" viewBox="0 0 21 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20.5303 6.53033C20.8232 6.23744 20.8232 5.76256 20.5303 5.46967L15.7574 0.696699C15.4645 0.403806 14.9896 0.403806 14.6967 0.696699C14.4038 0.989593 14.4038 1.46447 14.6967 1.75736L18.9393 6L14.6967 10.2426C14.4038 10.5355 14.4038 11.0104 14.6967 11.3033C14.9896 11.5962 15.4645 11.5962 15.7574 11.3033L20.5303 6.53033ZM0 6.75H20V5.25H0V6.75Z" fill="white"/>
                        </svg>
                    </span> -->
                </a>
            </div>          
        </div>
    </div>
</div>


