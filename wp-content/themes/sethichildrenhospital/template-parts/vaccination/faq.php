<?php
/**
 * Vaccination – FAQ section
 */

$badge      = sch_get_field('vacc_faq_badge');
$heading    = sch_get_field('vacc_faq_heading');
$heading_hl = sch_get_field('vacc_faq_heading_highlight');
$desc       = sch_get_field('vacc_faq_description');
$items      = sch_get_field('vacc_faq_items');

$left_items  = array();
$right_items = array();

if (is_array($items)) {
    foreach ($items as $item) {
        $side = $item['side'] ?? 'left';
        if ($side === 'right') {
            $right_items[] = $item;
        } else {
            $left_items[] = $item;
        }
    }
}
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
            <?php if ($desc) : ?>
            <p class="text-gray-600 text-base max-w-2xl mx-auto mt-4"><?php echo esc_html($desc); ?></p>
            <?php endif; ?>
        </div>

        <div class="grid md:grid-cols-2 gap-6 md:gap-8">
            <div class="space-y-6" data-aos="fade-right" data-aos-duration="700">
                <?php if ($left_items) : foreach ($left_items as $item) :
                    $icon = !empty($item['icon']) ? $item['icon'] : 'alert-circle';
                    $title = $item['title'] ?? '';
                    $body  = $item['body'] ?? '';
                    if ($title === '' && $body === '') continue;
                ?>
                <div class="bg-white p-4 md:p-6 rounded-2xl shadow-lg border border-gray-200 hover:shadow-xl transition-all">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 md:w-12 md:h-12 bg-primary/10 rounded-full flex items-center justify-center">
                            <i data-lucide="<?php echo esc_attr($icon); ?>" class="w-5 h-5 md:w-6 md:h-6 text-primary"></i>
                        </div>
                        <h3 class="text-lg md:text-xl font-bold font-anek-gujarati text-gray-900"><?php echo esc_html($title); ?></h3>
                    </div>
                    <div class="text-gray-600 text-sm md:text-base leading-relaxed">
                        <?php echo wp_kses_post($body); ?>
                    </div>
                </div>
                <?php endforeach; endif; ?>
            </div>

            <div class="space-y-6" data-aos="fade-left" data-aos-duration="700">
                <?php if ($right_items) : foreach ($right_items as $item) :
                    $icon = !empty($item['icon']) ? $item['icon'] : 'shield-check';
                    $title = $item['title'] ?? '';
                    $body  = $item['body'] ?? '';
                    if ($title === '' && $body === '') continue;
                ?>
                <div class="bg-white p-4 md:p-6 rounded-2xl shadow-lg border border-gray-200 hover:shadow-xl transition-all">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 md:w-12 md:h-12 bg-green-500/10 rounded-full flex items-center justify-center">
                            <i data-lucide="<?php echo esc_attr($icon); ?>" class="w-5 h-5 md:w-6 md:h-6 text-green-600"></i>
                        </div>
                        <h3 class="text-lg md:text-xl font-bold font-anek-gujarati text-gray-900"><?php echo esc_html($title); ?></h3>
                    </div>
                    <div class="text-gray-600 text-sm md:text-base leading-relaxed">
                        <?php echo wp_kses_post($body); ?>
                    </div>
                </div>
                <?php endforeach; endif; ?>
            </div>
        </div>
    </div>
</section>

