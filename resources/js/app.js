import "./bootstrap";
import Alpine from "alpinejs";
window.Alpine = Alpine;
Alpine.start();

// Pakai Swiper versi klasik
import Swiper from "swiper/bundle";
import "swiper/css/bundle";

document.addEventListener("DOMContentLoaded", function () {
    new Swiper(".swiper", {
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            1024: {
                slidesPerView: 1,
                spaceBetween: 12,
            },
            768: {
                slidesPerView: 1,
                spaceBetween: 12,
            },
            0: {
                slidesPerView: 1,
                spaceBetween: 12,
            },
        },
    });
});
