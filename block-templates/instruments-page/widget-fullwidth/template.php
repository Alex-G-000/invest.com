<?php 
wp_enqueue_script('instruments-widget-fullwidth');
?>

<section class="instruments-fullwidth-widget block <?php echo $args['some_class']; ?>">    
    <div class="container">                
        <div class="widget-card card bg-dark-1 rounded">

            <?php if (!empty($args['title'])) { ?>
                <div class="card-header">
                    <h3 class="widget-card__title text-white text-left mb-0"><?php echo $args['title']; ?></h3>
                    <form class="" id="instruments-widget-data">
                        <input type="hidden" name="category" value="stocks">
                        <input type="hidden"  name="toShow" value="10">
                        <select class="form-control" id="toShow">
                            <option value="5">5 per page</option>
                            <option value="10" selected>10 per page</option>
                            <option value="25">25 per page</option>                           
                            <option value="50">50 per page</option>                          
                        </select>                    
                    </form>
                </div>
            <?php } ?>

            <div class="card-body bg-widget py-1">
                <div class="widget-card__widget d-block" id="<?php echo $args['some_id']; ?>">                  
                    <div class="tradingview-widget-container" id="instruments-widget" style="width: 100%; height: 100%;">                            
                        <iframe id="instruments-frame" scrolling="no" allowtransparency="true" frameborder="0" src="" style="box-sizing: border-box; height: 100%; width: 100%;"></iframe>  
                        <div class="pagination text-center mt-3"></div>
                    </div>     
                </div>                
            </div> 

        </div>
    </div>
</section>