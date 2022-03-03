<?php 
// available fields
[
'title'           => $title,
'subtitle'        => $subtitle,
'button_link'     => $button_link,
'button_text'     => $button_text,
'some_class'      => $some_class,
'some_id'         => $some_id,
'inner'           => $inner,
'template_path'   => $template_path,
'template_id'     => $template_id,
] = $args;
?>




<section class="info-cards block">    
    <div class="container">
    <?php if ( !empty($title) ) { ?>
        <div class="row">
            <div class="col-12">               
                <div class="block__header section-header">
                    <h3 class="section-header__header <?php echo $some_class; ?>"><?php echo $title; ?></h3>
                    <?php if ( !empty($subtitle) ) { ?>
                        <p class="section-header__text"><?php echo $subtitle; ?></p> 
                    <?php } ?>                    
                </div>               
            </div>
        </div>
        <?php } ?>
        <div class="row">  
            <?php echo $inner; ?>
        </div>
        <div class="row mt-5">
            <div class="col-12 text-center">
                <a href="<?php echo $button_link; ?>" class="btn btn-outline-secondary--dark btn-outline-black--light"><?php echo $button_text; ?></a>
            </div>
        </div>   
    </div>
</section>



