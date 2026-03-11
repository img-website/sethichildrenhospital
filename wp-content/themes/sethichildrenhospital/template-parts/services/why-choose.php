<?php
/**
 * Services – Why Choose Us section
 */

$badge    = sch_get_field('services_why_badge');
$heading  = sch_get_field('services_why_heading');
$heading_hl = sch_get_field('services_why_heading_highlight');
$cards    = sch_get_field('services_why_cards');

$color_classes = array(
    'primary'   => array('bg' => 'bg-primary/10', 'icon' => 'text-primary'),
    'secondary' => array('bg' => 'bg-secondary/10', 'icon' => 'text-secondary'),
    'purple'    => array('bg' => 'bg-purple-100', 'icon' => 'text-purple-600'),
    'pink'      => array('bg' => 'bg-pink-100', 'icon' => 'text-pink-600'),
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

        <?php if ($cards) : ?>
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6" data-aos="fade-up" data-aos-duration="800">
            <?php foreach ($cards as $card) :
                $color_key = !empty($card['color']) ? $card['color'] : 'primary';
                $c = isset($color_classes[$color_key]) ? $color_classes[$color_key] : $color_classes['primary'];
                $icon = !empty($card['icon']) ? $card['icon'] : 'circle';
            ?>
            <div class="bg-white p-4 md:p-6 rounded-xl text-center shadow-lg border border-gray-100 hover:shadow-xl transition-all hover:-translate-y-1">
                <div class="w-12 h-12 md:w-16 md:h-16 <?php echo esc_attr($c['bg']); ?> rounded-full flex items-center justify-center mx-auto mb-4">
                    <i data-lucide="<?php echo esc_attr($icon); ?>" class="w-6 h-6 md:w-8 md:h-8 <?php echo esc_attr($c['icon']); ?>"></i>
                </div>
                <h3 class="text-lg md:text-xl font-bold font-anek-gujarati text-gray-900 mb-2"><?php echo esc_html($card['title'] ?? ''); ?></h3>
                <p class="text-sm md:text-base text-gray-600"><?php echo esc_html($card['description'] ?? ''); ?></p>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
    </div>
</section>
