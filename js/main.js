$(document).ready(function () {
  new Swiper(".hotel-slider", {
    loop: !0,
    navigation: {
      nextEl: ".hotel-slider__button--next",
      prevEl: ".hotel-slider__button--prev",
    },
    keyboard: { enabled: !0, onlyInViewport: !1 },
    autoplay: { delay: 3e3, stopOnLastSlide: !1, diasableOnInteraction: !1 },
  }),
    new Swiper(".reviews-slider", {
      loop: !0,
      navigation: {
        nextEl: ".reviews-slider__button--next",
        prevEl: ".reviews-slider__button--prev",
      },
    });
  $(".menu-button").on("click", function () {
    $(".navbar-bottom").toggleClass("navbar-bottom-visible"),
      document.body.classList.toggle("lock");
  });
  var e = $("[data-toggle=modal]"),
    o = $(".modal__close");
  e.on("click", function () {
    var e = $(this).attr("data-href");
    $(e).find(".modal__overlay").addClass("modal__overlay--visible"),
      $(e).find(".modal__dialog").addClass("modal__dialog--visible"),
      document.body.classList.toggle("lock");
  }),
    o.on("click", function (e) {
      e.preventDefault();
      var o = $(".modal__overlay"),
        e = $(".modal__dialog");
      o.removeClass("modal__overlay--visible"),
        e.removeClass("modal__dialog--visible"),
        document.body.classList.remove("lock");
    }),
    $(".form").each(function () {
      $(this).validate({
        errorClass: "invalid",
        messages: {
          name: {
            required: "Please enter your name",
            minlength: "Name must be at least 2 letters long",
          },
          email: {
            required: "We need your email address to contact you",
            email:
              "Your email address must be in the format of name@domain.com",
          },
          phone: { required: "The phone is deactivated" },
        },
      });
    }),
    $("#phone").mask("+7(999) 999-9999"),
    $("#phonex").mask("+7(999) 999-9999"),
    AOS.init();
});
