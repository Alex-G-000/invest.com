<?php
// TradingView widjet for market overview
// Values stored in options admin page
?>


<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
    <div class="tradingview-widget-container__widget"></div>
    <!-- <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com" rel="noopener" target="_blank"><span class="blue-text">Crypto</span></a> by TradingView</div> -->
    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
        {
        "colorTheme": "<?php echo inv_widget_color(); ?>",
        "dateRange": "12M",
        "showChart": false,
        "locale": "en",
        "width": "100%",
        "height": "100%",
        "largeChartUrl": "<?php the_field('redirect-tradingview', 'options'); ?>",
        "isTransparent": true,
        "showSymbolLogo": <?php if ( get_field('popular-markets-show-logos', 'options')) { echo 'true'; } else { echo 'false'; } ?>,
        "showFloatingTooltip": true,
        "tabs": [
            {
            "title": "Crypto",
            "symbols": [
            <?php  
                if( have_rows('popular-markets-widjet', 'options') ):
                $count_rows = count(get_field('popular-markets-widjet', 'options'));
                $current = 0;  
                while( have_rows('popular-markets-widjet', 'options') ): the_row();    
                    $symbol = get_sub_field('symbol');          
                    $description = get_sub_field('description');     
                    if( $symbol !== "" ){
                        $current += 1;
                        echo '{
                        "s": "' . $symbol . '"' ;      
                        if( $description !== "" ) { 
                        echo ',';
                        echo '"d": "' . $description . '"';
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
            }
        ]
        }
    </script>
</div>
<!-- TradingView Widget END -->

