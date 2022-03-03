<?php 
// available fields
[
'title'           => $title,
'subtitle'        => $subtitle,
'text'           => $text,
'inner'           => $inner,
'some_class'      => $column_classes,
'some_id'         => $some_id,
'template_path'   => $template_path,
'template_id'     => $template_id,
] = $args;
?>

<div class="pp-cards-inner <?php echo $column_classes; ?>">
    <div class="pp-cards-inner__item frame" data-aos="fade-up">
        <div class="text-gradient w-auto pp-cards-inner__number"><?php echo $text; ?></div>
        <p class="pp-cards-inner__title"> <strong><?php echo $title; ?></strong></p>  
        <p class="pp-cards-inner__subtitle text-gray"><?php echo $subtitle; ?></p>
    </div>
</div>