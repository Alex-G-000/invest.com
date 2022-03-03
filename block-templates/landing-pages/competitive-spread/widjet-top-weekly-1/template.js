$(document).ready(function () {     
    
    let iframe = $('.widget-top-weekly-1 iframe');

    $('.widget-top-weekly-1 .block__switcher').on("click", function(){ 

        let symbol = $(this).attr('data-symbol');      
        let description = $(this).attr('data-description');  

        let src = iframe.attr("src");
        let url = new URL(src);
        let params = new URLSearchParams(url.search); 

        let tmpDescription = params.get('symbols');   
        params.delete(tmpDescription); 
        params.set('symbols', description); 
        params.append(description, symbol);  
        let newSrc = src.split('?')[0] + "?" + params.toString();

        iframe.attr('src', newSrc);
        $('.widget-top-weekly-1 .block__switcher').removeClass('active');
        $(this).addClass('active');

    });

    let iframe2 = $('.widget-top-weekly-2 iframe');

    $('.widget-top-weekly-2 .block__switcher').on("click", function(){ 

        let symbol = $(this).attr('data-symbol');      
        let description = $(this).attr('data-description');  

        let src = iframe2.attr("src");
        let url = new URL(src);
        let params = new URLSearchParams(url.search); 

        let tmpDescription = params.get('symbols');   
        params.delete(tmpDescription); 
        params.set('symbols', description); 
        params.append(description, symbol);  
        let newSrc = src.split('?')[0] + "?" + params.toString();

        iframe2.attr('src', newSrc);
        $('.widget-top-weekly-2 .block__switcher').removeClass('active');
        $(this).addClass('active');

    });
    
});

