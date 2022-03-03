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
wp_enqueue_script("competitive-spread-top-weekly");  // load previously registered script
?>
  
<section class="widget-top-weekly widget-top-weekly-1 block <?php echo $some_class; ?>">
    <div class="container">
        <div class="row">
            <?php if ( !empty($title) ) { ?>
            <div class="col-12" data-aos="fade-down">
                <div class="block__header section-header">
                    <h3 class="section-header__header text-center"><?php echo $title; ?></h2>                   
                </div>
            </div>
            <?php } ?>
            <div class="col-12 col-lg-9 mb-5 mb-lg-0" data-aos="fade-right">
                <div class="block__widjet bg-dark-1">
                    <?php get_template_part('template-parts/tradeview-widjets/graph/top-weekly'); ?>
                </div>
            </div>
            <div class="col-12 col-lg-3">
                <div class="block__switchers-wrap">
                    <ul class="list-unstyled block__switchers mb-3">
                        <?php

                        global $post;
                        
                        if( have_rows('widjet-top-weekly-1', $post->ID) ){ 
                            $count = 0;
                            $state = "active";
                            while( have_rows('widjet-top-weekly-1', $post->ID) ): the_row();
                                $count++;
                                if ($count != 1) {
                                    $state = "";
                                }  
                                $tw_symbol = get_sub_field('symbol');          
                                $tw_description = get_sub_field('description');     
                                if( $tw_description && $tw_description ){
                                    echo '<li class="btn btn-gradient block__switcher ' . $state .'" data-symbol="' . $tw_symbol . '" data-description="' . $tw_description . '" data-aos="fade-left">'.$tw_description.'</li>';
                                }
                            endwhile;  

                        } 
                        ?>                      
                    </ul>
                    <a href="<?php inv_show_download_link(); ?>" class="btn btn-outline-secondary btn-outline-black--light w-100" data-aos="fade-left">Invest Now</a>
                </div>
            </div>

        </div>
    </div>
</section>

