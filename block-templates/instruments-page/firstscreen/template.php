<?php 
// available fields
[
'title'           => $title,
'text'            => $text,
'button_link'     => $button_link,
'button_text'     => $button_text,
'small_text'      => $small_text,
'small_link_url'  => $small_link_url,
'small_link_text' => $small_link_text,
'some_class'      => $some_class,
'some_id'         => $some_id,
'inner'           => $inner,
'template_path'   => $template_path,
'template_id'     => $template_id,
] = $args;
?>


<section class="instruments-firstscreen bg-dark block">    
    <div class="container">
        <div class="row block">

            <div class="col-md-7 col-lg-6 block__col order-2 order-md-1"> 
                <div class="block__content">
                    <h1 class="h2 block__title text-white--light" data-aos="fade-in">
                        <?php echo $title; ?>
                    </h1>
                    <div class="block__text text-white--light" data-aos="fade-up">
                        <?php echo $text; ?>
                    </div>
                    <div class="block__bottons">
                        <a href="<?php inv_show_download_link(); ?>" class="block__btn btn btn-secondary"><?php echo $button_text; ?></a>
                    </div>                
                    <div class="block__small">
                        <span class="block__small-text text-white--light"><?php echo $small_text; ?></span>
                        <a href="<?php echo $small_link_url; ?>" class="block__small-link"><?php echo $small_link_text; ?></a>
                    </div> 
                </div>        
            </div>   

            <div class="col-md-5 col-lg-6 block__col order-1 order-md-2">  
                <div class="block__image">
                    <?php echo $inner; ?>  
                </div>          
            </div>

        </div>
    </div>
</section>



