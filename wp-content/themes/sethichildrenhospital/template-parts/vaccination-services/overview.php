<?php
/**
 * Vaccination Services – Overview
 */

$title        = sch_get_field('vsvc_overview_title');
$text         = sch_get_field('vsvc_overview_text');
$chart_link   = sch_get_field('vsvc_overview_link');
$chart_link   = is_array($chart_link) ? $chart_link : array();
$chart_icon   = sch_get_field('vsvc_overview_link_icon') ?: 'calendar';
$image        = sch_get_field('vsvc_overview_image');
$image_alt    = sch_get_field('vsvc_overview_image_alt') ?: 'Vaccination';
$image_caption= sch_get_field('vsvc_overview_image_caption') ?: 'Vaccination at Sethi Children Hospital';

if (!$image) {
    $image = sch_img('doctorPlaceholder.webp');
}
?>

<section class="py-12 md:py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid lg:grid-cols-2 gap-8 lg:gap-12 items-start">
            <div data-aos="fade-right" data-aos-duration="700">
                <div class="bg-white p-4 md:p-6 lg:p-8 rounded-2xl shadow-xl border border-gray-200">
                    <?php if ($title) : ?>
                    <h2 class="text-xl md:text-2xl lg:text-3xl font-bold font-anek-gujarati text-gray-900 mb-4 flex items-center gap-3">
                        <span class="w-1 h-8 bg-primary rounded-full"></span>
                        <?php echo esc_html($title); ?>
                    </h2>
                    <?php endif; ?>

                    <?php if ($text) : ?>
                    <div class="text-gray-600 text-sm md:text-base space-y-4">
                        <?php echo wp_kses_post($text); ?>
                    </div>
                    <?php endif; ?>

                    <?php if (!empty($chart_link['url'])) : ?>
                    <a href="<?php echo esc_url($chart_link['url']); ?>"<?php echo !empty($chart_link['target']) ? ' target="' . esc_attr($chart_link['target']) . '" rel="noopener noreferrer"' : ''; ?> class="inline-flex items-center gap-2 mt-6 text-primary font-semibold text-sm md:text-base hover:gap-3 transition-all">
                        <?php if ($chart_icon) : ?><i data-lucide="<?php echo esc_attr($chart_icon); ?>" class="w-4 h-4"></i><?php endif; ?>
                        <?php echo esc_html($chart_link['title']); ?>
                    </a>
                    <?php endif; ?>
                </div>
            </div>

            <div data-aos="fade-left" data-aos-duration="700" class="lg:sticky top-24">
                <div class="bg-white p-4 md:p-6 rounded-2xl shadow-xl border border-gray-200 overflow-hidden">
                    <div class="aspect-[280/240] max-w-sm mx-auto rounded-xl overflow-hidden bg-gray-100">
                        <img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr($image_alt); ?>" class="w-full h-full object-cover">
                    </div>
                    <?php if ($image_caption) : ?>
                    <p class="text-center text-gray-500 text-xs md:text-sm mt-4"><?php echo esc_html($image_caption); ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

