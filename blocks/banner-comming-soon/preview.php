<div class="block-preview">
    <?php 
    if ( get_field('homepage-banner-soon_banner-preview', 'options') ) { ?>
        <img src="<?php the_field('homepage-banner-soon_banner-preview', 'options'); ?>" alt="" class="preview-img"> 
    <?php
    } else {
        echo '<h2>Banner comming soon</h2>';
    }
    ?>    
</div>