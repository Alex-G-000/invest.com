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




<section class="cta-video block <?php echo $some_class; ?>">
    <div class="container">     
        <div class="row">

            <div class="col-12 col-lg-6 cta-video__content-col">
                <div class="cta-video__content">
                    <div class="cta-video__header section-header">
                        <h2 class="section-header__header"><?php echo $title; ?></h2>
                        <p class="section-header__text"  data-aos="fade-in"><?php echo $subtitle; ?></p>
                    </div>
                    <a href="<?php inv_show_download_link(); ?>" class="cta-video__button btn btn-secondary"><?php echo $button_text; ?></a>
                    <div class="cta-video__buy-links buy-links">
                        <a href="<?php the_field('app-links_apple-download-link', 'options'); ?>" class="btn-app -store"></a>
                        <a href="<?php the_field('app-links_google-download-link', 'options'); ?>" class="btn-app -google"></a>
                    </div>
                </div>                
            </div>
            <div class="col-12 col-lg-6 cta-video__image-col">
                <div class="cta-video__image" data-aos="fade-up">
                </div>                
            </div>

        </div>
    </div>
</section>

