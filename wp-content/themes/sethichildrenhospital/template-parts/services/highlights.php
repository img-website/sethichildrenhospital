<?php
/**
 * Services – Service Highlights (What We Offer + image)
 */

$badge     = sch_get_field('services_hl_badge');
$heading   = sch_get_field('services_hl_heading');
$desc      = sch_get_field('services_hl_description');
$items     = sch_get_field('services_hl_items');
$image     = sch_get_field('services_hl_image');
$overlay_num = sch_get_field('services_hl_overlay_number');
$overlay_lbl = sch_get_field('services_hl_overlay_label');

if (!$image) {
    $image = sch_img('hospitalImage2.webp');
}
?>

<section class="overflow-hidden py-12 md:py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid lg:grid-cols-2 gap-8 items-center">
            <div data-aos="fade-right" data-aos-duration="700">
                <?php if ($badge) : ?>
                <span class="text-primary font-semibold tracking-wider text-xs md:text-sm"><?php echo esc_html($badge); ?></span>
                <?php endif; ?>
                <?php if ($heading) : ?>
                <h2 class="text-3xl md:text-4xl lg:text-5xl xl:text-6xl font-bold font-anek-gujarati text-gray-900 mt-2 mb-4"><?php echo esc_html($heading); ?></h2>
                <?php endif; ?>
                <?php if ($desc) : ?>
                <p class="text-gray-600 text-base mb-6"><?php echo esc_html($desc); ?></p>
                <?php endif; ?>

                <?php if ($items) : ?>
                <div class="space-y-4">
                    <?php foreach ($items as $item) :
                        $ico = !empty($item['icon']) ? $item['icon'] : 'check';
                    ?>
                    <div class="flex items-start gap-3">
                        <div class="w-6 h-6 bg-primary/10 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                            <i data-lucide="<?php echo esc_attr($ico); ?>" class="w-4 h-4 text-primary"></i>
                        </div>
                        <div>
                            <?php if (!empty($item['title'])) : ?>
                            <h4 class="text-base md:text-lg font-bold font-anek-gujarati text-gray-900"><?php echo esc_html($item['title']); ?></h4>
                            <?php endif; ?>
                            <?php if (!empty($item['description'])) : ?>
                            <p class="text-sm md:text-base text-gray-600"><?php echo esc_html($item['description']); ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>
            </div>

            <div class="relative" data-aos="fade-left" data-aos-duration="700">
                <img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>" class="rounded-2xl shadow-2xl w-full h-auto object-cover">
                <?php if ($overlay_num || $overlay_lbl) : ?>
                <div class="absolute md:-bottom-4 md:-left-4 bottom-4 left-4 bg-white p-4 rounded-xl shadow-xl">
                    <?php if ($overlay_num) : ?><p class="text-xl md:text-2xl font-bold text-primary"><?php echo esc_html($overlay_num); ?></p><?php endif; ?>
                    <?php if ($overlay_lbl) : ?><p class="text-xs md:text-sm text-gray-600"><?php echo esc_html($overlay_lbl); ?></p><?php endif; ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
