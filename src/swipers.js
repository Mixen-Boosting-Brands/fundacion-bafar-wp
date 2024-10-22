// core version + navigation, pagination modules:
import Swiper from "swiper";
import { Navigation, Pagination, Autoplay, Thumbs } from "swiper/modules";

// import Swiper and modules styles
import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";

document.addEventListener("DOMContentLoaded", function () {
    // init Swiper:
    const swiperJumbotron = new Swiper(".swiper-jumbotron", {
        // configure Swiper to use modules
        modules: [Navigation, Pagination, Autoplay],

        // Optional parameters
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        direction: "horizontal",
        loop: false,
        allowTouchMove: true,
        slidesPerView: 1,
        spaceBetween: 0,

        // if we need navigation
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },

        // If we need pagination
        pagination: {
            el: ".swiper-pagination",
        },
    });

    // init Swiper:
    const swiperAliados = new Swiper(".swiper-aliados", {
        // configure Swiper to use modules
        modules: [Navigation, Pagination, Autoplay],

        // Optional parameters
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        direction: "horizontal",
        loop: false,
        allowTouchMove: true,
        slidesPerView: 2,
        spaceBetween: 15,
        grabCursor: true,

        // breakpoints
        breakpoints: {
            576: {
                slidesPerView: 2,
                spaceBetween: 30,
            },
            768: {
                slidesPerView: 4,
                spaceBetween: 30,
            },
            992: {
                slidesPerView: 8,
                spaceBetween: 30,
            },
        },

        // if we need navigation
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },

        // If we need pagination
        pagination: {
            el: ".swiper-pagination",
        },
    });

    // init Swiper:
    const swiperGaleria = new Swiper(".swiper-galeria", {
        // configure Swiper to use modules
        modules: [Navigation, Pagination, Autoplay],

        // Optional parameters
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        direction: "horizontal",
        loop: false,
        allowTouchMove: true,
        slidesPerView: 1,
        spaceBetween: 0,
        autoHeight: true,

        // breakpoints
        breakpoints: {
            576: {
                slidesPerView: 2,
                spaceBetween: 30,
            },
            768: {
                slidesPerView: 4,
                spaceBetween: 30,
            },
        },

        // if we need navigation
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },

        // If we need pagination
        pagination: {
            el: ".swiper-pagination",
        },
    });

    // init Swiper:
    const swiperLogos = new Swiper(".swiper-logos", {
        // configure Swiper to use modules
        modules: [Navigation, Pagination, Autoplay],

        // Optional parameters
        autoplay: {
            delay: 2000,
            disableOnInteraction: false,
        },
        direction: "horizontal",
        loop: true,
        allowTouchMove: true,
        slidesPerView: 2,
        spaceBetween: 15,
        grabCursor: true,

        // breakpoints
        breakpoints: {
            576: {
                slidesPerView: 2,
                spaceBetween: 30,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
            992: {
                slidesPerView: 4,
                spaceBetween: 30,
            },
        },
    });

    // init Swiper:
    const swiperMasContenido = new Swiper(".swiper-mas-contenido", {
        // configure Swiper to use modules
        modules: [Navigation, Pagination, Autoplay],

        // Optional parameters
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        direction: "horizontal",
        loop: false,
        allowTouchMove: true,
        slidesPerView: 1,
        spaceBetween: 30,
        grabCursor: true,

        // breakpoints
        breakpoints: {
            576: {
                slidesPerView: 2,
                spaceBetween: 30,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
            992: {
                slidesPerView: 4,
                spaceBetween: 30,
            },
        },

        // if we need navigation
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },

        // If we need pagination
        pagination: {
            el: ".swiper-pagination",
        },
    });

    // init Swiper:
    const swiperVideos = new Swiper(".swiper-videos", {
        // configure Swiper to use modules
        modules: [Navigation, Pagination, Autoplay],

        // Optional parameters
        direction: "horizontal",
        loop: false,
        allowTouchMove: true,
        slidesPerView: 1,
        spaceBetween: 30,
        grabCursor: true,
        on: {
            slideChange: function () {
                console.log("Slide changed");
                stopAllVideos();
            },
        },

        // breakpoints
        breakpoints: {
            576: {
                slidesPerView: 2,
                spaceBetween: 30,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 30,
            },
            992: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
            1200: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
            1400: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
        },

        // if we need navigation
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },

        // If we need pagination
        pagination: {
            el: ".swiper-pagination",
        },
    });

    // init Swiper:
    const swiperLogros = new Swiper(".swiper-logros", {
        // configure Swiper to use modules
        modules: [Navigation, Pagination, Autoplay],

        // Optional parameters
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        direction: "horizontal",
        loop: false,
        allowTouchMove: true,
        slidesPerView: 1,
        spaceBetween: 30,
        grabCursor: true,

        // breakpoints
        breakpoints: {
            576: {
                slidesPerView: 2,
                spaceBetween: 30,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 30,
            },
            992: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
        },

        // if we need navigation
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },

        // If we need pagination
        pagination: {
            el: ".swiper-pagination",
        },
    });
});
