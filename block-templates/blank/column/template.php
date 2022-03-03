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


<div class="col <?php echo $some_class; ?>">               
    <?php echo $inner; ?>             
</div>
       


