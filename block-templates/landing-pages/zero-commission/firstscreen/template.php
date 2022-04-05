<?php 
// available fields
[
'title'           => $title,
'subtitle'        => $subtitle,
'button_link'     => $button_link,
'button_text'     => $button_text,
'image'           => $image,
'some_class'      => $some_class,
'some_id'         => $some_id,
'inner'           => $inner,
'template_path'   => $template_path,
'template_id'     => $template_id,
] = $args;
?>

<section class="zc-fistscreen block skewed-section mb-0">  
    <div class="block__bg" style="background-image: url('<?php echo wp_get_attachment_image_url( $image , 'full' ); ?>');"></div>  
    <div class="container">       
        <div class="row">
            <div class="col-12 col-md-6 block__content-col">
                <div data-aos="fade-right">
                    
                    <h1 class="block__title text-white mb-3">
                        <?php echo $title; ?>
                    </h1>

                    <h3 class="block__subtitle text-white mb-5">
                        <?php echo $subtitle; ?>
                    </h3>

                    <div class="w-100 text-center text-md-left">
                        <a href="<?php echo $button_link; ?>" class="block__btn btn btn-secondary">
                            <?php echo $button_text; ?>
                        </a>
                    </div>
                        
                </div>
            </div>
            
            <div class="col-12 col-md-6 block__image-col">
                <div class="block__image-under" data-aos="fade-in">
                    <svg width="2232" height="1490" viewBox="0 0 2232 1490" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <ellipse cx="1115.74" cy="744.601" rx="450.79" ry="227.746" transform="rotate(-13.7459 1115.74 744.601)" fill="white" fill-opacity="0.06"/>
                    <ellipse cx="1115.74" cy="744.601" rx="693.677" ry="350.457" transform="rotate(-13.7459 1115.74 744.601)" fill="white" fill-opacity="0.04"/>
                    <ellipse cx="1115.74" cy="744.601" rx="1022.29" ry="516.48" transform="rotate(-13.7459 1115.74 744.601)" fill="white" fill-opacity="0.06"/>
                    </svg>
                </div>
                <div class="block__image" data-aos="fade-left">
                    <?php echo $inner; ?>                 
                </div>
                
            </div>

        </div>
    </div>
</section>



