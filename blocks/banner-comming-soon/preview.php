<div class="block-preview">
    <?php 
    if ( get_field('homepage-banner-soon_banner-preview', 'options') ) { ?>
        <img src="<?php echo wp_get_attachment_image_url( get_field('homepage-banner-soon_banner-preview', 'options'), 'full' ); ?>" alt="" class="preview-img"> 
    <?php
    } else {
        echo '<h2>Banner comming soon</h2>';
    }
    ?>    
</div>