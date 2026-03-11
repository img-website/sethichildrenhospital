<?php
/**
 * Contact Us – Hero
 */

$badge      = sch_get_field('cu_hero_badge');
$badge_icon = sch_get_field('cu_hero_badge_icon') ?: 'phone';
$heading    = sch_get_field('cu_hero_heading');
$heading_hl = sch_get_field('cu_hero_heading_highlight');
?>

<section class="relative pt-28 lg:pt-32 pb-10 md:pb-12 lg:pb-16 bg-gradient-to-br from-blue-50 via-white to-green-200 overflow-hidden">
    <div class="absolute inset-0 opacity-20">
        <div class="absolute top-20 right-20 w-64 h-64 bg-primary/20 rounded-full blur-3xl"></div>
        <div class="absolute bottom-20 left-20 w-80 h-80 bg-secondary/10 rounded-full blur-3xl"></div>
    </div>
    <div class="max-w-7xl mx-auto px-4 relative z-10 flex flex-col gap-8">
        <div class="flex items-center gap-2 text-xs md:text-sm text-gray-600 mb-4" data-aos="fade-up" data-aos-duration="600">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="hover:text-primary transition-colors flex items-center gap-1">
                <i data-lucide="home" class="w-4 h-4"></i>
                <span>Home</span>
            </a>
            <i data-lucide="chevron-right" class="w-4 h-4 text-gray-400"></i>
            <span class="text-primary font-medium">Contact Us</span>
        </div>
        <div class="max-w-3xl" data-aos="fade-up" data-aos-duration="700" data-aos-delay="100">
            <?php if ($badge) : ?>
            <div class="inline-flex items-center gap-2 bg-primary/10 text-primary px-3 py-1.5 md:px-4 md:py-2 rounded-full text-xs md:text-sm font-medium mb-4">
                <?php if ($badge_icon) : ?><i data-lucide="<?php echo esc_attr($badge_icon); ?>" class="w-3.5 h-3.5 md:w-4 md:h-4"></i><?php endif; ?>
                <span><?php echo esc_html($badge); ?></span>
            </div>
            <?php endif; ?>
            <?php if ($heading || $heading_hl) : ?>
            <h1 class="text-3xl md:text-4xl lg:text-5xl xl:text-6xl font-bold font-anek-gujarati text-gray-900 mb-4 leading-tight">
                <?php echo esc_html($heading); ?>
                <?php if ($heading_hl) : ?><span class="text-primary"><?php echo esc_html($heading_hl); ?></span><?php endif; ?>
            </h1>
            <?php endif; ?>
        </div>
    </div>
</section>
