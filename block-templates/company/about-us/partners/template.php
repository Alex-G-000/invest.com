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

<section class="company-about-us-partners block">
    <div class="container bg-dark-1"> 
        <div class="row">
            <div class="col-lg-6 col-12">
                <div class="company-about-us-partners__header section-header">
                    <h2 class="section-header__header"><?php echo $title; ?></h2>
                    <p class="section-header__text" data-aos="fade-in"><?php echo $subtitle; ?></p>
                </div>
            </div>   
            <div class="col-lg-6 col-12">
                <div class="company-about-us-partners__images" data-aos="fade-in">
                    <?php echo $inner; ?>
                </div> 
            </div>  
        </div> 
    </div>
</section>