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

    // Contact form: loader + disable only submit button on submit (do not disable inputs – disabled fields are not sent with the form)
    var contactForm = document.getElementById('sch-contact-form');
    if (contactForm) {
        contactForm.addEventListener('submit', function () {
            if (contactForm.classList.contains('is-submitting')) return;
            contactForm.classList.add('is-submitting');
            var submitBtn = contactForm.querySelector('.sch-contact-submit');
            var btnText = contactForm.querySelector('.sch-contact-btn-text');
            var btnLoader = contactForm.querySelector('.sch-contact-btn-loader');
            if (submitBtn) submitBtn.disabled = true;
            if (btnText) btnText.classList.add('hidden');
            if (btnLoader) btnLoader.classList.remove('hidden');
        });

        // Contact No.: allow only digits (block alphabets and other non-numeric input)
        var phoneInput = contactForm.querySelector('.sch-contact-phone');
        if (phoneInput) {
            phoneInput.addEventListener('keypress', function (e) {
                if (e.key !== 'Backspace' && e.key !== 'Tab' && (e.key < '0' || e.key > '9')) {
                    e.preventDefault();
                }
            });
            phoneInput.addEventListener('input', function () {
                this.value = this.value.replace(/\D/g, '');
                if (this.value.length > 10) this.value = this.value.slice(0, 10);
            });
            phoneInput.addEventListener('paste', function (e) {
                var pasted = (e.clipboardData || window.clipboardData).getData('text');
                var digits = pasted.replace(/\D/g, '').slice(0, 10);
                e.preventDefault();
                var start = this.selectionStart;
                var end = this.selectionEnd;
                this.value = this.value.slice(0, start) + digits + this.value.slice(end);
                this.setSelectionRange(start + digits.length, start + digits.length);
            });
        }
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

    // Team Swiper (Home & About Us)
    if (typeof Swiper !== 'undefined' && document.querySelector('.team-swiper')) {
        new Swiper('.team-swiper', {
            loop: true,
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

    // Gallery Swiper (services inner pages: 1 slide full width, autoplay, timer progress bar)
    if (typeof Swiper !== 'undefined' && document.querySelector('.gallery-swiper')) {
        var galleryTimerRaf = null;
        function startGalleryTimerBar(swiper) {
            var container = swiper.el.closest('.relative');
            var fill = container ? container.querySelector('.gallery-timer-fill') : null;
            if (!fill) return;
            if (galleryTimerRaf) cancelAnimationFrame(galleryTimerRaf);
            var delay = (swiper.params.autoplay && swiper.params.autoplay.delay) ? swiper.params.autoplay.delay : 4000;
            var start = performance.now();
            fill.style.width = '0%';
            function update() {
                var elapsed = performance.now() - start;
                var percent = Math.min(100, (elapsed / delay) * 100);
                fill.style.width = percent + '%';
                if (percent < 100) galleryTimerRaf = requestAnimationFrame(update);
            }
            galleryTimerRaf = requestAnimationFrame(update);
        }
        document.querySelectorAll('.gallery-swiper').forEach(function (el) {
            new Swiper(el, {
                slidesPerView: 1,
                spaceBetween: 0,
                loop: true,
                autoplay: { delay: 4000, disableOnInteraction: false },
                speed: 800,
                navigation: { prevEl: el.querySelector('.gallery-prev'), nextEl: el.querySelector('.gallery-next') },
                pagination: { el: el.querySelector('.gallery-pagination'), clickable: true },
                on: {
                    init: function () { startGalleryTimerBar(this); },
                    slideChange: function () { startGalleryTimerBar(this); }
                }
            });
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
