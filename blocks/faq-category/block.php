<section class="faq-category block">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php if ( !empty(block_value('title')) ) { ?>
                    <div class="block__header section-header">
                        <h3 class="section-header__header <?php block_field('title-class'); ?>"><?php block_field('title'); ?></h3>                        
                    </div>
                <?php } ?>                
            </div>
            <div class="col-12">
                <?php 
                 $term_slug = block_value('category'); 
                 $term = get_term_by('slug', $term_slug, 'faq_category');
                
                get_template_part( 'template-parts/faq/faq-list-category', null, array(
                    'term_name' => $term->name,
                    'term_id' => $term->term_id
                ) );
                ?>
            </div>
        </div>
    </div>
</section>