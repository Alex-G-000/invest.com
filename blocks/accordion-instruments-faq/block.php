<section class="accordion-block block <?php block_field('add-class'); ?>">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php if ( !empty(block_value('title')) ) { ?>
                    <div class="block__header section-header">
                        <h3 class="section-header__header <?php block_field('title-class'); ?>"><?php block_field('title'); ?></h3>
                        <?php if ( !empty(block_value('subtitle')) ) { ?>
                            <p class="section-header__text <?php block_field('subtitle-class'); ?>"><?php block_field('subtitle'); ?></p>
                        <?php } ?>
                    </div>
                <?php } ?>
                <div class="block__content"  data-aos="fade-up">
                    <div class="accordion" id="accordion<?php block_field('id'); ?>">
                        <?php block_field('inner'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>