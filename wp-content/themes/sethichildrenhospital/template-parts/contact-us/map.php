<?php
/**
 * Contact Us – Map section
 */

$map_url = sch_get_field('cu_map_embed_url');
$badge_text = sch_get_field('cu_map_badge_text');
$map_src = $map_url ? esc_url($map_url) : 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1768.3598061746625!2d76.6144917!3d27.5712111!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x60854857129da3d1!2sSETHI+CHILDREN+HOSPITAL.!5e0!3m2!1sen!2sin!4v1468664412403';
?>

<section class="relative w-full h-[300px] md:h-[400px] lg:h-[450px] overflow-hidden">
    <iframe
        src="<?php echo $map_src; ?>"
        width="100%"
        height="100%"
        style="border:0; position: absolute; top: 0; left: 0; width: 100%; height: 100%;"
        allowfullscreen=""
        loading="lazy">
    </iframe>
    <?php if ($badge_text) : ?>
    <div class="absolute bottom-4 left-4 md:bottom-8 md:left-8 z-10 bg-white/90 backdrop-blur-sm p-3 md:p-4 rounded-xl shadow-xl border border-gray-200">
        <div class="flex items-center gap-2">
            <i data-lucide="map-pin" class="w-5 h-5 text-primary"></i>
            <span class="text-sm md:text-base font-medium"><?php echo esc_html($badge_text); ?></span>
        </div>
    </div>
    <?php endif; ?>
</section>
