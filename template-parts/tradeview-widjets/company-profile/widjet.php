<?php
// $args['symbol'] requiered !
?>

<!-- TradingView Widget BEGIN -->
    <div class="tradingview-widget-container">
        <div class="tradingview-widget-container__widget"></div>
        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-symbol-profile.js" async>
        {
        "symbol": "<?php echo $args['symbol']; ?>",
        "width": "100%",
        "height": "auto",
        "colorTheme": "<?php echo inv_widget_color(); ?>",
        "isTransparent": true,
        "largeChartUrl": "<?php the_field('redirect-tradingview', 'options'); ?>",
        "locale": "en"
        }
        </script>
    </div>
<!-- TradingView Widget END -->