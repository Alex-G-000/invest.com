<?php
// $args['term_name', 'term_id'] requiered			
?>

    <div class="faq-list-category" data-aos="fade-up">
        <h5 class="faq-list-category__header bg-dark bg-dark-1--light rounded border">
            <?php echo $args['term_name']; ?>							
        </h5>
        <ul class="faq-list-category__list">						
        <?php
        $query = new WP_Query( array(
            'post_type' => 'faq',   
            'posts_per_page' => -1,       
            'tax_query' => array(
                array(
                    'taxonomy' => 'faq_category',   
                    'field' => 'term_id',           	
                    'terms' => $args['term_id'] 
                )
            )
        ) );
        while ( $query->have_posts() ) : $query->the_post();
        ?>
            <li class="faq-list-category__item">
                <a href="/faq-answers/?cat=<?php echo $args['term_id']; ?>" class="faq-list-category__link text-white--dark text-gray--light"><?php the_title(); ?></a>						 
            </li>
        <?php
        endwhile;				
        wp_reset_query();
        ?>
        </ul>
    </div>						
