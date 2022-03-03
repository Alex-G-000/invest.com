
$(document).ready(function () {    
    const swiperLatestFullwidth = new Swiper(".latest-news__slider", {
      spaceBetween: 30,
      speed: 600,
      slidesPerView: 1,
      loop: true,
      autoplay: {
        delay: 4000,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      }          
    });
});