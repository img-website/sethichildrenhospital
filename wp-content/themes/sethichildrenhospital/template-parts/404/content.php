<?php
/**
 * 404 Page – Main content (dynamic from Sethi Hospital → 404 Page options)
 */

$badge      = sch_get_field('p404_badge', 'option');
$badge_icon = sch_get_field('p404_badge_icon', 'option') ?: 'search-x';
$heading    = sch_get_field('p404_heading', 'option');
$heading_hl = sch_get_field('p404_heading_hl', 'option');
$desc       = sch_get_field('p404_description', 'option');
$btn_link   = sch_get_field('p404_btn_link', 'option');
$btn_link   = is_array($btn_link) ? $btn_link : array();
$btn_icon   = sch_get_field('p404_btn_icon', 'option') ?: 'home';

$home_url = home_url('/');
?>

<section class="relative pt-28 lg:pt-32 pb-16 md:pb-24 bg-gradient-to-br from-blue-50 via-white to-green-200 overflow-hidden min-h-[60vh] flex items-center">
    <div class="absolute inset-0 opacity-20">
        <div class="absolute top-20 right-20 w-64 h-64 bg-primary/20 rounded-full blur-3xl"></div>
        <div class="absolute bottom-20 left-20 w-80 h-80 bg-secondary/10 rounded-full blur-3xl"></div>
    </div>
    <div class="max-w-3xl mx-auto px-4 relative z-10 text-center">

        <?php if ($badge) : ?>
        <div class="inline-flex items-center gap-2 bg-primary/10 text-primary px-3 py-1.5 md:px-4 md:py-2 rounded-full text-xs md:text-sm font-medium mb-6" data-aos="fade-up" data-aos-duration="600" data-aos-delay="50">
            <?php if ($badge_icon) : ?><i data-lucide="<?php echo esc_attr($badge_icon); ?>" class="w-3.5 h-3.5 md:w-4 md:h-4"></i><?php endif; ?>
            <span><?php echo esc_html($badge); ?></span>
        </div>
        <?php endif; ?>

        <h1 class="text-6xl md:text-7xl lg:text-8xl font-bold font-anek-gujarati text-gray-900 mb-2" data-aos="fade-up" data-aos-duration="600" data-aos-delay="100">
            <span class="glitch-404" data-text="<?php echo esc_attr($heading ?: 'Oops!'); ?>">
                <span class="glitch-404-inner"><?php echo esc_html($heading ?: 'Oops!'); ?></span>
            </span><span class="glitch-404 glitch-404-num text-primary" data-text="404">
                <span class="glitch-404-inner">404</span>
            </span>
            <?php if ($heading_hl) : ?><span class="block text-2xl md:text-3xl lg:text-4xl mt-2 text-gray-700"><?php echo esc_html($heading_hl); ?></span><?php endif; ?>
        </h1>

        <?php if ($desc) : ?>
        <p class="text-gray-600 text-base md:text-lg max-w-xl mx-auto mt-6 mb-10" data-aos="fade-up" data-aos-duration="600" data-aos-delay="150"><?php echo esc_html($desc); ?></p>
        <?php endif; ?>

        <?php if (!empty($btn_link['url'])) : ?>
        <a href="<?php echo esc_url($btn_link['url']); ?>"<?php echo !empty($btn_link['target']) ? ' target="' . esc_attr($btn_link['target']) . '" rel="noopener noreferrer"' : ''; ?> class="inline-flex items-center gap-2 bg-gradient-to-r from-primary to-secondary text-white px-8 py-3.5 rounded-xl text-sm md:text-base font-semibold hover:shadow-xl transition-all hover:-translate-y-0.5" data-aos="fade-up" data-aos-duration="600" data-aos-delay="200">
            <?php if ($btn_icon) : ?><i data-lucide="<?php echo esc_attr($btn_icon); ?>" class="w-4 h-4"></i><?php endif; ?>
            <?php echo esc_html($btn_link['title'] ?: __('Back to Home', 'sethichildrenhospital')); ?>
        </a>
        <?php else : ?>
        <a href="<?php echo esc_url($home_url); ?>" class="inline-flex items-center gap-2 bg-gradient-to-r from-primary to-secondary text-white px-8 py-3.5 rounded-xl text-sm md:text-base font-semibold hover:shadow-xl transition-all hover:-translate-y-0.5" data-aos="fade-up" data-aos-duration="600" data-aos-delay="200">
            <?php if ($btn_icon) : ?><i data-lucide="<?php echo esc_attr($btn_icon); ?>" class="w-4 h-4"></i><?php endif; ?>
            <?php esc_html_e('Back to Home', 'sethichildrenhospital'); ?>
        </a>
        <?php endif; ?>
    </div>
</section>
