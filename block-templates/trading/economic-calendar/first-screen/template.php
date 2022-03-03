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



<section class="hero bg-dark block">    
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-6 mb-0 mb-5 mb-md-0 text-center text-md-left">
                <h1 class="text-gradient--dark text-white--light mb-3"><?php echo $title; ?></h1>
                <p class="text-gray text-white--light mb-5"><?php echo $subtitle; ?></p>
                <a class="btn btn-secondary" href="<?php echo $button_link; ?>"><?php echo $button_text; ?></a>
            </div>
            <div class="col-12 col-md-6" data-aos="fade-left">
                <?php echo $inner; ?>
            </div>
        </div>
    </div>
</section>
