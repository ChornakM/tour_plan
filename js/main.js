var hotelSlider = new Swiper(".hotel-slider", {
  // Optional parameters
  loop: true,

  // Navigation arrows
  navigation: {
    nextEl: ".hotel-slider__button--next",
    prevEl: ".hotel-slider__button--prev",
  },

  keyboard: {
    enabled: true,
    onlyInViewport: false,
  },

  autoplay: {
    delay: 3000,
    stopOnLastSlide: false,
    diasableOnInteraction: false,
  },
});
var reveiwsSlider = new Swiper(".reviews-slider", {
  // Optional parameters
  loop: true,

  // Navigation arrows
  navigation: {
    nextEl: ".reviews-slider__button--next",
    prevEl: ".reviews-slider__button--prev",
  },
});
var menuButton = document.querySelector(".menu-button");
menuButton.addEventListener("click", function () {
  console.log(" клик покноп");
  document
    .querySelector(".navbar-bottom")
    .classList.toggle("navbar-bottom-visible");
  $("body").toggleClass("-lock");
});
