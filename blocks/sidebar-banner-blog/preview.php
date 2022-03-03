<div class="block-preview">
    <?php 
    if (get_field('blog-sidebar-banner_banner-preview', 'options')) { ?>
        <img src="<?php the_field('blog-sidebar-banner_banner-preview', 'options'); ?>" alt="" class="preview-img"> 
    <?php
    } else {
        echo '<h2>Sidebar Banner Blog</h2>';
    }
    ?>    
</div>