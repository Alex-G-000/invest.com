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



<section class="cmp-regulation block mb-0">    
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-header text-center">
                    <h2 class="section-header__header"><?php echo $title; ?></h2>
                    <p class="section-header__text" data-aos="fade-up"><?php echo $subtitle; ?></p>
                </div>
            </div>
        </div>
        <div class="row">         
            <?php echo $inner; ?>          
        </div>
    </div>
</section>



