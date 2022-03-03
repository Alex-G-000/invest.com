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

<?php 
// wp_enqueue_script("script-id");  // load previously registered script
// wp_enqueue_style('style-id'); // load some other registered styles
?>


<div class="col <?php echo $column_classes; ?>">
    <div class="block__inner-wrapper d-flex flex-column rounded bg-dark bg-dark-1--light border py-4 px-3">
        <?php if ( !empty($inner) ) { ?>
            <div class="mb-4">
               <div class="block-icon--big text-center mx-auto"><?php echo $inner; ?></div>
            </div>            
        <?php } ?>
        <?php if ( !empty($title) ) { ?>
            <h4 class="mb-2 text-white--dark"><?php echo $title; ?></h4>
        <?php } ?>
        <?php if ( !empty($subtitle) ) { ?>
            <p class="mb-2"><?php echo $subtitle; ?></p>
        <?php } ?>       
    </div>
</div>