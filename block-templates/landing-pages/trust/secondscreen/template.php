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
] = $args;
?>

<?php 
// wp_enqueue_script("script-id");  // load previously registered script
// wp_enqueue_style('style-id'); // load some other registered styles
?>



<section class="trust-secondscreen block mb-0">    
    <div class="container">
        <div class="row">

            <div class="col-12 col-lg-5 mb-4 mb-lg-0">
                <?php echo $inner; ?>
            </div>
            <div class="col-12 col-lg-7 d-flex align-items-center">
                <div class="section-header">
                    <h2 class="section-header__header"><?php echo $title; ?></h2>
                    <p class="section-header__text" data-aos="fade-up"><?php echo $subtitle; ?></p>
                </div>
            </div>

        </div>
    </div>
</section>



