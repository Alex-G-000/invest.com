<?php 
// available fields
[
'title'           => $title,
'subtitle'        => $subtitle,
'inner'           => $inner,
'some_class'      => $column_classes,
'some_id'         => $some_id,
'template_path'   => $template_path,
'template_id'     => $template_id,
] = $args;
?>

<div class="believes-cards-inner <?php echo $column_classes; ?>">
    <div class="believes-cards-inner__item frame" data-aos="fade-up">
        <div class="believes-cards-inner__icon"><?php echo $inner; ?></div>
        <p class="believes-cards-inner__text"> <strong><?php echo $title; ?></strong> <?php echo $subtitle; ?></p>  
    </div>
</div>