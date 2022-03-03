
$(document).ready(function () {  
    var swiperAbout = new Swiper(".thumb-slider", {
      spaceBetween: 30,
      slidesPerView: 4,
      freeMode: true,
      watchSlidesProgress: true,
      breakpoints: {
        0: {
          slidesPerView: 2,
          spaceBetween: 20
        },
        768: {
          slidesPerView: 3,
          spaceBetween: 30
        },
        992: {
          slidesPerView: 4,
          spaceBetween: 40
        }
      }
    });
    var swiperAbout2 = new Swiper(".about-us__slider", {
      spaceBetween: 30,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      thumbs: {
        swiper: swiperAbout,
      },      
    });
});