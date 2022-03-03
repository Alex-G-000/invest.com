$(document).ready(function () {
    let counterActed = false;
    $(window).scroll(function(){    
        if ( $('.numbers-block').isOnScreen() && counterActed === false ) {    
            $('.numbers-block__number').countTo({            
                speed: 1000,
                refreshInterval: 50,
                formatter: function (value, options) {
                return value.toFixed(options.decimals);
                }           
            });    
            counterActed = true;    
        }     
    });
});