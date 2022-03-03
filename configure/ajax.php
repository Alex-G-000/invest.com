<?php

//ajax load more posts add script
add_action( 'wp_print_footer_scripts', 'loadmore', 99 );
function loadmore() {
	if ( is_page_template('page-templates/blog.php') || is_archive() || is_category() || is_tag() ){
			?>
		<script id="ajax-load-more" type="text/javascript">
			const ajaxurl = '<?php echo admin_url( "admin-ajax.php" ); ?>';
			let count = $('#loadmore-category').attr('data-counter')
			const category = $('#loadmore-category').attr('data-category')
			const categoryMax = $('#loadmore-category').attr('data-max')

			$('#loadmore-category').on('click',(e)=>{
				e.preventDefault()
				//console.log(count)
				const data = {
					action: 'loadmore',
					count: count,
					category: category
				}
				$('#loadmore-category').parent('div').fadeOut()
				$.ajax({
					url: ajaxurl,
					type: 'POST',
					data: data,
					dataType: 'json',
					success: (response)=>{
						console.log(response)
						if(response.success){
							$('.ajax-container').append(response.data.result)
							count = response.data.newCount
							if(count < categoryMax){
								$('#loadmore-category').parent('div').fadeIn()
							}
						}
					},
					error: (err)=>{
						console.log(err)
					}
				})
			})
		</script>
	<?php }
}


//ajax load more posts for category
add_action( 'wp_ajax_loadmore', 'ajax_load_more_action' );
add_action( 'wp_ajax_nopriv_loadmore', 'ajax_load_more_action' );
function ajax_load_more_action() {
	$offset = $_POST['count'];
	$category_id = $_POST['category'];
	$result = '';

	$args_ajax_cat = new WP_Query(array(
		'posts_per_page' => 3,
		'post_type' => 'post',
		'orderby' => 'date',
		'order' => 'DESC',
		'category__in' => $category_id,
		'offset' => $offset
	));

	while($args_ajax_cat->have_posts()){
		$args_ajax_cat->the_post();
		$offset = $offset + 1;

		$result .= "<div class='col-12 col-md-6 col-lg-4 mb-5'>";
		$result .= load_template_part('template-parts/blog/article-loops/all-articles', null, array('aos-false'=>true));
		$result .= "</div>";
	};
	wp_reset_postdata();

	wp_send_json_success(array(
		'result' => $result,
		'newCount' => $offset
	));
}







//add script to get array of instruments symbols
add_action( 'wp_print_footer_scripts', 'get_instruments_symbols', 90 );

function get_instruments_symbols() {
	if ( inv_is_subpage() == 289  || is_page( 1940 )) {
	?>
		<script id="get_instruments_symbols" type="text/javascript">

			function get_instruments_symbols( category, offset) {

				let resultSymbols;
				let largeChartUrl = '<?php the_field('redirect-tradingview', 'options'); ?>';
				let toShow = $('#instruments-widget-data input[name="toShow"]').val();

				const ajaxurl = '<?php echo admin_url( "admin-ajax.php" ); ?>';

				const data = {
					action: 'getsymbols',
					category: category
				}

				$.ajax({
					url: ajaxurl,
					type: 'POST',
					data: data,
					dataType: 'json',
					success: (response)=>{
						if(response.success){
							resultSymbols = response.data.result;
							loadInstrumentsIframe(resultSymbols, category, largeChartUrl, toShow, offset);
							loadInstrumentsPagination(resultSymbols, category, toShow, offset);
						}
					},
					error: (err)=>{
						console.log(err)
					}
				})

			}

		</script>
	<?php }
}

//ajax get array of instruments symbols
add_action( 'wp_ajax_getsymbols', 'ajax_getsymbols_action' );
add_action( 'wp_ajax_nopriv_getsymbols', 'ajax_getsymbols_action' );
function ajax_getsymbols_action() {
	$widget_symbols = array();
	$widget_categories = array('stocks', 'indices', 'forex', 'commodity', 'crypto');
	$current_category = $_POST['category'];

	if ( in_array($current_category, $widget_categories)  ) {

		$query_symbols = new WP_Query(array(
			'posts_per_page' => -1,
			'post_type' => 'symbol',
			'tax_query' => array(
				array (
					'taxonomy' => 'symbol_category',
					'field' => 'slug',
					'terms' => $current_category,
				)
			)
		));

		while ( $query_symbols->have_posts() ) {
			$query_symbols->the_post();
			$post_id = get_the_ID();

			if ( get_field( 'symbol', $post_id) ) {
				$symbol = get_field( 'symbol', $post_id);
				array_push( $widget_symbols, $symbol );
			}

		}
		wp_reset_postdata();
	}

	wp_send_json_success(array(
		'result' => $widget_symbols
	));
}
