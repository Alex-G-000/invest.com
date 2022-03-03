<ul class="nav nav-tabs" id="instruments-tab" role="tablist">
  <li class="nav-item" role="presentation">
    <a class="nav-link active" id="popular-tab" data-toggle="tab" href="#popular" role="tab" aria-controls="popular" aria-selected="true">
      Most popular
    </a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="shares-tab" data-toggle="tab" href="#shares" role="tab" aria-controls="shares" aria-selected="false">
      Shares
    </a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="commodities-tab" data-toggle="tab" href="#commodities" role="tab" aria-controls="commodities" aria-selected="false">
      Commodities
    </a>
  </li>  
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="indices-tab" data-toggle="tab" href="#indices" role="tab" aria-controls="indices" aria-selected="false">
      Indices
    </a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="forex-tab" data-toggle="tab" href="#forex" role="tab" aria-controls="forex" aria-selected="false">
      Forex
    </a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="crypto-tab" data-toggle="tab" href="#crypto" role="tab" aria-controls="crypto" aria-selected="false">
      Crypto
    </a>
  </li>
  
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="popular" role="tabpanel" aria-labelledby="popular-tab">
   <?php get_template_part( 'template-parts/tradeview-widjets/market-quotes/instruments', 'popular' ); ?>
  </div>
  <div class="tab-pane fade" id="shares" role="tabpanel" aria-labelledby="shares-tab">
   <?php get_template_part( 'template-parts/tradeview-widjets/market-quotes/instruments', 'shares' ); ?>
  </div>
  <div class="tab-pane fade" id="commodities" role="tabpanel" aria-labelledby="commodities-tab">
    <?php get_template_part( 'template-parts/tradeview-widjets/market-quotes/instruments', 'comodity' ); ?>
  </div>
  <div class="tab-pane fade" id="crypto" role="tabpanel" aria-labelledby="crypto-tab">
    <?php get_template_part( 'template-parts/tradeview-widjets/market-quotes/instruments', 'crypto' ); ?>
  </div>
  <div class="tab-pane fade" id="indices" role="tabpanel" aria-labelledby="indices-tab">
    <?php get_template_part( 'template-parts/tradeview-widjets/market-quotes/instruments', 'indices' ); ?>
  </div>
  <div class="tab-pane fade" id="forex" role="tabpanel" aria-labelledby="forex-tab">
    <?php get_template_part( 'template-parts/tradeview-widjets/market-quotes/instruments', 'forex' ); ?>
  </div>
  <div class="tab-pane fade" id="forex" role="tabpanel" aria-labelledby="forex-tab">
    <?php get_template_part( 'template-parts/tradeview-widjets/market-quotes/instruments', 'crypto' ); ?>
  </div>
</div>