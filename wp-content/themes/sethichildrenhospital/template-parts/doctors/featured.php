<?php
/**
 * Our Doctors – Featured Doctor (Director / Core Team)
 */

$photo        = sch_get_field('doctors_featured_photo');
$badge        = sch_get_field('doctors_featured_badge');
$name         = sch_get_field('doctors_featured_name');
$qualification = sch_get_field('doctors_featured_qualification');
$bio          = sch_get_field('doctors_featured_bio');
$tags         = sch_get_field('doctors_featured_tags');

if (!$photo) {
    $photo = sch_img('deelip.webp');
}
?>

<section class="overflow-hidden py-12 md:py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <?php if ($name || $bio) : ?>
        <div class="bg-gradient-to-br from-gray-50 to-white rounded-3xl p-6 md:p-8 lg:p-10 border border-gray-200 shadow-xl" data-aos="fade-up" data-aos-duration="700">
            <div class="grid lg:grid-cols-12 gap-6 lg:gap-8 items-center">
                <div class="lg:col-span-4">
                    <div class="relative">
                        <div class="absolute -inset-1 bg-gradient-to-r from-primary to-secondary rounded-3xl blur opacity-30"></div>
                        <img src="<?php echo esc_url($photo); ?>" alt="<?php echo esc_attr($name); ?>" class="relative rounded-2xl w-full h-auto object-cover border-4 border-white shadow-2xl">
                    </div>
                </div>
                <div class="lg:col-span-8 space-y-4">
                    <?php if ($badge) : ?>
                    <span class="inline-block px-3 py-1.5 bg-primary/10 text-primary rounded-full text-xs md:text-sm font-bold uppercase tracking-wider mb-3"><?php echo esc_html($badge); ?></span>
                    <?php endif; ?>
                    <?php if ($name) : ?>
                    <h2 class="text-3xl md:text-4xl lg:text-5xl xl:text-6xl font-bold font-anek-gujarati text-gray-900"><?php echo esc_html($name); ?></h2>
                    <?php endif; ?>
                    <?php if ($qualification) : ?>
                    <p class="text-secondary font-semibold text-sm mt-1"><?php echo esc_html($qualification); ?></p>
                    <?php endif; ?>
                    <?php if ($bio) : ?>
                    <div class="text-gray-600 text-base space-y-3"><?php echo wp_kses_post($bio); ?></div>
                    <?php endif; ?>
                    <?php if ($tags) : ?>
                    <div class="flex flex-wrap gap-3 pt-2">
                        <?php foreach ($tags as $tag) :
                            $ico = !empty($tag['icon']) ? $tag['icon'] : 'circle';
                            $txt = $tag['text'] ?? '';
                            if ($txt === '') continue;
                        ?>
                        <div class="flex items-center gap-2 bg-primary/5 px-3 py-1.5 rounded-full">
                            <i data-lucide="<?php echo esc_attr($ico); ?>" class="w-4 h-4 text-primary"></i>
                            <span class="text-xs text-gray-600"><?php echo esc_html($txt); ?></span>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <?php endif; ?>
    </div>
</section>
