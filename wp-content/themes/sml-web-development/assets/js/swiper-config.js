var swiper = new Swiper(".mySwiper", {
    effect: "cards",
    grabCursor: true,
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
    },
  });

var swiper = new Swiper(".testimonial-swiper", {
  effect: "coverflow",
  grabCursor: true,
  centeredSlide: true,
  slidesPerView: "auto",
  coverFlowEffect: {
    rotate: 50,
    stretch: 0,
    depth: 100,
    modifier: 1,
    slideShadows: true,
  },
  pagination: {
    el: ".swiper-pagination",
  },
});