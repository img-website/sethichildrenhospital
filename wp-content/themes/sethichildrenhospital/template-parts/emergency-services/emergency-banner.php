<?php
/**
 * Emergency Services – Emergency contact banner
 */

$heading      = sch_get_field('em_banner_heading');
$heading_icon = sch_get_field('em_banner_heading_icon') ?: 'phone';
$phone        = sch_get_field('em_banner_phone');
$btn_link     = sch_get_field('em_banner_btn_link');
$btn_link     = is_array($btn_link) ? $btn_link : array();
$btn_icon     = sch_get_field('em_banner_btn_icon') ?: 'phone-call';
$phone_attr   = $phone ? 'tel:' . preg_replace('/\s+/', '', $phone) : '';
?>

<section class="overflow-hidden py-8 bg-gradient-to-r from-[#00a650] to-[#3d348b]" data-aos="fade-up" data-aos-duration="600">
    <div class="max-w-7xl mx-auto px-4 flex flex-col md:flex-row justify-between items-center gap-4">
        <?php if ($heading || $phone) : ?>
        <h3 class="text-white text-xl md:text-2xl font-bold md:text-left text-center">
            <?php if ($heading_icon) : ?><i data-lucide="<?php echo esc_attr($heading_icon); ?>" class="w-6 h-6 inline-block mr-2"></i><?php endif; ?>
            <?php echo esc_html($heading); ?>
            <?php if ($phone && $phone_attr) : ?>
            <a href="<?php echo esc_attr($phone_attr); ?>" class="underline hover:no-underline"><?php echo esc_html($phone); ?></a>
            <?php elseif ($phone) : ?>
            <?php echo esc_html($phone); ?>
            <?php endif; ?>
        </h3>
        <?php endif; ?>
        <?php if (!empty($btn_link['url'])) : ?>
        <a href="<?php echo esc_url($btn_link['url']); ?>"<?php echo !empty($btn_link['target']) ? ' target="' . esc_attr($btn_link['target']) . '" rel="noopener noreferrer"' : ''; ?> class="bg-white text-[#00a650] px-8 py-3 rounded-full font-semibold hover:shadow-xl transition-all hover:-translate-y-0.5 flex items-center gap-2 text-sm">
            <?php if ($btn_icon) : ?><i data-lucide="<?php echo esc_attr($btn_icon); ?>" class="w-4 h-4"></i><?php endif; ?>
            <?php echo esc_html($btn_link['title'] ?: 'Call Now'); ?>
        </a>
        <?php elseif ($phone_attr) : ?>
        <a href="<?php echo esc_attr($phone_attr); ?>" class="bg-white text-[#00a650] px-8 py-3 rounded-full font-semibold hover:shadow-xl transition-all hover:-translate-y-0.5 flex items-center gap-2 text-sm">
            <?php if ($btn_icon) : ?><i data-lucide="<?php echo esc_attr($btn_icon); ?>" class="w-4 h-4"></i><?php endif; ?>
            Call Now
        </a>
        <?php endif; ?>
    </div>
</section>
