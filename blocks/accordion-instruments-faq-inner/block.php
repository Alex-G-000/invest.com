<div class="card <?php block_field('add-class'); ?>">
    <div class="card-header collapsed" id="h-<?php block_field('id'); ?>"  type="button" data-toggle="collapse" data-target="#b-<?php block_field('id'); ?>" aria-expanded="true" aria-controls="b-<?php block_field('id'); ?>">
        <h4 class="mb-0 card-txt">                            
            <?php block_field('card-title'); ?>                        
        </h4>
    </div>
    <div id="b-<?php block_field('id'); ?>" class="collapse" aria-labelledby="h-<?php block_field('id'); ?>" data-parent="#accordion<?php block_field('parent'); ?>">
        <div class="card-body">
            <?php block_field('card-text'); ?>
        </div>
    </div>
</div>