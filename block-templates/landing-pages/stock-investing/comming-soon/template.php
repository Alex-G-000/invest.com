<?php 
// available fields
[
'title'           => $title,
'subtitle'        => $subtitle,
'some_class'      => $some_class,
'some_id'         => $some_id,
'inner'           => $inner,
'template_path'   => $template_path,
'template_id'     => $template_id,
] = $args;
?>




<section class="stock-comming-soon block mb-0 d-flex justify-content-center align-items-center<?php echo $some_class; ?>">    
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex flex-column justify-content-center align-items-center text-white text-center">
                <h5 class="block__small-text mb-4">Comming soon</h5>                
                <h1 class="block__title mb-4" data-aos="fade-up"><?php echo $title; ?></h2>
                <p class="block__subtitle mb-5"><?php echo $subtitle; ?></p>   
            </div>
            <div class="col-12 text-center d-flex justify-content-center">
                <a class="btn btn-secondary mr-3" href="<?php echo home_url(); ?>" >Home Page</a>
                <button class="btn btn-outline-secondary" onclick="history.back()" >Back</a>
            </div>
        </div>
    </div>
</section>