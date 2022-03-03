<div class="nav-search-wrapper ml-auto my-3 my-lg-0">
    <form class="nav-search" role="search" method="get" id="<?php echo $args['id']; ?>" action="<?php echo home_url( '/' ) ?>">
        <div class="input-group">
            <input list="symbols-list" class="form-control nav-search__input" type="search" placeholder="Type a keyword or phrase to search" aria-label="Search" value="<?php echo get_search_query() ?>" name="s" id="s">
            <datalist id="symbols-list">
                <?php					
                    $query_all = new WP_Query(array(
                        'posts_per_page' => -1,
                        'post_type' => 'symbol'          
                    ));
                    while ( $query_all->have_posts() ) {
                        $query_all->the_post();
                        $title = get_the_title();
                        ?>
                        <option value="<?php echo $title; ?>">
                    <?php }
                    wp_reset_postdata();
                ?>
            </datalist>
            <div class="input-group-append">
                <button class="nav-search__button btn d-inline-block" type="submit"><i class="icon-search"></i></button>
            </div>
        </div>          
    </form>
    <button class="nav-search__open btn btn-switcher d-none d-lg-inline-block">
        <div class="btn-switcher__container">
            <i class="icon-search"></i>
            <i class="icon-cancel"></i>
        </div>       
    </button>
</div>