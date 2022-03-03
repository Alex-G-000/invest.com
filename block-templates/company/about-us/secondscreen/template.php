<?php 
// available fields
[
'title'           => $title,
'subtitle'        => $subtitle,
'some_class'      => $some_class,
'some_id'         => $some_id,
'inner'           => $inner,
'template_path'   => $template_path,
'template_id'     => $template_id,
'image'     => $image,
] = $args;
?>

<?php 
// wp_enqueue_script("script-id");  // load previously registered script
// wp_enqueue_style('style-id'); // load some other registered styles
?>



<section class="company-about-us-secondscreen block">
    <div class="container"> 
        <?php if (!empty($title)){ ?>
        <div class="row">
            <div class="col-12 company-about-us-secondscreen__header">
                <h2 class="section-header__header text-gradient"><?php echo $title; ?></h2>
            </div>
        </div>
        <?php } ?>
        <div class="row">
            <div class="col-12 col-lg-7 company-about-us-secondscreen__items">
                <?php echo $inner; ?>
            </div>
            <div class="col-5 d-none d-lg-block company-about-us-secondscreen__image">
                <div class="company-about-us-secondscreen__image-cont">
                    <img src="<?php echo wp_get_attachment_image_url( $image, 'full'); ?>" alt="">
                </div>
            </div>
            
        </div>
    </div>
</section>