
$(document).ready(function () {  
    var swiperNews = new Swiper(".blog-news__slider", {
      spaceBetween: 30,
      slidesPerView: 1,
      freeMode: true,
      watchSlidesProgress: true,
      breakpoints: {       
        992: {
          slidesPerView: 3,
          spaceBetween: 40
        }
      },
      // navigation: {
      //   nextEl: ".swiper-button-next",
      //   prevEl: ".swiper-button-prev",
      // }        
    });
});