$(document).ready(function () {    
    const swiperSliderCategory = new Swiper(".slider-category__slider", {
      spaceBetween: 30,
      speed: 600,
      slidesPerView: "auto",
      freeMode: true,
      loop: true,
      autoplay: {
        delay: 2000,
      },
      navigation: {
        nextEl: ".slider-category__next",
        //prevEl: ".slider-category__prev",
      }          
    });
});