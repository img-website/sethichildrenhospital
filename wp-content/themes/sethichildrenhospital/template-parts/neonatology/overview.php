<?php
/**
 * Neonatology – NICU overview & We Offer
 */

$about_title = sch_get_field('neo_overview_title');
$about_text  = sch_get_field('neo_overview_text');
$bullets     = sch_get_field('neo_overview_bullets');
$stats       = sch_get_field('neo_overview_stats');
$we_offer    = sch_get_field('neo_we_offer');

$stat_colors = array(
    'primary'   => 'text-primary',
    'secondary' => 'text-secondary',
    'accent'    => 'text-accent-dark',
    'pink'      => 'text-pink-600',
);
?>

<section class="py-12 md:py-16 bg-gray-50">
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

                    <?php if ($bullets) : ?>
                    <ul class="mt-6 space-y-2 text-gray-600 text-sm md:text-base">
                        <?php foreach ($bullets as $item) :
                            $text = $item['text'] ?? '';
                            if ($text === '') continue;
                        ?>
                        <li class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 bg-primary rounded-full flex-shrink-0"></span>
                            <?php echo esc_html($text); ?>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                    <?php endif; ?>

                    <?php if ($stats) : ?>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-3 mt-6 pt-4 border-t border-gray-200">
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

            <div data-aos="fade-left" data-aos-duration="700" class="lg:sticky top-24">
                <div class="bg-gradient-to-br from-primary to-secondary p-4 md:p-6 lg:p-8 rounded-2xl shadow-xl text-white h-full">
                    <h3 class="text-xl md:text-2xl font-bold font-anek-gujarati mb-6">We Offer</h3>
                    <?php if ($we_offer) : ?>
                    <ul class="space-y-3 text-white/90 text-sm md:text-base">
                        <?php foreach ($we_offer as $item) :
                            $text = $item['text'] ?? '';
                            if ($text === '') continue;
                            $icon = !empty($item['icon']) ? $item['icon'] : 'check-circle';
                        ?>
                        <li class="flex items-start gap-3">
                            <i data-lucide="<?php echo esc_attr($icon); ?>" class="w-5 h-5 text-white flex-shrink-0 mt-0.5"></i>
                            <span><?php echo esc_html($text); ?></span>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

