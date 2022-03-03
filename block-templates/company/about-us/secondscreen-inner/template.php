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

<div class="company-about-us-secondscreen-inner bg-dark-1">
    <div class="company-about-us-secondscreen-inner__header" data-aos="fade-in">
        <span></span>
        <p class="section-header__header"><?php echo $title; ?></p>
    </div>
    <div  class="company-about-us-secondscreen-inner__text">
        <p class="section-header__text" data-aos="fade-in"><?php echo $subtitle; ?></p>
    </div>
</div>   
