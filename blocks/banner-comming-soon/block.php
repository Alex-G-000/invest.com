<?php 

    if ( get_field('homepage-banner-soon_enable', 'options') ) {

        $args = get_field('homepage-banner-soon', 'options');
        
        if(!empty(block_value('title'))){
            $title = block_value('title');
        }else{
            $title = $args['title'];
        }   
        
        if(!empty(block_value('subtitle'))){
            $subtitle = block_value('subtitle');
        }else{
            $subtitle = $args['subtitle'];
        } 
    
        if(!empty(block_value('background'))){
            $banner_soon_bg = block_value('background');
        } else {
            $banner_soon_bg = $args['banner-background'];
        }
    
        if(!empty(block_value('image'))){
            $banner_soon_img = block_value('image');
        } else {
            $banner_soon_img = $args['banner-image'];
        }

        if(!empty(block_value('link'))){
            $banner_soon_link = block_value('link');
        } else {
            $banner_soon_link = $args['link'];
        }

        if(!empty($banner_soon_link)) {
            $banner_soon_onclick = ' onclick="';
            $banner_soon_onclick.= "window.location.href='";
            $banner_soon_onclick.= $banner_soon_link;
            $banner_soon_onclick.= "';";
            $banner_soon_onclick.= '"';
        } else {
            $banner_soon_onclick = "";
        }
     
 ?>
 
 <section class="banner-comming-soon block <?php block_field('additional-class'); ?>">
     <div class="container">
         <div class="block__inner rounded" style="background-image:url('<?php echo $banner_soon_bg; ?>')" <?php echo $banner_soon_onclick; ?> >
             <div class="row">
                 <div class="block__content col-12 col-md-7 text-center text-md-left d-flex align-items-center align-items-md-start">
                     <h5 class="block__small-text text-white mb-2"><?php echo $title; ?></h5>                
                     <h2 class="block__title w-100 text-white" data-aos="fade-up"><?php echo $subtitle; ?></h2>                
                 </div>
                 <div class="col-6 col-md-5 d-none d-md-flex justify-content-center align-items-end block__image-col">
                     <img class="block__image" src="<?php echo $banner_soon_img; ?>" alt=""  data-aos="fade-in">
                 </div>
             </div>
         </div>
     </div>    
 </section>

 <?php } ?>