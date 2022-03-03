<div class="sidebar-top-posts">
    <h5 class="text-gray mb-4">TOP 3 ARTICLES</h5>
    <?php                    
    $query_top = new WP_Query(array(
        'posts_per_page' => 3,
        'post_type' => 'post',
        'orderby' => 'date',
        'order'   => 'DESC'
    ));
    while ( $query_top->have_posts() ) {
        $query_top->the_post();
        get_template_part( 'template-parts/blog/article-loops/all-articles' );
    }   
    wp_reset_postdata();
    ?>
</div>


