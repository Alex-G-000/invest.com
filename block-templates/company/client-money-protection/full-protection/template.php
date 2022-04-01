<?php 
// available fields
[
'title'           => $title,
'subtitle'        => $subtitle,
'button_link'     => $button_link,
'button_text'     => $button_text,
'some_class'      => $some_class,
'some_id'         => $some_id,
'inner'           => $inner,
'template_path'   => $template_path,
'template_id'     => $template_id,
] = $args;
?>


<section class="cmp-full-protection block pt-0 mb-0">    
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8 align-self-center mb-5 mb-lg-0">
				<h2 class="cmp-full-protection__title text-gradient--dark mb-4" data-aos="fade-in">
					<?php echo $title; ?>
				</h2>
				<h3 class="cmp-full-protection__subtitle text-gray--dark" data-aos="fade-in">
					<?php echo $subtitle; ?> <a class="cmp-full-protection__link" href="<?php echo $button_link; ?>"><?php echo $button_text; ?></a>
				</h3>
			</div>	
        </div>
    </div>
</section>



