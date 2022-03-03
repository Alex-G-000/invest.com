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

<div class="info-cards__col <?php echo $column_classes; ?>">
    <div class="info-cards__item frame info-card" data-aos="fade-up">
        <div class="info-card__icon border"></div>
        <h5 class="info-card__title collapsed" data-toggle="collapse" href="#<?php echo $some_id; ?>" role="button" aria-expanded="false" aria-controls="<?php echo $some_id; ?>">
            <?php echo $title; ?>
        </h5>
        <div class="collapse" id="<?php echo $some_id; ?>">
            <p class="info-card__text"><?php echo $subtitle; ?></p>
        </div>
        
    </div>
</div>