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



<section class="fs-graph block mb-3">    
    <div class="container">
        <?php if($title != ''){ ?>
        <div class="top-assets__header section-header text-center">
            <h2 class="section-header__header <?php echo $some_class; ?>"><?php echo $title; ?></h2>            
        </div>
        <?php } ?>
        <div class="row">
            <div class="col-12 col-lg-6 mb-5 mb-lg-0 d-flex flex-column justify-content-center">
                <div class="instrument__data instrument-data mb-0">
                    <?php get_template_part( 'template-parts/tradeview-widjets/single-ticker/widjet', null, array('symbol' => 'AMZN')); ?>
                </div>

                <div class="instrument__buttons instrument-buttons" style="border-bottom: 0">
                    <div class="instrument-buttons__small mb-3">
                        <a href="#" class="instrument-buttons__favoutite"><i class="icon-star-empty"></i> Add favorite</a>
                        <a href="#" class="instrument-buttons__alert"><i class="icon-bell"></i> Set alert</a>
                    </div>
                    <div class="instrument-buttons__main">
                        <button class="instrument-buttons__button btn btn-primary btn-lg mr-3">SELL</button>
                        <button class="instrument-buttons__button btn btn-outline-primary btn-lg">BUY</button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="fs-graph__graph-widget card">
                    <div class="card-body">
                        <h3 class="text-white--dark">Graph</h3>
                        <div class="instrument__widjet-card">
                            <?php get_template_part('template-parts/tradeview-widjets/market-overview/widjet-instrument-single', null, array('symbol' => 'AMZN')); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



