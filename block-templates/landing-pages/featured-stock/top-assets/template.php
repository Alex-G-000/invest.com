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



<section class="fs-top-assets block">    
    <div class="container">
        <div class="top-assets__header section-header text-center">
            <h2 class="section-header__header <?php echo $some_class; ?>"><?php echo $title; ?></h2>            
        </div>

        <div class="row">
            
            <div class="col-12 col-lg-4 fs-top-assets__item" data-aos="fade-up">
                <div class="fs-top-assets__item-wrap asset card bg-dark-1">
                    <?php                    
                    $symbol1 = get_field('top-assets-widjet_symbol-1', 'options');                    
                    get_template_part( 'template-parts/tradeview-widjets/single-ticker/widjet', null, array(
                        'symbol' => $symbol1                      
                    ));
                    ?>
                </div>         
            </div>
            
            <div class="col-12 col-lg-4 fs-top-assets__item" data-aos="fade-up">
                <div class="fs-top-assets__item-wrap asset card bg-dark-1">
                    <?php
                    $symbol2 = get_field('top-assets-widjet_symbol-2', 'options');
                    get_template_part( 'template-parts/tradeview-widjets/single-ticker/widjet', null, array(
                        'symbol' => $symbol2                        
                    ));
                    ?>
                </div>   
            </div>    

            <div class="col-12 col-lg-4 fs-top-assets__item" data-aos="fade-up">
                <div class="fs-top-assets__item-wrap asset card bg-dark-1">
                    <?php
                    $symbol3 = get_field('top-assets-widjet_symbol-3', 'options');
                    get_template_part( 'template-parts/tradeview-widjets/single-ticker/widjet', null, array(
                        'symbol' => $symbol3                      
                    ));
                    ?>
                </div>   
            </div>

        </div>
    </div>
</section>



