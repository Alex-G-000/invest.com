<?php
// $args['symbol'] requiered !
?>

<!-- TradingView Widget BEGIN -->
    <div class="tradingview-widget-container">
        <div class="tradingview-widget-container__widget"></div>
        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-financials.js" async>
        {
        "symbol": "<?php echo $args['symbol']; ?>",
        "colorTheme": "<?php echo inv_widget_color(); ?>",
        "isTransparent": true,
        "largeChartUrl": "<?php the_field('redirect-tradingview', 'options'); ?>",
        "displayMode": "regular",
        "width": "100%",
        "height": 830,
        "locale": "en"
        }
        </script>
    </div>
<!-- TradingView Widget END -->	