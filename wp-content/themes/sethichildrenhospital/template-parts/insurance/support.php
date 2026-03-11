<?php
/**
 * Insurance & TPA – Contact & Support section
 */

$badge      = sch_get_field('ins_support_badge');
$badge_icon = sch_get_field('ins_support_badge_icon') ?: 'headphones';
$heading    = sch_get_field('ins_support_heading');
$desc       = sch_get_field('ins_support_description');

$coord_name  = sch_get_field('ins_coord_name');
$coord_role  = sch_get_field('ins_coord_role');
$phone1      = sch_get_field('ins_coord_phone1');
$phone2      = sch_get_field('ins_coord_phone2');
$hours       = sch_get_field('ins_coord_hours');

$image       = sch_get_field('ins_support_image');
$overlay_t   = sch_get_field('ins_support_overlay_title');
$overlay_l   = sch_get_field('ins_support_overlay_label');

if (!$image) {
    $image = sch_img('sethi2.avif');
}
?>

<section class="overflow-hidden py-12 md:py-16 bg-gradient-to-br from-primary/5 to-secondary/5">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid lg:grid-cols-2 gap-8 items-center">
            <div data-aos="fade-right" data-aos-duration="700">
                <?php if ($badge) : ?>
                <div class="inline-flex items-center gap-2 bg-primary/10 text-primary px-3 py-1.5 md:px-4 md:py-2 rounded-full text-xs md:text-sm font-medium mb-4">
                    <?php if ($badge_icon) : ?><i data-lucide="<?php echo esc_attr($badge_icon); ?>" class="w-3.5 h-3.5 md:w-4 md:h-4"></i><?php endif; ?>
                    <span><?php echo esc_html($badge); ?></span>
                </div>
                <?php endif; ?>
                <?php if ($heading) : ?>
                <h2 class="text-3xl md:text-4xl lg:text-5xl xl:text-6xl font-bold font-anek-gujarati text-gray-900 mb-4"><?php echo esc_html($heading); ?></h2>
                <?php endif; ?>
                <?php if ($desc) : ?>
                <p class="text-gray-600 text-base mb-6">
                    <?php echo esc_html($desc); ?>
                </p>
                <?php endif; ?>
                
                <div class="bg-white p-4 md:p-6 rounded-2xl shadow-xl border border-gray-200">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-12 h-12 md:w-16 md:h-16 bg-primary/10 rounded-full flex items-center justify-center">
                            <i data-lucide="user" class="w-6 h-6 md:w-8 md:h-8 text-primary"></i>
                        </div>
                        <div>
                            <?php if ($coord_name) : ?><h3 class="text-lg md:text-xl font-bold font-anek-gujarati text-gray-900"><?php echo esc_html($coord_name); ?></h3><?php endif; ?>
                            <?php if ($coord_role) : ?><p class="text-sm md:text-base text-gray-500"><?php echo esc_html($coord_role); ?></p><?php endif; ?>
                        </div>
                    </div>
                    
                    <div class="space-y-3">
                        <?php if ($phone1) : ?>
                        <div class="flex items-center gap-3 p-3 bg-gray-50 rounded-lg">
                            <div class="w-10 h-10 bg-primary/10 rounded-full flex items-center justify-center">
                                <i data-lucide="phone" class="w-5 h-5 text-primary"></i>
                            </div>
                            <div>
                                <p class="text-xs md:text-sm text-gray-500">Contact Number</p>
                                <a href="tel:<?php echo esc_attr(preg_replace('/\\s+/', '', $phone1)); ?>" class="text-base font-semibold text-gray-900 hover:text-primary transition"><?php echo esc_html($phone1); ?></a>
                            </div>
                        </div>
                        <?php endif; ?>
                        
                        <?php if ($phone2) : ?>
                        <div class="flex items-center gap-3 p-3 bg-gray-50 rounded-lg">
                            <div class="w-10 h-10 bg-primary/10 rounded-full flex items-center justify-center">
                                <i data-lucide="phone" class="w-5 h-5 text-primary"></i>
                            </div>
                            <div>
                                <p class="text-xs md:text-sm text-gray-500">Alternate Number</p>
                                <a href="tel:<?php echo esc_attr(preg_replace('/\\s+/', '', $phone2)); ?>" class="text-base font-semibold text-gray-900 hover:text-primary transition"><?php echo esc_html($phone2); ?></a>
                            </div>
                        </div>
                        <?php endif; ?>
                        
                        <?php if ($hours) : ?>
                        <div class="flex items-center gap-3 p-3 bg-gray-50 rounded-lg">
                            <div class="w-10 h-10 bg-primary/10 rounded-full flex items-center justify-center">
                                <i data-lucide="clock" class="w-5 h-5 text-primary"></i>
                            </div>
                            <div>
                                <p class="text-xs md:text-sm text-gray-500">Support Hours</p>
                                <p class="text-base font-semibold text-gray-900"><?php echo esc_html($hours); ?></p>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            
            <div class="relative" data-aos="fade-left" data-aos-duration="700">
                <img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>" class="rounded-2xl shadow-2xl w-full h-auto object-cover">
                <?php if ($overlay_t || $overlay_l) : ?>
                <div class="absolute -bottom-4 -left-4 bg-white p-4 rounded-xl shadow-xl">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 md:w-12 md:h-12 bg-primary/10 rounded-full flex items-center justify-center">
                            <i data-lucide="shield" class="w-5 h-5 md:w-6 md:h-6 text-primary"></i>
                        </div>
                        <div>
                            <?php if ($overlay_t) : ?><p class="text-lg md:text-xl font-bold text-gray-900"><?php echo esc_html($overlay_t); ?></p><?php endif; ?>
                            <?php if ($overlay_l) : ?><p class="text-xs md:text-sm text-gray-500"><?php echo esc_html($overlay_l); ?></p><?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

