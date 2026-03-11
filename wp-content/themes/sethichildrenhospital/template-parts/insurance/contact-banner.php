<?php
/**
 * Insurance & TPA – Top contact banner
 */

$heading      = sch_get_field('ins_banner_heading');
$person       = sch_get_field('ins_banner_person');
$icon         = sch_get_field('ins_banner_icon') ?: 'phone';
$btn_link     = sch_get_field('ins_banner_btn_link');
$btn_link     = is_array($btn_link) ? $btn_link : array();
$btn_icon     = sch_get_field('ins_banner_btn_icon') ?: 'phone';

// Build full heading text
if ($heading && $person) {
    $full_heading = $heading . ' ' . $person;
} else {
    $full_heading = $heading ?: $person;
}
?>

<section class="overflow-hidden py-8 bg-gradient-to-r from-[#00a650] to-[#3d348b]" data-aos="fade-up" data-aos-duration="600">
    <div class="max-w-7xl mx-auto px-4 flex flex-col md:flex-row justify-between items-center gap-4">
        <?php if ($full_heading) : ?>
        <h3 class="text-white text-xl md:text-2xl font-bold md:text-left text-center">
            <?php if ($icon) : ?><i data-lucide="<?php echo esc_attr($icon); ?>" class="w-6 h-6 inline-block mr-2"></i><?php endif; ?>
            <?php echo esc_html($full_heading); ?>
        </h3>
        <?php endif; ?>
        <?php if (!empty($btn_link['url'])) : ?>
        <div class="flex gap-3">
            <a href="<?php echo esc_url($btn_link['url']); ?>"<?php echo !empty($btn_link['target']) ? ' target="' . esc_attr($btn_link['target']) . '" rel="noopener noreferrer"' : ''; ?> class="bg-white text-[#00a650] px-8 py-3 rounded-full font-semibold hover:shadow-xl transition-all hover:-translate-y-0.5 flex items-center gap-2 text-sm">
                <?php if ($btn_icon) : ?><i data-lucide="<?php echo esc_attr($btn_icon); ?>" class="w-4 h-4"></i><?php endif; ?>
                <?php echo esc_html($btn_link['title']); ?>
            </a>
        </div>
        <?php endif; ?>
    </div>
</section>

