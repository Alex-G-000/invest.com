<?php
// TradingView widget for instrument single page
//
// $args['symbol'] requiered !
?>

<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
    <div class="tradingview-widget-container__widget"></div>
    <!-- <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/markets/currencies/" rel="noopener" target="_blank"><span class="blue-text">Forex</span></a> by TradingView</div> -->
    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
    {
    "colorTheme": "<?php echo inv_widget_color(); ?>",
    "dateRange": "1M",
    "showChart": true,
    "locale": "en",
    "largeChartUrl": "<?php the_field('redirect-tradingview', 'options'); ?>",
    "isTransparent": true,
    "showSymbolLogo": false,
    "showFloatingTooltip": false,
    "width": "100%",
    "height": "380",
    "plotLineColorGrowing": "rgba(41, 98, 255, 1)",
    "plotLineColorFalling": "rgba(41, 98, 255, 1)",
    "gridLineColor": "rgba(240, 243, 250, 0)",
    "scaleFontColor": "rgba(120, 123, 134, 1)",
    "belowLineFillColorGrowing": "rgba(41, 98, 255, 0.12)",
    "belowLineFillColorFalling": "rgba(41, 98, 255, 0.12)",
    "belowLineFillColorGrowingBottom": "rgba(41, 98, 255, 0)",
    "belowLineFillColorFallingBottom": "rgba(41, 98, 255, 0)",
    "symbolActiveColor": "rgba(41, 98, 255, 0.12)",
    "tabs": [
        {
        "title": "Forex",
        "symbols": [
            {
            "s": "<?php echo $args['symbol'] ?>"
            }
        ],
        "originalTitle": "Forex"
        }
    ]
    }
    </script>
</div>
<!-- TradingView Widget END -->