$(document).ready(function () {     

    $('#instruments-tab a').on('click', function (e) {
        e.preventDefault;
  
        $('#instruments-tab a').removeClass('active');
        $(this).addClass('active');

        let category = $(this).attr('data-category'); 
        $('#instruments-homepage-widget-data input[name="category"]').val(category);       
        get_instruments_homepage_widget_symbols( category ); 
    });   

  
});
