$(document).ready(function () {  
    var swiperStocks = new Swiper(".global-stocks__slider", {
      spaceBetween: 30,
      slidesPerView: 2,      
      watchSlidesProgress: true,
      autoplay: true,
      // loop: true,
      breakpoints: { 
        768: {
          slidesPerView: 3
        }, 
        992: {
          slidesPerView: 5          
        },
        1400: {
            slidesPerView: 6 
        }
      },      
      // scrollbar: {
      //   el: ".swiper-scrollbar",
      //   hide: false,
      //   draggable: true,
      // },    
    });
});