<?php 
// available fields
[
'title'           => $title,
'some_class'      => $some_class,
'some_id'         => $some_id,
'inner'           => $inner,
'template_path'   => $template_path,
'template_id'     => $template_id,
] = $args;
?>

<?php 
wp_enqueue_script("global-stocks-slider");  
wp_enqueue_style("swiper");  
?>



<section class="global-stocks block">    
    <div class="container">
        <div class="block__content">
            <?php if( !empty($title) ) { ?>
            <div class="blog-news__header section-header">
                <h2 class="section-header__header text-center"><?php echo $title; ?></h2>
            </div>
            <?php } ?>
            <div class="global-stocks__slider swiper">
                <div class="swiper-wrapper mb-4">
                    <?php echo $inner; ?>
                </div>
                <!-- <div class="swiper-scrollbar"></div> -->
            </div>            
        </div>
        
    </div>
</section>



