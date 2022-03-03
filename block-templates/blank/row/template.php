<?php 
// available fields
[
'some_class'      => $some_class,
'some_id'         => $some_id,
'inner'           => $inner,
'template_path'   => $template_path,
'template_id'     => $template_id,
] = $args;
?>

<section class="block <?php echo $some_class; ?>">    
    <div class="container">        
        <div class="row">  
            <?php echo $inner; ?>
        </div>
    </div>
</section>



