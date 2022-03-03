<?php 
// available fields
[
'title'           => $title,
// 'subtitle'        => $subtitle,
'some_class'      => $some_class,
'some_id'         => $some_id,
'inner'           => $inner,
'template_path'   => $template_path,
'template_id'     => $template_id,
] = $args;
?>

<?php wp_enqueue_style('swiper'); ?>
<?php wp_enqueue_script('homepage-about-us'); ?>

<section class="about-us <?php echo $some_class; ?>">
    <div class="container">

        <div class="about-us__header section-header">
            <h2 class="section-header__header"><?php the_field('homepage_reviews_section_title', 'options'); ?></h2>
        </div>

        <div class="about-us__slider swiper">
            <div class="about-us__slider-wrapper swiper-wrapper">

                

                <?php  
                if( have_rows('homepage_reviews_reviews', 'options') ):
                while( have_rows('homepage_reviews_reviews', 'options') ): the_row();       
                    ?>

                        <div class="about-us__review review swiper-slide">
                            <div class="row review__wrap">
                                <div class="col-md-6 review__image-wrap">
                                    <?php 
                                        $image = wp_get_attachment_image_src(get_sub_field('preview_image'),'full');
                                    ?>
                                    <img src="<?php echo $image[0]; ?>" alt="review" class="review__image">
                                </div>
                                <div class="col-md-6 review__content-wrap">
                                    <div class="review__content">
                                        <h6 class="review__name"><?php the_sub_field('name'); ?></h6>
                                        <p class="review__country"><?php the_sub_field('country'); ?></p>
                                        <div class="review__rating">
                                            <?php 
                                                $count = get_sub_field('rating');
                                                while($count > 0.5){
                                                    ?>
                                                        <i class="icon-star"></i>
                                                    <?php
                                                    $count--;
                                                }
                                                if($count == 0.5){
                                                    ?>
                                                        <i class="icon-star-half"></i>
                                                    <?php
                                                }
                                            ?>
                                        </div>
                                        <p class="review__text"><?php the_sub_field('text'); ?></p>
                                    </div>
                                </div>
                            </div>                   
                        </div>

                    <?php
                     
                endwhile;  
                endif; 
            ?>                
            </div>
            <div class="about-us__slider-nav">
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>

        <div class="about-us__thumb-slider thumb-slider swiper">
            <div class="thumb-slider__wrapper swiper-wrapper">

            <?php  
                if( have_rows('homepage_reviews_reviews', 'options') ):
                while( have_rows('homepage_reviews_reviews', 'options') ): the_row();       
                    ?>
                        <?php 
                            $image = wp_get_attachment_image_src(get_sub_field('preview_image'),'full');
                        ?>
                        <div class="thumb-slider__image-wrap swiper-slide">
                            <img src="<?php echo $image[0]; ?>" alt="review" class="thumb-slider__image">
                        </div>

                    <?php
                     
                endwhile;  
                endif; 
            ?>   
            </div>
        </div>

    </div>
</section>


