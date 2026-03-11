<?php
/**
 * Enqueue styles and scripts.
 */

if (!defined('ABSPATH')) {
    exit;
}

function sch_enqueue_assets() {
    // ── CSS (Head) ──
    wp_enqueue_style('sch-google-fonts-preconnect', 'https://fonts.googleapis.com', array(), null);
    wp_enqueue_style('sch-google-fonts', 'https://fonts.googleapis.com/css2?family=Anek+Gujarati:wght@100..800&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap', array(), null);
    wp_enqueue_style('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), '11.0');
    wp_enqueue_style('fancybox', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css', array(), '5.0');
    wp_enqueue_style('aos', 'https://unpkg.com/aos@2.3.1/dist/aos.css', array(), '2.3.1');
    wp_enqueue_style('sch-style', get_stylesheet_uri(), array('sch-google-fonts', 'swiper', 'fancybox', 'aos'), SCH_THEME_VERSION);
    wp_enqueue_style('sch-custom', SCH_THEME_URI . '/assets/css/custom.css', array('sch-style'), SCH_THEME_VERSION);

    // ── JS (Head) ──
    wp_enqueue_script('tailwindcss', 'https://cdn.tailwindcss.com', array(), null, false);
    $tailwind_config = "
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#00a650',
                        secondary: '#3d348b',
                        accent: '#F7B801',
                        'accent-dark': '#F35B04',
                    },
                    animation: {
                        fadeInUp: 'fadeInUp 0.8s ease-out forwards',
                    },
                    keyframes: {
                        fadeInUp: {
                            '0%': { opacity: 0, transform: 'translateY(1.875rem)' },
                            '100%': { opacity: 1, transform: 'translateY(0)' },
                        }
                    },
                    fontFamily: {
                        'montserrat': ['\"Montserrat\", sans-serif'],
                        'poppins': ['\"Poppins\", sans-serif'],
                        'anek-gujarati': ['\"Anek Gujarati\", sans-serif']
                    }
                }
            }
        }
    ";
    wp_add_inline_script('tailwindcss', $tailwind_config, 'after');

    // ── JS (Footer) ──
    wp_enqueue_script('lucide', 'https://unpkg.com/lucide@latest/dist/umd/lucide.js', array(), null, true);
    wp_enqueue_script('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), '11.0', true);
    wp_enqueue_script('fancybox', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js', array(), '5.0', true);
    wp_enqueue_script('aos', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array(), '2.3.1', true);
    wp_enqueue_script('sch-custom', SCH_THEME_URI . '/assets/js/custom.js', array('lucide', 'swiper', 'fancybox', 'aos'), SCH_THEME_VERSION, true);
}
add_action('wp_enqueue_scripts', 'sch_enqueue_assets');
