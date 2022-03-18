<?php
// TradingView widjet for website header
// Values stored in options admin page
?>

<?php 
  if ( get_field('tape-widjet-deffered', 'options') ) {
?>

<div class="tradingview-widget-container stripe-widjet" style="width: 100%; height: 44px;">
  <iframe id="homepage-tape-deferred-frame" scrolling="no" allowtransparency="true" frameborder="0" src="" style="box-sizing: border-box; height: 44px; width: 100%;"></iframe>
</div>

<?php } else { ?>

  <!-- TradingView Widget BEGIN -->
  <div class="tradingview-widget-container stripe-widjet">
    <div class="tradingview-widget-container__widget"></div>
    <!-- <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com" rel="noopener" target="_blank"><span class="blue-text">Ticker Tape</span></a> by TradingView</div> -->
    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
    {
    "symbols": [
      <?php  
      if( have_rows('tape-widjet', 'options') ):
        $count_rows = count(get_field('tape-widjet', 'options'));
        $current = 0;  
        while( have_rows('tape-widjet', 'options') ): the_row();    
          $symbol = get_sub_field('symbol');          
          $description = get_sub_field('description');     
          if( $symbol !== "" ){
              $current += 1;
              echo '{
              "proName": "' . $symbol . '"' ;      
              if( $description !== "" ) { 
                echo ',';
                echo '"title": "' . $description . '"';
              }  
              echo '}';
              if( $current !== $count_rows ) {
                echo ',';
              }   
          }    
        endwhile;  
      endif; 
      ?>
    ],
    "showSymbolLogo": <?php if ( get_field('tape-widjet-show-logos', 'options')) { echo 'true'; } else { echo 'false'; } ?>,
    "colorTheme": "<?php echo inv_widget_color(); ?>",
    "isTransparent": true,
    "displayMode": "regular",
    "largeChartUrl": "<?php the_field('redirect-tradingview', 'options'); ?>",
    "locale": "en"
  }
    </script>
  </div>
  <!-- TradingView Widget END -->

<?php } ?>
