<?php 
    $args = get_field('homepage-banner-landing-page', 'options');

    if(!empty(block_value('title'))){
        $title = block_value('title');
    }else{
        $title = $args['title'];
    }   
    
    if(!empty(block_value('subtitle'))){
        $subtitle = block_value('subtitle');
    }else{
        $subtitle = $args['subtitle'];
    }    

    if(!empty(block_value('button-text'))){
        $button_text = block_value('button-text');
    }else{
        $button_text = $args['button-text'];
    }

    if(!empty(block_value('button-link'))){
        $button_link = block_value('button-link');
    }else{
        $button_link = $args['button-link'];
    }

    if(!empty(block_value('image'))){
        $banner_image = block_value('image');
    } else {
        $banner_image = $args['banner-image'];
    }

    if(!empty(block_value('small-text'))){
        $small_text = block_value('small-text');
    } else {
        $small_text = $args['small-text'];
    }
?>

<section class="banner-amazon <?php block_field('additional-class'); ?>">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center text-md-left" style="position: relative">
                <div class="banner-amazon__cont text-white--light" style="background-image: url(<?php echo $banner_image['url']; ?>);">
                    <div class="banner-amazon__bg-fade"></div>
                    <p class="banner-amazon__subtitle text-center text-lg-left text-white"><?php echo $subtitle; ?></p>
                    <h2 class="banner-amazon__title section-header__header text-white"><?php echo $title; ?></h2>
                    <div class="d-flex flex-column flex-md-row justify-content-center justify-content-lg-start">
                        <a href="<?php echo $button_link; ?>" class="btn btn-secondary mr-0 mr-md-4 mb-4 mb-md-0"><?php echo $button_text; ?></a>
                        <div class="banner-amazon__small-text">
                            <p><?php echo $small_text; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</section>
