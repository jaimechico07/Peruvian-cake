const swiperHero = new Swiper(".swiper--home-hero", {
  loop: true,
  slidesPerView: 1,
  spaceBetween: 100,
  grabCursor: true,
  direction: "vertical",
  pagination: {
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  pagination: {
    el: ".swiper-pagination",
    type: "progressbar",
  },
  scrollbar: {
    verticalClass: "swiper-scrollbar-vertical",
  },
});

const swiperFavorites = new Swiper(".swiper--favorites", {
  loop: true,
  slidesPerView: 1,
  spaceBetween: 20,
  grabCursor: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    1024: {
      slidesPerView: 2,
    },
    1280: {
      slidesPerView: 3,
    },

    1536: {
      slidesPerView: 4,
    },
  },
});

swiperFavorites.init();

// sección postres
const swiperDesserts = new Swiper(".swiper--desserts", {
  loop: true,
  slidesPerView: 1,
  spaceBetween: 20,
  grabCursor: true,
  pagination: {
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    1024: {
      slidesPerGroup: 3,
      slidesPerView: 2,
    },
    1280: {
      slidesPerView: 3,
      slidesPerGroup: 3,
    },
  },
});

swiperDesserts.init();

// sección galeria
const swiperGallery = new Swiper(".swiper--gallery ", {
  slidesPerView: 1,
  grabCursor: true,
  grid: {
    rows: 2,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

swiperGallery.init();

const swiperOurTeam = new Swiper(".swiper--ourTeam", {
  loop: true,
  spaceBetween: 30,
  slidesPerView: 1,
  grabCursor: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

swiperOurTeam.init();


const swiperDetails = new Swiper('.swiper--featured-details', {
  loop: true,
  spaceBetween: 80,
  slidesPerView: 1,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    640: {
      slidesPerView: 2,
      spaceBetween: 80,
      loop: true,
    },
    1024: {
      slidesPerView: 3,
      spaceBetween: 80,
      loop: false,
    },
  },
});
