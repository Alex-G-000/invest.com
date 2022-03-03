<div class="block-preview">
    <?php 
    if (get_field('help-banner-support_banner-preview', 'options')) { ?>
        <img src="<?php the_field('help-banner-support_banner-preview', 'options'); ?>" alt="" class="preview-img"> 
    <?php
    } else {
        echo '<h2>Banner help</h2>';
    }
    ?>    
</div>