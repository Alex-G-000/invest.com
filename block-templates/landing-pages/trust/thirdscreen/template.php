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

<?php 
// wp_enqueue_script("script-id");  // load previously registered script
// wp_enqueue_style('style-id'); // load some other registered styles
?>



<section class="trust-thirdscreen block mb-0">    
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
            <div class="col-12 col-lg-7 d-flex flex-column justify-content-between mb-5 mb-lg-0">
                <div class="trust-thirdscreen__item" data-aos="fade-up">
                    <span class="icon-ok"></span>
                    <p>Invest and trade stocks, indices, currencies, and many other instruments in a click of a button.</p>
                </div>
                <div class="trust-thirdscreen__item" data-aos="fade-up">
                    <span class="icon-ok"></span>
                    <p>Use our platform to get live market data from exchanges around the world.</p>
                </div>
                <div class="trust-thirdscreen__item mb-0" data-aos="fade-up">
                    <span class="icon-ok"></span>
                    <p>Client money protection - your funds are kept in segregated accounts that are protected by the Investors Compensation Fund (ICF)</p>
                </div>
            </div>
            <div class="col-12 col-lg-5">
                <?php echo $inner; ?>
            </div>
        </div>
    </div>
</section>



