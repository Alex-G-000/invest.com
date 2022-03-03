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




<section class="cta-explore block <?php echo $some_class; ?>">
    <div class="container">     
        <div class="row">

            <div class="col-12 col-lg-6 cta-explore__image-col order-2 order-lg-1">
                <div class="cta-explore__image" data-aos="fade-up">
                </div>                
            </div>

            <div class="col-12 col-lg-6 cta-explore__content-col  order-1 order-lg-2">
                <div class="cta-explore__content">
                    <div class="cta-explore__header section-header">
                        <h2 class="section-header__header"><?php echo $title; ?></h2>
                        <p class="section-header__text"  data-aos="fade-in"><?php echo $subtitle; ?></p>
                    </div>
                    <a href="<?php echo $button_link; ?>" class="cta-explore__button btn btn-secondary"><?php echo $button_text; ?></a>                            
                </div>                
            </div>            

        </div>
    </div>
</section>

