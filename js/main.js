var mySwiper = new Swiper(".swiper-container", {
  // Optional parameters
  loop: true,

  // Navigation arrows
  navigation: {
    nextEl: ".slider-button--next",
    prevEl: ".slider-button--prev",
  },

  keyboard: {
    enabled: true,
    onlyInViewport: false,
  },

  autoplay: {
    dalay: 3000,
    stopOnLastSlide: false,
    diasableOnInteraction: false,
  },
});
