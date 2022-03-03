$(document).ready(function () { 

    const category = $('.widget-card__widget').attr('id');   
    get_instruments_symbols( category );
    console.log(category);

    $('select#toShow').on('change', function(){
      $('#instruments-widget-data input[name="toShow"]').val( $(this).val() );
      get_instruments_symbols( category );
    });

  
});
