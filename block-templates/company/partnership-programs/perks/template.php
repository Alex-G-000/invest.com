<?php 
// available fields
[
'title'           => $title,
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



<section class="perks block bg-dark">    
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="block__header section-header">
                    <h3 class="section-header__header text-center"><?php echo $title; ?></h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 perks__inner-cont">
                <?php echo $inner; ?>
            </div>
        </div>
    </div>
</section>



