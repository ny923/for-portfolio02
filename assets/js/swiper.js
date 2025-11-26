// TOP FV用swiper
let swiper = new Swiper('.swiper', {
    effect: 'fade',
    fadeEffect: {
        crossFade: true,
        transformEl: 'img',
    },

    loop: true,
    speed: 1000,
    autoplay: {
        delay: 10000,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },

    // centeredSlides: true,
    // slidesPerView: 1,
    // scrollbar: {
    //     el: '.swiper-scrollbar',
    // },
});
