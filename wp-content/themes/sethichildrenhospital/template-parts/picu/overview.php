<?php
/**
 * PICU – Overview (About + Why Our PICU)
 */

$about_title = sch_get_field('picu_overview_title');
$about_text  = sch_get_field('picu_overview_text');
$stats       = sch_get_field('picu_overview_stats');

$why_heading = sch_get_field('picu_why_heading');
$why_items   = sch_get_field('picu_why_items');
$why_note    = sch_get_field('picu_why_note');

$stat_colors = array(
    'primary'   => 'text-primary',
    'secondary' => 'text-secondary',
    'accent'    => 'text-accent-dark',
);
?>

<section class="overflow-hidden py-12 md:py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid lg:grid-cols-2 gap-8 lg:gap-12 items-start">
            <div data-aos="fade-right" data-aos-duration="700">
                <div class="bg-white p-4 md:p-6 lg:p-8 rounded-2xl shadow-xl border border-gray-200">
                    <?php if ($about_title) : ?>
                    <h2 class="text-xl md:text-2xl lg:text-3xl font-bold font-anek-gujarati text-gray-900 mb-4 flex items-center gap-3">
                        <span class="w-1 h-8 bg-primary rounded-full"></span>
                        <?php echo esc_html($about_title); ?>
                    </h2>
                    <?php endif; ?>

                    <?php if ($about_text) : ?>
                    <div class="text-gray-600 text-base space-y-4">
                        <?php echo wp_kses_post($about_text); ?>
                    </div>
                    <?php endif; ?>

                    <?php if ($stats) : ?>
                    <div class="grid grid-cols-3 gap-3 mt-6 pt-4 border-t border-gray-200">
                        <?php foreach ($stats as $stat) :
                            $number = $stat['number'] ?? '';
                            $label  = $stat['label'] ?? '';
                            if ($number === '' && $label === '') continue;
                            $color_key = !empty($stat['color']) ? $stat['color'] : 'primary';
                            $color_cls = isset($stat_colors[$color_key]) ? $stat_colors[$color_key] : $stat_colors['primary'];
                        ?>
                        <div class="text-center">
                            <?php if ($number) : ?>
                            <span class="text-xl md:text-2xl font-bold <?php echo esc_attr($color_cls); ?> block"><?php echo esc_html($number); ?></span>
                            <?php endif; ?>
                            <?php if ($label) : ?>
                            <span class="text-xs md:text-sm text-gray-600"><?php echo esc_html($label); ?></span>
                            <?php endif; ?>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>
                </div>
            </div>

            <div data-aos="fade-left" data-aos-duration="700">
                <div class="bg-gradient-to-br from-primary to-secondary p-4 md:p-6 lg:p-8 rounded-2xl shadow-xl text-white h-full">
                    <?php if ($why_heading) : ?>
                    <h3 class="text-xl md:text-2xl font-bold font-anek-gujarati mb-6"><?php echo esc_html($why_heading); ?></h3>
                    <?php endif; ?>

                    <?php if ($why_items) : ?>
                    <div class="space-y-4">
                        <?php foreach ($why_items as $card) :
                            $icon = !empty($card['icon']) ? $card['icon'] : 'stethoscope';
                        ?>
                        <div class="flex items-start gap-3">
                            <div class="w-8 h-8 md:w-10 md:h-10 bg-white/20 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                                <i data-lucide="<?php echo esc_attr($icon); ?>" class="w-4 h-4 md:w-5 md:h-5 text-white"></i>
                            </div>
                            <div>
                                <h4 class="text-base md:text-lg font-bold font-anek-gujarati"><?php echo esc_html($card['title'] ?? ''); ?></h4>
                                <p class="text-white/80 text-sm md:text-base"><?php echo esc_html($card['description'] ?? ''); ?></p>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>

                    <?php if ($why_note) : ?>
                    <div class="mt-8 pt-6 border-t border-white/20">
                        <p class="text-sm md:text-base text-white/80 text-center"><?php echo esc_html($why_note); ?></p>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

