<?php 
// available fields
[
'title'           => $title,
'subtitle'        => $subtitle,
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



<section class="cta-right <?php echo $some_class; ?>">
    <div class="container">        
        <div class="row">
            <div class="col-12 col-lg-6 cta-right__image-col">
                <div class="cta-right__image d-none d-lg-block">
                    <div class="inner-image"></div>
                </div>
            </div>
            <div class="col-12 col-lg-6 cta-right__content-col">
                <div class="cta-right__header section-header">
                    <h2 class="section-header__header"><?php echo $title; ?></h2>
                    <p class="section-header__text" data-aos="fade-in"><?php echo $subtitle; ?></p>
                </div>
                <a href="<?php inv_show_download_link(); ?>" class="cta-right__button btn btn-outline-secondary--dark btn-outline-black--light"><?php echo $button_text; ?></a>
            </div>            
        </div>        
    </div>
</section>

