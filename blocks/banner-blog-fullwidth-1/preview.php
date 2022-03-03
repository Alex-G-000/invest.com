<div class="block-preview">
    <?php 
    if (get_field('after-post-content-banner_banner-preview', 'options')) { ?>
        <img src="<?php the_field('after-post-content-banner_banner-preview', 'options'); ?>" alt="" class="preview-img"> 
    <?php
    } else {
        echo '<h2>After Post Banner Blog</h2>';
    }
    ?>    
</div>