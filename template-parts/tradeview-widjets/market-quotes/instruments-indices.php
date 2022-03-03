<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
	<div class="tradingview-widget-container__widget"></div>
	<!-- <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/markets/indices/" rel="noopener" target="_blank"><span class="blue-text">Indices</span></a> by TradingView</div> -->
	<script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-quotes.js"
		async>
	{
		"width": "100%",
		"height": "100%",
		"symbolsGroups": [{
			"name": "Indices",
			"originalName": "Indices",
			"symbols": [
				<?php  
                if( have_rows('instruments_instruments-indexes-widget', 'options') ):
                $count_rows = count(get_field('instruments_instruments-indexes-widget', 'options'));
                $current = 0;  
                while( have_rows('instruments_instruments-indexes-widget', 'options') ): the_row();    
                    $symbol = get_sub_field('symbol');          
                    $description = get_sub_field('description');     
                    if( $symbol !== "" ){
                        $current += 1;
                        echo '{
                        "name": "' . $symbol . '"' ;      
                        if( $description !== "" ) { 
                        echo ',';
                        echo '"displayName": "' . $description . '"';
                        }  
                        echo '}';
                        if( $current !== $count_rows ) {
                        echo ','; 
                        }   
                    }    
                endwhile;  
                endif; 
            ?>
			]
		}],
		"showSymbolLogo": true,
		"colorTheme": "<?php echo inv_widget_color(); ?>",
		"isTransparent": true,
		"largeChartUrl": "<?php the_field('redirect-tradingview', 'options'); ?>",
		"locale": "en"
	}
	</script>
</div>
<!-- TradingView Widget END -->



<!-- "symbols": [{
					"name": "CRYPTOCAP:BTC.D"
				},
				{
					"name": "CURRENCYCOM:US30"
				},
				{
					"name": "OANDA:NAS100USD"
				},
				{
					"name": "OANDA:US30USD"
				},
				{
					"name": "CURRENCYCOM:US100"
				},
				{
					"name": "CURRENCYCOM:US500"
				}
			] -->