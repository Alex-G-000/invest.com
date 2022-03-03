<?php

// Shortcode functions here

//tape-ticker widget
function add_widget_tape_ticker_func( $atts ){
    $output = "<section class='w-100 bg-dark pb-0 mt-0'>";
    ob_start();
    get_template_part( 'template-parts/tradeview-widjets/tape-ticker/widjet' ); 
    $output.= ob_get_clean(); 
    $output.= "</section>";
    return $output;
}
add_shortcode( 'add_widget_tape_ticker', 'add_widget_tape_ticker_func' );



//show pdf on page
function show_pdf_doc_func( $args ){
       
    $broker = $args["broker"];
    $doc = $args["doc"];
    
    $acf_path = "document-links_" . $doc . "-" . $broker;
    $doc_link = get_field($acf_path, 'option');

    // echo '
    // <iframe
    // style="min-height:70vh;" 
    // src="https://drive.google.com/viewerng/viewer?embedded=true&url=' . $doc_link . '#toolbar=0&scrollbar=0"
    // frameBorder="0"
    // scrolling="auto"
    // height="100%"
    // width="100%"
    // ></iframe>
    // ';

    echo '
    <embed
    style="min-height:70vh;"
    src="' . $doc_link . '#toolbar=0&navpanes=0&scrollbar=0"
    type="application/pdf"
    frameBorder="0"
    scrolling="auto"
    height="100%"
    width="100%"
    ></embed>';

}
add_shortcode( 'show_pdf_doc', 'show_pdf_doc_func' );