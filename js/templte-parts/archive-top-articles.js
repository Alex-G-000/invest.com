
$(document).ready(function () { 

  var swiperTopArticles = Swiper;
  var init = false;

  function swiperMode() {
      let mobile = window.matchMedia('(min-width: 0px) and (max-width: 768px)');
      let desktop = window.matchMedia('(min-width: 769px)');
    // Enable (for mobile)
    if(mobile.matches) {
        swiper.destroy();
        init = false;
    } 
    if(desktop.matches) {
      if (!init) {
        init = true;
        var swiperTopArticles = new Swiper(".top-articles__slider", {
          spaceBetween: 30,
          slidesPerView: 2,
          speed: 600,
          loop: true,
          navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
          },
          breakpoints: {   
            992: {
              slidesPerView: 3,
              spaceBetween: 30
            },
            1200: {
              slidesPerView: 4,
              spaceBetween: 30
            }
          }          
        });
      }
    }
  }

  swiperMode();

/*
  window.addEventListener('load', function() {
    swiperMode();
  });

  window.addEventListener('resize', function() {
  swiperMode();
  });
*/

});

$(window).on('resize',swiperMode);
