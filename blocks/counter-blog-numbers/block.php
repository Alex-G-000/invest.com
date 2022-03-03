<?php wp_enqueue_script('blog-numbers-block'); ?>

<section class="numbers-block <?php block_field('additional-class'); ?>">
    <div class="container">
        <div class="row numbers-block__row">
            <div class="col-12 col-sm-6 col-md-3 numbers-block__col">
            <div class="numbers-block__number" data-from="0" data-to="<?php block_field('number-1'); ?>"><?php block_field('number-1'); ?></div> 
            <div class="numbers-block__text"><?php block_field('text-1'); ?></div> 
            </div>
            <div class="col-12 col-sm-6 col-md-3 numbers-block__col">
            <div class="numbers-block__number" data-from="0" data-to="<?php block_field('number-2'); ?>"><?php block_field('number-2'); ?></div> 
            <div class="numbers-block__text"><?php block_field('text-2'); ?></div> 
            </div>
            <div class="col-12 col-sm-6 col-md-3 numbers-block__col">
            <div class="numbers-block__number" data-from="0" data-to="<?php block_field('number-3'); ?>"><?php block_field('number-3'); ?></div> 
            <div class="numbers-block__text"><?php block_field('text-3'); ?></div> 
            </div>
            <div class="col-12 col-sm-6 col-md-3 numbers-block__col">
            <div class="numbers-block__number" data-from="0" data-to="<?php block_field('number-4'); ?>"><?php block_field('number-4'); ?></div> 
            <div class="numbers-block__text"><?php block_field('text-4'); ?></div> 
            </div>        
        </div>
    </div>    
</section>

