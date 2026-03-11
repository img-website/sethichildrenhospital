<?php
/**
 * PICU – Director section
 */

$badge      = sch_get_field('picu_dir_badge');
$heading    = sch_get_field('picu_dir_heading');
$heading_hl = sch_get_field('picu_dir_heading_highlight');

$photo      = sch_get_field('picu_dir_photo');
$name       = sch_get_field('picu_dir_name');
$primary    = sch_get_field('picu_dir_primary_title');
$line1      = sch_get_field('picu_dir_line1');
$line2      = sch_get_field('picu_dir_line2');
$line3      = sch_get_field('picu_dir_line3');
$line4      = sch_get_field('picu_dir_line4');
$fellowship = sch_get_field('picu_dir_fellowship');

if (!$photo) {
    $photo = sch_img('doctorPlaceholder.webp');
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
        </div>

        <div class="max-w-3xl mx-auto" data-aos="fade-up" data-aos-duration="800">
            <div class="bg-white rounded-2xl shadow-xl border border-gray-200 overflow-hidden">
                <div class="grid md:grid-cols-3 gap-4 p-4 md:p-6">
                    <div class="md:col-span-1">
                        <div class="aspect-square w-full max-w-[12rem] mx-auto rounded-full overflow-hidden border-4 border-primary/20">
                            <img src="<?php echo esc_url($photo); ?>" alt="<?php echo esc_attr($name ?: 'PICU Director'); ?>" class="w-full h-full object-cover">
                        </div>
                    </div>
                    <div class="md:col-span-2 text-center md:text-left">
                        <?php if ($name) : ?>
                        <h3 class="text-xl md:text-2xl lg:text-3xl font-bold font-anek-gujarati text-gray-900">
                            <?php echo esc_html($name); ?>
                        </h3>
                        <?php endif; ?>

                        <?php if ($primary) : ?>
                        <p class="text-secondary font-semibold text-sm md:text-base mb-2"><?php echo esc_html($primary); ?></p>
                        <?php endif; ?>

                        <?php if ($line1) : ?>
                        <p class="text-gray-600 text-sm md:text-base"><?php echo esc_html($line1); ?></p>
                        <?php endif; ?>
                        <?php if ($line2) : ?>
                        <p class="text-gray-600 text-sm md:text-base"><?php echo esc_html($line2); ?></p>
                        <?php endif; ?>
                        <?php if ($line3) : ?>
                        <p class="text-gray-600 text-sm md:text-base"><?php echo esc_html($line3); ?></p>
                        <?php endif; ?>
                        <?php if ($line4) : ?>
                        <p class="text-gray-600 text-sm md:text-base mt-2 font-semibold"><?php echo esc_html($line4); ?></p>
                        <?php endif; ?>
                    </div>
                </div>

                <?php if ($fellowship) : ?>
                <div class="bg-gradient-to-r from-primary/5 to-secondary/5 p-4 md:p-6 border-t border-gray-200">
                    <p class="text-sm md:text-base text-gray-600 text-center">
                        <?php echo esc_html($fellowship); ?>
                    </p>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

