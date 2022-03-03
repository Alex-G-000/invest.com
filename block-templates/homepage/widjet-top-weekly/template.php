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
wp_enqueue_script("top-weekly-block");  // load previously registered script
?>
  
<section class="widget-top-weekly block <?php echo $some_class; ?>">
    <div class="container">
        <div class="row">
            <?php if ( !empty($title) ) { ?>
            <div class="col-12">
                <div class="block__header section-header">
                    <h3 class="section-header__header text-center"><?php echo $title; ?></h2>                   
                </div>
            </div>
            <?php } ?>
            <div class="col-12 col-lg-8 mb-5 mb-lg-0">
                <div class="block__widjet bg-dark-1">
                    <?php get_template_part('template-parts/tradeview-widjets/graph/top-weekly'); ?>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="block__switchers-wrap">
                    <ul class="list-unstyled block__switchers mb-3">
                        <?php
                        if( have_rows('top-weekly-widjet', 'options') ){ 
                            $count = 0;
                            $state = "active";
                            while( have_rows('top-weekly-widjet', 'options') ): the_row();
                                $count++;
                                if ($count != 1) {
                                    $state = "";
                                }  
                                $tw_symbol = get_sub_field('symbol');          
                                $tw_description = get_sub_field('description');     
                                if( $tw_description && $tw_description ){
                                    echo '<li class="btn btn-gradient block__switcher ' . $state .'" data-symbol="' . $tw_symbol . '" data-description="' . $tw_description . '">'.$tw_description.'</li>';
                                }
                            endwhile;  

                        } 
                        ?>                      
                    </ul>
                    <a href="<?php inv_show_download_link(); ?>" class="btn btn-secondary btn-black--light w-100 mb-3">Invest Now</a>
                </div>
            </div>

        </div>
    </div>
</section>

