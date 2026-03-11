<?php
/**
 * About Us – Team / Specialists Swiper
 */

$badge     = sch_get_field('about_team_badge');
$heading   = sch_get_field('about_team_heading');
$heading_hl = sch_get_field('about_team_heading_highlight');
$desc      = sch_get_field('about_team_description');
$members   = sch_get_field('about_team_members');
?>

<section class="overflow-hidden py-12 md:py-16 bg-white" data-aos="fade-up" data-aos-duration="700">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-8 md:mb-10">
            <?php if ($badge) : ?>
            <span class="text-primary font-semibold tracking-wider text-xs md:text-sm"><?php echo esc_html($badge); ?></span>
            <?php endif; ?>
            <?php if ($heading || $heading_hl) : ?>
            <h2 class="text-2xl md:text-3xl lg:text-4xl xl:text-5xl font-bold font-anek-gujarati text-gray-900 mt-2">
                <?php echo esc_html($heading); ?>
                <?php if ($heading_hl) : ?><span class="text-secondary"><?php echo esc_html($heading_hl); ?></span><?php endif; ?>
            </h2>
            <?php endif; ?>
            <?php if ($desc) : ?>
            <p class="text-gray-600 text-sm md:text-base max-w-2xl mx-auto mt-3 md:mt-4"><?php echo esc_html($desc); ?></p>
            <?php endif; ?>
        </div>

        <?php if ($members) : ?>
        <div class="relative">
            <div class="swiper team-swiper py-2">
                <div class="swiper-wrapper ![transition-timing-function:linear]">
                    <?php foreach ($members as $m) :
                        $name = $m['name'] ?? '';
                        $spec = $m['specialization'] ?? '';
                        $photo = $m['photo'] ?? '';
                        if (!$photo) $photo = sch_img('doctorPlaceholder.webp');
                    ?>
                    <div class="swiper-slide">
                        <div class="text-center group">
                            <div class="mb-3 md:mb-4">
                                <img src="<?php echo esc_url($photo); ?>" alt="<?php echo esc_attr($name ? 'Dr. ' . $name : ''); ?>" class="size-24 sm:size-28 md:size-32 rounded-2xl md:rounded-3xl mx-auto object-cover border-2 md:border-4 border-white shadow-lg group-hover:border-primary transition-all group-hover:scale-105 duration-300">
                            </div>
                            <h3 class="font-bold text-base md:text-xl lg:text-2xl font-anek-gujarati">
                                <span class="text-primary">Dr.</span> <?php echo esc_html($name); ?>
                            </h3>
                            <p class="text-gray-500 text-xs md:text-sm"><?php echo esc_html($spec); ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <button class="team-prev hidden md:flex absolute left-0 top-1/2 -translate-y-1/2 z-10 w-12 h-12 bg-white rounded-full shadow-lg items-center justify-center text-gray-600 hover:text-primary transition-all hover:scale-110">
                <i data-lucide="chevron-left" class="w-6 h-6"></i>
            </button>
            <button class="team-next hidden md:flex absolute right-0 top-1/2 -translate-y-1/2 z-10 w-12 h-12 bg-white rounded-full shadow-lg items-center justify-center text-gray-600 hover:text-primary transition-all hover:scale-110">
                <i data-lucide="chevron-right" class="w-6 h-6"></i>
            </button>

            <div class="team-pagination flex justify-center mt-8 relative [&_.swiper-pagination-bullet]:bg-primary [&_.swiper-pagination-bullet]:!w-3 [&_.swiper-pagination-bullet]:!h-3 [&_.swiper-pagination-bullet]:!rounded-full"></div>
        </div>
        <?php endif; ?>
    </div>
</section>
