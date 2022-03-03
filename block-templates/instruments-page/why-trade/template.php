<?php 
// available fields
[
'title'           => $title,
'subtitle'        => $subtitle,
'text'            => $text,
'button_link'     => $button_link,
'button_text'     => $button_text,
'some_class'      => $some_class,
'some_id'         => $some_id,
'inner'           => $inner,
'template_path'   => $template_path,
'template_id'     => $template_id,
] = $args;
?>

<?php 
// wp_enqueue_script("script-id");  // load previously registered script
// wp_enqueue_style('style-id'); // load some other registered styles
?>



<section class="instruments-why-trade block <?php echo $some_class; ?>">
    <div class="container block">
        <div class="block__header section-header">
            <h2 class="section-header__header text-center"><?php echo $title; ?></h2>
            <?php if ( !empty($subtitle) ) { ?>
                <p class="section-header__text"><?php echo $subtitle; ?></p>
            <?php } ?>
        </div>

        <div class="row">
            <div class="block__col col-md-6 col-lg-5 order-2 order-md-1""> 
                <div class="block__left">                    
                    <div class="block__text text-gray mb-5"  data-aos="fade-up">
                        <?php echo $text; ?>
                    </div>
                    <?php if ( !empty($button_text)  ) { ?>
                        <div class="block__bottons">
                            <a href="<?php inv_show_download_link(); ?>" class="block__btn btn btn-outline-secondary btn-outline-black--light"><?php echo $button_text; ?></a>
                        </div>  
                    <?php } ?>                    
                </div>        
            </div>  
            
            <div class="block__col col-md-6 col-lg-6 offset-lg-1 order-1 order-md-2 mb-5 mb-md-0"> 
                <div class="block__right px-3 py-3">
                    <div class="inner-image"></div>                    
                </div>        
            </div>   

        </div>       
        
    </div>
</section>
