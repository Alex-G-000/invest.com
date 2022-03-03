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


<section class="zc-footer-cta skewed-section block">
    <div class="block__bg" style="background-image: url('<?php echo wp_get_attachment_image_url( $image , 'full' ); ?>');"></div> 

    <div class="container">

        <div class="row">
            <div class="col-12">
                <h2 class="block__title text-center text-white mb-5" data-aos="fade-in">
                    <?php echo $title; ?>
                </h2>
            </div>
        </div>

        <div class="row">
            <div class="col-12 text-center">
                <a href="<?php echo $button_link; ?>" class="block__btn btn btn-secondary">
                        <?php echo $button_text; ?>
                </a>
            </div>
        </div>

    </div>
</section>



