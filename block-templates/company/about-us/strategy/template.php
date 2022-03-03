<?php 
// available fields
[
'title'           => $title,
'subtitle'        => $subtitle,
'image'           => $image,
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

<section class="company-about-us-strategy block <?php echo $some_class; ?>">
    <div class="container">        
        <div class="row">
            <div class="col-12 col-lg-5 d-none d-lg-block">
                <img src="<?php echo wp_get_attachment_image_url( $image, 'full'); ?>" alt="" class="w-100">
            </div>
            <div class="col-12 col-lg-7">
                <h2 class="section-header__header text-gradient <?php echo $some_class; ?>"><?php echo $title; ?></h2>
                <div class="company-about-us-strategy__inner" data-aos="fade-in">
                    <?php echo $inner; ?>
                </div>
            </div>
        </div>        
    </div>
</section>