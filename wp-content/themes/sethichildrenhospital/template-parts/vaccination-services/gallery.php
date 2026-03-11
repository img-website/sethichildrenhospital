<?php
/**
 * Vaccination Services – Gallery
 */

$images   = sch_get_field('vsvc_gallery_images');
$fallback = function_exists('sch_img') ? sch_img('doctorPlaceholder.webp') : '';
?>

<section class="overflow-hidden py-12 md:py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-8" data-aos="fade-up" data-aos-duration="700">
            <span class="text-primary font-semibold tracking-wider text-xs md:text-sm">Our Facility</span>
            <h2 class="text-3xl md:text-4xl lg:text-5xl xl:text-6xl font-bold font-anek-gujarati text-gray-900 mt-2">Vaccination <span class="text-secondary">at SCH</span></h2>
        </div>
        <?php if ($images) : ?>
        <div class="relative" data-aos="fade-up" data-aos-duration="800">
            <div class="swiper gallery-swiper rounded-2xl overflow-hidden shadow-2xl" data-slide-count="<?php echo esc_attr(count($images)); ?>">
                <div class="swiper-wrapper">
                    <?php foreach ($images as $img) :
                        $url = $img['image'] ?? '';
                        if (!$url) continue;
                        $alt = $img['alt'] ?? 'Vaccination';
                    ?>
                    <div class="swiper-slide">
                        <img src="<?php echo esc_url($url); ?>" alt="<?php echo esc_attr($alt); ?>" class="w-full h-[300px] md:h-[400px] lg:h-[500px] object-cover"<?php echo $fallback ? ' onerror="this.src=\'' . esc_url($fallback) . '\'"' : ''; ?>>
                    </div>
                    <?php endforeach; ?>
                </div>
                <button class="gallery-prev absolute left-4 top-1/2 -translate-y-1/2 z-20 w-10 h-10 md:w-12 md:h-12 bg-white/90 backdrop-blur rounded-full shadow-xl flex items-center justify-center text-gray-700 hover:text-primary transition-all hover:scale-110">
                    <i data-lucide="chevron-left" class="w-5 h-5 md:w-6 md:h-6"></i>
                </button>
                <button class="gallery-next absolute right-4 top-1/2 -translate-y-1/2 z-20 w-10 h-10 md:w-12 md:h-12 bg-white/90 backdrop-blur rounded-full shadow-xl flex items-center justify-center text-gray-700 hover:text-primary transition-all hover:scale-110">
                    <i data-lucide="chevron-right" class="w-5 h-5 md:w-6 md:h-6"></i>
                </button>
                <div class="gallery-pagination absolute bottom-4 left-1/2 -translate-x-1/2 z-20 [&_.swiper-pagination-bullet]:bg-white [&_.swiper-pagination-bullet]:opacity-70 [&_.swiper-pagination-bullet-active]:bg-primary [&_.swiper-pagination-bullet-active]:opacity-100"></div>
            </div>
            <div class="gallery-timer-bar -mt-4 relative z-10 flex mx-4 h-1.5 rounded-full overflow-hidden">
                <div class="gallery-timer-fill h-full bg-white/20 backdrop-blur-sm rounded-full transition-none" style="width: 0%;"></div>
            </div>
        </div>
        <?php endif; ?>
    </div>
</section>

