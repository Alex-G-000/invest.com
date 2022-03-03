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

<section class="fs-profile block mb-0">        
    <div class="container">
        <?php if($title != ''){ ?>
        <div class="top-assets__header section-header text-center">
            <h2 class="section-header__header <?php echo $some_class; ?>"><?php echo $title; ?></h2>            
        </div>
        <?php } ?>
        <div class="row">
        
            <div class="col-12">
                <?php get_template_part( 'template-parts/tradeview-widjets/company-profile/widjet', null, array('symbol' => 'AMZN')); ?>
            </div>

        </div>
    </div>
</section>