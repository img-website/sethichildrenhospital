<?php
/**
 * Health Info – Quick Tips section
 */

$badge      = sch_get_field('hi_tips_badge');
$heading    = sch_get_field('hi_tips_heading');
$heading_hl = sch_get_field('hi_tips_heading_highlight');
$tips       = sch_get_field('hi_tips_list');

$color_classes = array(
    'primary'   => array('bg' => 'bg-primary/10',   'icon' => 'text-primary'),
    'secondary' => array('bg' => 'bg-secondary/10', 'icon' => 'text-secondary'),
    'accent'    => array('bg' => 'bg-accent/10',    'icon' => 'text-accent-dark'),
);
?>

<section class="overflow-hidden py-12 md:py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-8" data-aos="fade-up" data-aos-duration="700">
            <?php if ($badge) : ?>
            <span class="text-primary font-semibold tracking-wider text-xs md:text-sm"><?php echo esc_html($badge); ?></span>
            <?php endif; ?>
            <?php if ($heading || $heading_hl) : ?>
            <h2 class="text-3xl md:text-4xl lg:text-5xl xl:text-6xl font-bold font-anek-gujarati text-gray-900 mt-2">
                <?php echo esc_html($heading); ?>
                <?php if ($heading_hl) : ?><span class="text-secondary"><?php echo esc_html($heading_hl); ?></span><?php endif; ?>
            </h2>
            <?php endif; ?>
        </div>
        
        <?php if ($tips) : ?>
        <div class="grid md:grid-cols-3 gap-6 md:gap-8" data-aos="fade-up" data-aos-duration="800">
            <?php foreach ($tips as $tip) :
                $icon = !empty($tip['icon']) ? $tip['icon'] : 'activity';
                $color_key = !empty($tip['color']) ? $tip['color'] : 'primary';
                $c = isset($color_classes[$color_key]) ? $color_classes[$color_key] : $color_classes['primary'];
            ?>
            <div class="bg-white p-4 md:p-6 rounded-xl shadow-lg border border-gray-200 hover:shadow-xl transition-all hover:-translate-y-1">
                <div class="w-12 h-12 <?php echo esc_attr($c['bg']); ?> rounded-full flex items-center justify-center mb-4">
                    <i data-lucide="<?php echo esc_attr($icon); ?>" class="w-6 h-6 <?php echo esc_attr($c['icon']); ?>"></i>
                </div>
                <h3 class="text-lg md:text-xl font-bold font-anek-gujarati text-gray-900 mb-2"><?php echo esc_html($tip['title'] ?? ''); ?></h3>
                <p class="text-sm md:text-base text-gray-600"><?php echo esc_html($tip['description'] ?? ''); ?></p>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
    </div>
</section>

