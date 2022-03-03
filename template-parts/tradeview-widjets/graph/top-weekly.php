<?php
// TradingView widjet for "Top Weekly"
// Default values stored in options admin page
?>
  <?php     
    if( have_rows('top-weekly-widjet', 'options') ) {   
        $symbols="";
        $symbol = get_field('top-weekly-widjet', 'options')[0]['symbol'];          
        $description = get_field('top-weekly-widjet', 'options')[0]['description'];    
        if( $symbol !== "" && $description !== ""){           
            $symbols.= '["' . $description . '", "' . $symbol . '"]';            
        }     
    }

    $unique_id = generateRandomString();
 ?>
<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
    <div id="tradingview_<?php echo $unique_id;?>"></div>
    <!-- <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/AAPL/" rel="noopener" target="_blank"><span class="blue-text">Apple</span></a> by TradingView</div> -->
    <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
    <script type="text/javascript">
    new TradingView.MediumWidget(
    {
    "symbols": [        
      <?php echo $symbols; ?>
    ],
    "chartOnly": false,
    "width": "100%",
    "height": "100%",
    "locale": "en",
    "colorTheme": "<?php echo inv_widget_color(); ?>",
    "gridLineColor": "rgba(42, 46, 57, 0)",
    "fontColor": "#787B86",
    "isTransparent": true,
    "autosize": true,
    "showFloatingTooltip": true,
    "showVolume": false,
    "scalePosition": "no",
    "scaleMode": "Normal",
    "fontFamily": "Trebuchet MS, sans-serif",
    "noTimeScale": false,
    "chartType": "area",
    "lineColor": "#2962FF",
    "bottomColor": "rgba(41, 98, 255, 0)",
    "topColor": "rgba(41, 98, 255, 0.3)",
    "container_id": "tradingview_<?php echo $unique_id;?>"
    }
    );
    </script>
</div>
<!-- TradingView Widget END -->
