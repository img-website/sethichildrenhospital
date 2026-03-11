<?php
/**
 * PICU – Services Offered
 */

$badge      = sch_get_field('picu_services_badge');
$heading    = sch_get_field('picu_services_heading');
$heading_hl = sch_get_field('picu_services_heading_highlight');
$services   = sch_get_field('picu_services_list');
?>

<section class="overflow-hidden py-12 md:py-16 bg-white">
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

        <?php if ($services) : ?>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6" data-aos="fade-up" data-aos-duration="800">
            <?php foreach ($services as $service) :
                $title      = $service['title'] ?? '';
                $desc       = $service['description'] ?? '';
                if ($title === '' && $desc === '') continue;
                $icon       = !empty($service['icon']) ? $service['icon'] : 'alert-triangle';
                $icon_bg    = !empty($service['icon_bg']) ? $service['icon_bg'] : 'bg-primary/10';
                $icon_color = !empty($service['icon_color']) ? $service['icon_color'] : 'text-primary';
            ?>
            <div class="bg-gradient-to-br from-gray-50 to-white p-4 md:p-5 rounded-xl border border-gray-200 hover:shadow-lg transition-all hover:-translate-y-1">
                <div class="flex items-start gap-3">
                    <div class="w-8 h-8 md:w-10 md:h-10 rounded-lg flex items-center justify-center flex-shrink-0 <?php echo esc_attr($icon_bg); ?>">
                        <i data-lucide="<?php echo esc_attr($icon); ?>" class="w-4 h-4 md:w-5 md:h-5 <?php echo esc_attr($icon_color); ?>"></i>
                    </div>
                    <div>
                        <h3 class="font-bold text-base md:text-lg font-anek-gujarati text-gray-900"><?php echo esc_html($title); ?></h3>
                        <?php if ($desc) : ?>
                        <p class="text-sm md:text-base text-gray-600"><?php echo esc_html($desc); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
    </div>
</section>

