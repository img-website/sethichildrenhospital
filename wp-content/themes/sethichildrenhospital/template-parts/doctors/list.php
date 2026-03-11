<?php
/**
 * Our Doctors – Doctors list grid
 */

$badge    = sch_get_field('doctors_list_badge');
$heading  = sch_get_field('doctors_list_heading');
$heading_hl = sch_get_field('doctors_list_heading_highlight');
$desc     = sch_get_field('doctors_list_description');
$doctors  = sch_get_field('doctors_list');
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

        <?php if ($doctors) : ?>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
            <?php
            $delay = 0;
            foreach ($doctors as $doc) :
                $photo = $doc['photo'] ?? '';
                if (!$photo) $photo = sch_img('doctorPlaceholder.webp');
                $name = $doc['name'] ?? '';
                $subtitle = $doc['subtitle'] ?? '';
                $highlights = $doc['highlights'] ?? array();
            ?>
            <div class="bg-white rounded-2xl shadow-lg border border-gray-200 overflow-hidden hover:shadow-xl transition-all hover:-translate-y-1 group" data-aos="fade-up" data-aos-duration="700" data-aos-delay="<?php echo (int) $delay; ?>">
                <div class="relative aspect-[1/1] overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent z-10"></div>
                    <img src="<?php echo esc_url($photo); ?>" alt="<?php echo esc_attr($name); ?>" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute bottom-4 left-4 z-20">
                        <h3 class="text-white text-lg md:text-xl font-bold font-anek-gujarati"><?php echo esc_html($name); ?></h3>
                        <?php if ($subtitle) : ?><p class="text-white/90 text-sm"><?php echo esc_html($subtitle); ?></p><?php endif; ?>
                    </div>
                </div>
                <?php if ($highlights) : ?>
                <div class="p-5">
                    <div class="space-y-2 text-sm text-gray-600">
                        <?php foreach ($highlights as $hl) :
                            $ico = !empty($hl['icon']) ? $hl['icon'] : 'circle';
                            $txt = $hl['text'] ?? '';
                            if ($txt === '') continue;
                        ?>
                        <p class="flex items-start gap-2"><i data-lucide="<?php echo esc_attr($ico); ?>" class="w-4 h-4 text-primary flex-shrink-0 mt-0.5"></i> <span><?php echo esc_html($txt); ?></span></p>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php endif; ?>
            </div>
            <?php
            $delay = ($delay === 200) ? 0 : $delay + 100;
            endforeach;
            ?>
        </div>
        <?php endif; ?>
    </div>
</section>
