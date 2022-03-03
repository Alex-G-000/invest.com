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



<section class="cs-footer block">    
    <div class="container">
        <div class="row">

            <div class="col-12 text-center">
                <h2 class="hero__title text-white--light">
                    <?php echo $title; ?>
                </h2>
                <h3 class="hero__subtitle text-white--light">
                    <?php echo $subtitle; ?>
                </h3>
        
                <a href="<?php echo $button_link; ?>"
                    class="hero__btn btn btn-secondary"><?php echo $button_text; ?></a>
            </div>

        </div>
    </div>
    <img src="<?php echo get_template_directory_uri(); ?>/img/competitive-spread/competitive-spread-footer-min.jpg" alt="header">
</section>



