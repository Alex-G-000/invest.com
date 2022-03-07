<?php 
// available fields
[
'title'           => $title,
'subtitle'        => $subtitle,
'some_class'      => $some_class,
'some_id'         => $some_id,
'inner'           => $inner,
'image'           => $image,
'template_path'   => $template_path,
'template_id'     => $template_id,
] = $args;

$image_obj = wp_get_attachment_image( $image, 'full');
?>



<section class="trust-thirdscreen block mb-0">    
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-header text-center">
                    <h2 class="section-header__header"><?php echo $title; ?></h2>
                    <p class="section-header__text" data-aos="fade-up"><?php echo $subtitle; ?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-7 d-flex flex-column justify-content-between mb-5 mb-lg-0">
                <?php echo $inner; ?>                
            </div>
            <div class="col-12 col-lg-5">
               <?php echo $image_obj; ?> 
            </div>
        </div>
    </div>
</section>



