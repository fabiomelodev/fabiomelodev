//logo
const swiperServices = new Swiper( '.js-swiper-logo', {
    loop: true,

    breakpoints: {
        320: {
            slidesPerView: 1,
        },

        768: {
            slidesPerView: 2,
            spaceBetween: 30
        },

        992: {
            slidesPerView: 4,
        }
    },

    autoplay: {
        delay: 6000,
        disableOnInteraction: false
    }
});