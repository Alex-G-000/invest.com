$(document).ready(function () { 

    let category = $('#instruments-homepage-widget-data input[name="category"]').val();   
    get_instruments_homepage_widget_symbols( category );

    $('#instruments-tab a').on('click', function (e) {
        e.preventDefault;
  
        $('#instruments-tab a').removeClass('active');
        $(this).addClass('active');

        category = $(this).attr('data-category'); 
        $('#instruments-homepage-widget-data input[name="category"]').val(category);       
        get_instruments_homepage_widget_symbols( category ); 
    });   

  
});
