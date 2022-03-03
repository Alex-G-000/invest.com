$(document).ready(function () { 

    let category = $('#instruments-widget-data input[name="category"]').val();   
    get_instruments_symbols( category );

    $('.widget-card-nav a').on('click', function (e) {
        e.preventDefault;

        let cardTitle = $(this).text();
        $('.widget-card__title').text(cardTitle);

        $('.widget-card-nav a').removeClass('active');
        $(this).addClass('active');

        category = $(this).attr('data-category'); 
        $('#instruments-widget-data input[name="category"]').val(category);       
        get_instruments_symbols( category );        
    });

    $('select#toShow').on('change', function(){
      $('#instruments-widget-data input[name="toShow"]').val( $(this).val() );
      get_instruments_symbols( category );
    });

  
});
