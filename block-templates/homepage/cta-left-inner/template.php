<?php 
// available fields
[
'title'           => $title,
'image'           => $image,
'some_class'      => $some_class,
'some_id'         => $some_id,
'template_path'   => $template_path,
'template_id'     => $template_id,
] = $args;
?>

<?php 
// wp_enqueue_script("script-id");  // load previously registered script
// wp_enqueue_style('style-id'); // load some other registered styles
?>


<div class="list-cards__item frame <?php echo $some_class; ?>" data-aos="fade-up">
    <div class="list-cards__image-wrap">
        <!-- <img src="<?php //echo wp_get_attachment_image_url($image, 'thumbnail'); ?>" alt="" class="list-cards__image"> -->
    </div>
    <h4 class="list-cards__title"><?php echo $title; ?></h4>
</div>


