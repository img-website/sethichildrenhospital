/**
 * Sethi Children Hospital - Custom Scripts
 */
(function () {
    'use strict';

    // Lucide Icons init
    if (typeof lucide !== 'undefined') {
        lucide.createIcons();
    }

    // AOS init
    if (typeof AOS !== 'undefined') {
        AOS.init({ duration: 700, offset: 80, once: true });
    }

    // Header scroll effect
    var header = document.getElementById('main-header');
    if (header) {
        window.addEventListener('scroll', function () {
            if (window.scrollY > 50) {
                header.classList.add('h-20', 'md:h-24');
                header.classList.remove('h-24', 'md:h-28');
            } else {
                header.classList.remove('h-20', 'md:h-24');
                header.classList.add('h-24', 'md:h-28');
            }
        });
    }

    // Back to top
    var topBtn = document.getElementById('backToTop');
    if (topBtn) {
        window.addEventListener('scroll', function () {
            if (window.scrollY > 500) {
                topBtn.classList.remove('opacity-0', 'invisible');
                topBtn.classList.add('opacity-100', 'visible');
            } else {
                topBtn.classList.add('opacity-0', 'invisible');
                topBtn.classList.remove('opacity-100', 'visible');
            }
        });
    }

    // Hero Swiper
    if (typeof Swiper !== 'undefined' && document.querySelector('.hero-swiper')) {
        var heroSwiper = new Swiper('.hero-swiper', {
            slidesPerView: 1,
            loop: true,
            effect: 'fade',
            fadeEffect: { crossFade: true },
            speed: 800,
            navigation: {
                prevEl: '.hero-prev',
                nextEl: '.hero-next',
            },
            pagination: {
                el: '.hero-pagination',
                clickable: true,
                dynamicBullets: true,
            },
            on: {
                init: function () { updateCounter(this); },
                slideChange: function () { updateCounter(this); }
            }
        });
    }

    // Team Swiper
    if (typeof Swiper !== 'undefined' && document.querySelector('.team-swiper')) {
        new Swiper('.team-swiper', {
            slidesPerView: 2,
            spaceBetween: 16,
            navigation: { prevEl: '.team-prev', nextEl: '.team-next' },
            pagination: { el: '.team-pagination', clickable: true, dynamicBullets: true },
            breakpoints: { 640: { slidesPerView: 3 }, 1024: { slidesPerView: 5 } },
            speed: 8000,
            autoplay: {
                delay: 0,
                disableOnInteraction: false
            }
        });
    }

    // Gallery Swiper (for PICU/NICU pages)
    if (typeof Swiper !== 'undefined' && document.querySelector('.gallery-swiper')) {
        new Swiper('.gallery-swiper', {
            slidesPerView: 1,
            spaceBetween: 16,
            loop: true,
            navigation: { prevEl: '.gallery-prev', nextEl: '.gallery-next' },
            pagination: { el: '.gallery-pagination', clickable: true, dynamicBullets: true },
            breakpoints: { 640: { slidesPerView: 2 }, 1024: { slidesPerView: 3 } }
        });
    }

    // Slide counter helper
    function updateCounter(swiper) {
        var current = document.querySelector('.swiper-pagination-current');
        var total = document.querySelector('.swiper-pagination-total');
        if (current && total) {
            current.textContent = swiper.realIndex + 1;
            var totalSlides = swiper.el && swiper.el.dataset && swiper.el.dataset.slideCount
                ? parseInt(swiper.el.dataset.slideCount, 10)
                : (swiper.slides && swiper.slides.length ? swiper.slides.length : 3);
            total.textContent = totalSlides;
        }
    }

    // Fancybox init
    if (typeof Fancybox !== 'undefined') {
        Fancybox.bind('[data-fancybox]');
    }

})();

// Menu toggle (global, used via onclick in HTML)
function toggleMenu() {
    var menu = document.getElementById('full-menu');
    if (menu) {
        menu.classList.toggle('-translate-y-full');
    }
}
