<?php 
// available fields
[
'title'           => $title,
'subtitle'        => $subtitle,
'image'           => $image,
'button_link'     => $button_link,
'button_text'     => $button_text,
'some_class'      => $some_class,
'some_id'         => $some_id,
'inner'           => $inner,
'template_path'   => $template_path,
'template_id'     => $template_id,
] = $args;
?>

<?php 
// wp_enqueue_script("script-id");  // load previously registered script
// wp_enqueue_style('style-id'); // load some other registered styles
?>



<section class="hero bg-dark block mb-4">    
    <div class="container">
        <div class="row align-items-center text-center text-md-left">
            <div class="col-12 col-md-6 mb-0 mb-5 mb-md-0 order-2 order-md-1">
                <h1 class="section-header__header text-gradient--dark text-white--light mb-3"><?php echo $title; ?></h1>
                <p class="section-header__text text-gray text-white--light mb-5"><?php echo $subtitle; ?></p>
                <a class="btn btn-secondary" href="<?php echo $button_link; ?>"><?php echo $button_text; ?></a>
            </div>
            <div class="hero__img col-12 col-md-6 order-1 order-md-2">
            <svg width="580" height="601" viewBox="0 0 580 601" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_3121_62480)">
                <ellipse rx="189.044" ry="122.807" transform="matrix(0.968414 -0.249349 0.280913 0.959733 289.571 444)" fill="#C1AEFF"/>
                <path d="M372.526 122L225.526 34.9733C217.926 30.6103 206.026 34.4887 201.026 36.9733C187.426 42.1733 184.693 57.8066 185.026 64.9733V280.473V444C185.026 462 184.426 473.8 208.026 487L346.026 566.973C355.226 571.773 360.526 573 369.026 573C377.359 572.315 394.026 566.752 394.026 549.973V525.973V244.973V168.5C394.026 141.027 383.693 127.833 372.526 122Z" fill="#302B46" stroke="white" stroke-width="0.2"/>
                <path d="M374.526 548.473V173.973C374.526 144.973 363.193 140.64 359.026 136.973L215.026 53.9731C200.526 46.9999 194.026 57.4999 194.026 65.9731V79.4731V442.473C193.526 458.5 197.527 467.027 204.527 471.5L352.026 557.473C366.026 565 373.526 558.5 374.526 548.473Z" fill="#77589F" stroke="black" stroke-width="0.2"/>
                <path d="M186.526 53.9999C192.026 36.4999 209.026 39.9998 217.526 43.9999L362.091 129C369.236 133.333 383.526 146.6 383.526 165V320.5V522V546C383.36 553.5 380.426 569.4 370.026 573" stroke="white" stroke-width="0.2"/>
                <path d="M214.5 328L195 383L194 385V440.5C193.2 462.1 202.666 471.167 207.5 473L356 559C372 565 374.333 551.167 373.5 543.5V534.5L374 173L307 339L273.5 235.5L229 395.5L214.5 328Z" fill="#614388"/>
                <path d="M195 384L214.5 328.5L229.5 395L273.5 236L307 338.5L374.5 173" stroke="black" stroke-width="0.2"/>
                <path d="M305 464.194V201.704C305 181.378 294.488 178.341 290.623 175.771L157.063 117.595C143.615 112.708 137.586 120.067 137.586 126.006V135.468V389.898C137.122 401.131 140.832 407.108 147.325 410.243L284.131 470.502C297.116 475.778 304.072 471.222 305 464.194Z" fill="#F3F3F3" stroke="black" stroke-width="0.2"/>
                <path d="M159.983 118.189V415.336M190.628 132.417V429.016" stroke="black" stroke-width="0.2" stroke-dasharray="2 2"/>
                <path d="M219.085 145.551V441.055" stroke="black" stroke-width="0.2" stroke-dasharray="2 2"/>
                <path d="M250.824 158.137V455.283" stroke="black" stroke-width="0.2" stroke-dasharray="2 2"/>
                <path d="M283.658 172.912V469.511" stroke="black" stroke-width="0.2" stroke-dasharray="2 2"/>
                <path d="M138.095 372.104L305 442.15" stroke="black" stroke-width="0.2" stroke-dasharray="2 2"/>
                <path d="M138.095 328.326L305 396.182" stroke="black" stroke-width="0.2" stroke-dasharray="2 2"/>
                <path d="M137.547 273.603L305 340.365" stroke="black" stroke-width="0.2" stroke-dasharray="2 2"/>
                <path d="M137 211.765L305 279.075" stroke="black" stroke-width="0.2" stroke-dasharray="2 2"/>
                <path d="M137 156.495L305 229.824" stroke="black" stroke-width="0.2" stroke-dasharray="2 2"/>
                <path d="M138 372.5H102L145 274.5H182L138 372.5Z" fill="#BD7469" stroke="black" stroke-width="0.2"/>
                <path d="M182 274.5H145L182.5 405H218.5L182 274.5Z" fill="#E3978B" stroke="black" stroke-width="0.2"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M331.32 91H353L330 -8L256 91H281.842L182.5 405H218.5L331.32 91Z" fill="url(#paint0_linear_3121_62480)"/>
                <path d="M353 91V91.1H353.126L353.097 90.9774L353 91ZM331.32 91V90.9H331.25L331.226 90.9662L331.32 91ZM330 -8L330.097 -8.02263L330.049 -8.2322L329.92 -8.05987L330 -8ZM256 91L255.92 90.9401L255.8 91.1H256V91ZM281.842 91L281.937 91.0302L281.978 90.9H281.842V91ZM182.5 405L182.405 404.97L182.363 405.1H182.5V405ZM218.5 405V405.1H218.57L218.594 405.034L218.5 405ZM353 90.9H331.32V91.1H353V90.9ZM329.903 -7.97737L352.903 91.0226L353.097 90.9774L330.097 -8.02263L329.903 -7.97737ZM256.08 91.0599L330.08 -7.94013L329.92 -8.05987L255.92 90.9401L256.08 91.0599ZM281.842 90.9H256V91.1H281.842V90.9ZM182.595 405.03L281.937 91.0302L281.746 90.9698L182.405 404.97L182.595 405.03ZM218.5 404.9H182.5V405.1H218.5V404.9ZM331.226 90.9662L218.406 404.966L218.594 405.034L331.414 91.0338L331.226 90.9662Z" fill="#181818"/>
                </g>
                <defs>
                <linearGradient id="paint0_linear_3121_62480" x1="324.009" y1="87.4653" x2="143.659" y2="368.22" gradientUnits="userSpaceOnUse">
                <stop stop-color="#BD7469"/>
                <stop offset="1" stop-color="#924D42"/>
                </linearGradient>
                <clipPath id="clip0_3121_62480">
                <rect width="580" height="601" fill="white"/>
                </clipPath>
                </defs>
            </svg>
            </div>
        </div>
    </div>
</section>



