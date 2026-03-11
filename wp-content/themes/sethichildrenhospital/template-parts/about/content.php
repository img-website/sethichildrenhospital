<?php
/**
 * About Us – Main content, stats, highlight box, sidebar (Vision, Mission, Key Highlights)
 */

$main_content   = sch_get_field('about_main_content');
$stats          = sch_get_field('about_stats');
$highlight_text = sch_get_field('about_highlight_text');
$vision_icon    = sch_get_field('about_vision_icon') ?: 'eye';
$vision_heading = sch_get_field('about_vision_heading');
$vision_text    = sch_get_field('about_vision_text');
$mission_icon   = sch_get_field('about_mission_icon') ?: 'target';
$mission_heading= sch_get_field('about_mission_heading');
$mission_text   = sch_get_field('about_mission_text');
$hl_heading     = sch_get_field('about_highlights_heading');
$hl_icon        = sch_get_field('about_highlights_icon') ?: 'award';
$hl_items       = sch_get_field('about_highlights_items');

$stat_colors = array(
    'primary'   => array('bg' => 'from-primary/5', 'border' => 'border-primary/10', 'text' => 'text-primary'),
    'secondary' => array('bg' => 'from-secondary/5', 'border' => 'border-secondary/10', 'text' => 'text-secondary'),
    'accent'    => array('bg' => 'from-accent/5', 'border' => 'border-accent/10', 'text' => 'text-accent-dark'),
    'pink'      => array('bg' => 'from-pink-500/5', 'border' => 'border-pink-500/10', 'text' => 'text-pink-600'),
);
?>

<section class="overflow-hidden py-12 md:py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid lg:grid-cols-12 gap-6 md:gap-8 lg:gap-12">
            <div class="lg:col-span-8 space-y-6" data-aos="fade-up" data-aos-duration="700">
                <?php if ($main_content) : ?>
                <div class="prose prose-lg max-w-none text-gray-600">
                    <?php echo wp_kses_post($main_content); ?>
                </div>
                <?php endif; ?>

                <?php if ($stats) : ?>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-3 md:gap-4 pt-4">
                    <?php foreach ($stats as $s) :
                        $color_key = !empty($s['color']) ? $s['color'] : 'primary';
                        $c = isset($stat_colors[$color_key]) ? $stat_colors[$color_key] : $stat_colors['primary'];
                    ?>
                    <div class="bg-gradient-to-br <?php echo esc_attr($c['bg']); ?> to-transparent p-3 md:p-4 rounded-xl border <?php echo esc_attr($c['border']); ?> text-center">
                        <span class="text-xl md:text-2xl font-bold <?php echo esc_attr($c['text']); ?> block"><?php echo esc_html($s['number'] ?? ''); ?></span>
                        <span class="text-xs md:text-sm text-gray-500"><?php echo esc_html($s['label'] ?? ''); ?></span>
                    </div>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>

                <?php if ($highlight_text) : ?>
                <div class="bg-primary/5 p-4 md:p-6 rounded-2xl border-l-4 border-primary mt-6">
                    <p class="text-gray-800 font-medium text-base"><?php echo esc_html($highlight_text); ?></p>
                </div>
                <?php endif; ?>
            </div>

            <div class="lg:col-span-4 space-y-6" data-aos="fade-up" data-aos-duration="700" data-aos-delay="200">
                <?php if ($vision_heading || $vision_text) : ?>
                <div class="bg-gradient-to-br from-green-50 to-white p-4 md:p-6 rounded-2xl border border-green-200 shadow-lg">
                    <div class="w-10 h-10 md:w-12 md:h-12 bg-primary/10 rounded-xl flex items-center justify-center mb-3 md:mb-4">
                        <i data-lucide="<?php echo esc_attr($vision_icon); ?>" class="w-5 h-5 md:w-6 md:h-6 text-primary"></i>
                    </div>
                    <h3 class="text-lg md:text-xl font-bold font-anek-gujarati text-gray-900 mb-2 md:mb-3"><?php echo esc_html($vision_heading); ?></h3>
                    <p class="text-gray-600 text-sm leading-relaxed"><?php echo esc_html($vision_text); ?></p>
                </div>
                <?php endif; ?>

                <?php if ($mission_heading || $mission_text) : ?>
                <div class="bg-gradient-to-br from-secondary/5 to-white p-4 md:p-6 rounded-2xl border border-secondary/20 shadow-lg">
                    <div class="w-10 h-10 md:w-12 md:h-12 bg-secondary/10 rounded-xl flex items-center justify-center mb-3 md:mb-4">
                        <i data-lucide="<?php echo esc_attr($mission_icon); ?>" class="w-5 h-5 md:w-6 md:h-6 text-secondary"></i>
                    </div>
                    <h3 class="text-lg md:text-xl font-bold font-anek-gujarati text-gray-900 mb-2 md:mb-3"><?php echo esc_html($mission_heading); ?></h3>
                    <p class="text-gray-600 text-sm leading-relaxed"><?php echo esc_html($mission_text); ?></p>
                </div>
                <?php endif; ?>

                <?php if ($hl_heading && $hl_items) : ?>
                <div class="bg-gray-50 p-4 md:p-6 rounded-2xl border border-gray-200">
                    <h3 class="text-lg md:text-xl font-bold font-anek-gujarati text-gray-900 mb-3 md:mb-4 flex items-center gap-2">
                        <i data-lucide="<?php echo esc_attr($hl_icon); ?>" class="w-4 h-4 md:w-5 md:h-5 text-primary"></i>
                        <?php echo esc_html($hl_heading); ?>
                    </h3>
                    <ul class="space-y-2 md:space-y-3">
                        <?php foreach ($hl_items as $item) :
                            $txt = $item['text'] ?? '';
                            if ($txt === '') continue;
                            $ico = !empty($item['icon']) ? $item['icon'] : 'check-circle';
                        ?>
                        <li class="flex items-start gap-2 md:gap-3">
                            <i data-lucide="<?php echo esc_attr($ico); ?>" class="w-4 h-4 md:w-5 md:h-5 text-primary flex-shrink-0 mt-0.5"></i>
                            <span class="text-sm text-gray-600"><?php echo esc_html($txt); ?></span>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
