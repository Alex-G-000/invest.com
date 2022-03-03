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



<div class="col-6 col-md-4 col-xl-2 mb-2 mb-xl-0 cs-avalible-markets-inner" data-aos="fade-up">
    <div class="item">
        <div class="item__top text-center">
            <?php echo $inner; ?>
            <?php echo $title; ?>
        </div>
        <div class="item__bottom">
            <p class="mb-0">
                <span><?php echo $subtitle; ?></span>
                 stocks
            </p>
        </div>
    </div>
</div>



