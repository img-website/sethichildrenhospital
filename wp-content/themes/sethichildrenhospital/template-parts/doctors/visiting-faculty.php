<?php
/**
 * Our Doctors – Visiting Faculty section
 */

$badge    = sch_get_field('doctors_faculty_badge');
$heading  = sch_get_field('doctors_faculty_heading');
$heading_hl = sch_get_field('doctors_faculty_heading_highlight');
$desc     = sch_get_field('doctors_faculty_description');
$faculty  = sch_get_field('doctors_faculty_list');
?>

<section class="overflow-hidden py-12 md:py-16 bg-gradient-to-br from-primary via-primary/90 to-secondary">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-8" data-aos="fade-up" data-aos-duration="700">
            <?php if ($badge) : ?>
            <span class="inline-block px-3 py-1.5 bg-white/20 text-white rounded-full text-xs md:text-sm font-bold uppercase tracking-wider mb-3"><?php echo esc_html($badge); ?></span>
            <?php endif; ?>
            <?php if ($heading || $heading_hl) : ?>
            <h2 class="text-3xl md:text-4xl lg:text-5xl xl:text-6xl font-bold font-anek-gujarati text-white mt-2">
                <?php echo esc_html($heading); ?>
                <span class="text-white/90"><?php echo esc_html($heading_hl); ?></span>
            </h2>
            <?php endif; ?>
            <?php if ($desc) : ?>
            <p class="text-white/80 text-base max-w-2xl mx-auto mt-4"><?php echo esc_html($desc); ?></p>
            <?php endif; ?>
        </div>

        <?php if ($faculty) : ?>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6" data-aos="fade-up" data-aos-duration="800">
            <?php foreach ($faculty as $f) :
                $icon = !empty($f['icon']) ? $f['icon'] : 'user';
            ?>
            <div class="bg-white/10 backdrop-blur-sm p-6 rounded-xl border border-white/20 hover:bg-white/15 transition-all hover:-translate-y-1">
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center flex-shrink-0">
                        <i data-lucide="<?php echo esc_attr($icon); ?>" class="w-6 h-6 text-white"></i>
                    </div>
                    <div>
                        <h3 class="text-white font-bold text-lg md:text-xl font-anek-gujarati"><?php echo esc_html($f['name'] ?? ''); ?></h3>
                        <?php if (!empty($f['designation'])) : ?><p class="text-white/90 text-sm font-medium"><?php echo esc_html($f['designation']); ?></p><?php endif; ?>
                        <?php if (!empty($f['extra'])) : ?><p class="text-white/70 text-xs mt-2"><?php echo nl2br(esc_html($f['extra'])); ?></p><?php endif; ?>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
    </div>
</section>
