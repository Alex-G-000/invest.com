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







//add script to get array of instruments symbols (all-instruments page)
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

//ajax get array of instruments symbols (all-instruments page)
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






//add script to get array of homepage tape widget symbols
add_action( 'wp_print_footer_scripts', 'get_tape_homepage_widget_symbols', 10 );

function get_tape_homepage_widget_symbols() {
	if ( is_front_page() && get_field('tape-widjet-deffered', 'options') ) {
	?>

<script id="get_tape_homepage_widget_symbols" type="text/javascript">
	function get_tape_homepage_widget_symbols() {
		let resultSymbols;
		let showSymbolLogo = '<?php if ( get_field('tape-widjet-show-logos', 'options')) { echo 'true'; } else { echo 'false'; } ?>';
		let largeChartUrl = '<?php the_field('redirect-tradingview', 'options'); ?>';
		const ajaxurl = '<?php echo admin_url( "admin-ajax.php" ); ?>';		
		const data = {
			action: 'gettapesymbols_acf'			
		}
		$.ajax({
			url: ajaxurl,
			type: 'POST',
			data: data,
			dataType: 'json',
			success: (response)=>{
				if(response.success){
					resultSymbols = response.data.result;
					loadHomepageTapeIframe(resultSymbols, largeChartUrl, showSymbolLogo);														
				}
			},
			error: (err)=>{
				console.log(err)
			}
		})
	}	
	get_tape_homepage_widget_symbols(); 
</script>

	<?php }
}

//ajax get array of homepage tape widget symbols
add_action( 'wp_ajax_gettapesymbols_acf', 'ajax_get_homepage_tape_symbols_action' );
add_action( 'wp_ajax_nopriv_gettapesymbols_acf', 'ajax_get_homepage_tape_symbols_action' );

function ajax_get_homepage_tape_symbols_action() {

	$widget_symbols = '';	
	$current_acf = 'tape-widjet';

	if( have_rows('tape-widjet', 'options') ):
        $count_rows = count(get_field('tape-widjet', 'options'));
        $current = 0;  
        while( have_rows('tape-widjet', 'options') ): the_row();    
          $symbol = get_sub_field('symbol');          
          $description = get_sub_field('description');     
          if( $symbol !== "" ){
              $current += 1;
              $widget_symbols.= '{
              "proName": "' . $symbol . '"' ;      
              if( $description !== "" ) { 
                $widget_symbols.= ',';
                $widget_symbols.= '"title": "' . $description . '"';
              }  
              $widget_symbols.= '}';
              if( $current !== $count_rows ) {
                $widget_symbols.= ',';
              }   
          }    
        endwhile;  
      endif;  	

	wp_send_json_success(array(
		'result' => $widget_symbols
	));
}


//add script to get array of instruments homepage widget symbols (tabs)
add_action( 'wp_print_footer_scripts', 'get_instruments_homepage_widget_symbols', 11 );

function get_instruments_homepage_widget_symbols() {
	if ( is_front_page() && get_field('instruments_deferred', 'options') ) {
	?>

<script id="get_instruments_homepage_widget_symbols" type="text/javascript">
	function get_instruments_homepage_widget_symbols(category) {
		let resultSymbols;
		let largeChartUrl = '<?php the_field('redirect-tradingview', 'options'); ?>';
		const ajaxurl = '<?php echo admin_url( "admin-ajax.php" ); ?>';		
		const data = {
			action: 'getsymbols_acf',
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
					loadHomepageInstrumentsIframe(resultSymbols, category, largeChartUrl);														
				}
			},
			error: (err)=>{
				console.log(err)
			}
		})
	}
	let category = $('#instruments-homepage-widget-data input[name="category"]').val();   
    get_instruments_homepage_widget_symbols( category );
</script>

	<?php }
}

//ajax get array of instruments homepage widget symbols (tabs)
add_action( 'wp_ajax_getsymbols_acf', 'ajax_get_homepage_symbols_action' );
add_action( 'wp_ajax_nopriv_getsymbols_acf', 'ajax_get_homepage_symbols_action' );

function ajax_get_homepage_symbols_action() {

	$widget_symbols = '';	
	$current_acf = 'instruments_instruments-' . $_POST["category"] . '-widget';

	if( have_rows($current_acf, 'options') ):
		$count_rows = count(get_field($current_acf, 'options'));
		$current = 0;  
		while( have_rows($current_acf, 'options') ): the_row();    
			$symbol = get_sub_field('symbol');          
			$description = get_sub_field('description');     
			if( $symbol !== "" ){
				$current += 1;
				$widget_symbols.= '{"name": "' . $symbol . '"' ;      
				if( $description !== "" ) { 
					$widget_symbols.= ',';
					$widget_symbols.= '"displayName": "' . $description . '"';
				}  
				$widget_symbols.= '}';
				if( $current !== $count_rows ) {
					$widget_symbols.= ',';
				}   
			}    
		endwhile;  
	endif; 	

	wp_send_json_success(array(
		'result' => $widget_symbols
	));
}

