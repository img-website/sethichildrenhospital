<?php
/**
 * About Us – Services Overview section
 */

$badge    = sch_get_field('about_services_badge');
$heading  = sch_get_field('about_services_heading');
$heading_hl = sch_get_field('about_services_heading_highlight');
$desc     = sch_get_field('about_services_description');
$services = sch_get_field('about_services_list');

$color_classes = array(
    'primary'   => array('bg' => 'bg-primary/10', 'text' => 'text-primary', 'hover_bg' => 'group-hover:bg-primary', 'hover_text' => 'group-hover:text-white'),
    'secondary' => array('bg' => 'bg-secondary/10', 'text' => 'text-secondary', 'hover_bg' => 'group-hover:bg-secondary', 'hover_text' => 'group-hover:text-white'),
    'purple'    => array('bg' => 'bg-purple-100', 'text' => 'text-purple-600', 'hover_bg' => 'group-hover:bg-purple-600', 'hover_text' => 'group-hover:text-white'),
    'pink'      => array('bg' => 'bg-pink-100', 'text' => 'text-pink-600', 'hover_bg' => 'group-hover:bg-pink-600', 'hover_text' => 'group-hover:text-white'),
    'blue'      => array('bg' => 'bg-blue-100', 'text' => 'text-blue-600', 'hover_bg' => 'group-hover:bg-blue-600', 'hover_text' => 'group-hover:text-white'),
    'red'       => array('bg' => 'bg-red-100', 'text' => 'text-red-600', 'hover_bg' => 'group-hover:bg-red-600', 'hover_text' => 'group-hover:text-white'),
);
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

        <?php if ($services) : ?>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
            <?php foreach ($services as $svc) :
                $color_key = !empty($svc['color']) ? $svc['color'] : 'primary';
                $c = isset($color_classes[$color_key]) ? $color_classes[$color_key] : $color_classes['primary'];
                $icon = !empty($svc['icon']) ? $svc['icon'] : 'circle';
            ?>
            <div class="bg-white p-4 md:p-6 rounded-xl shadow-lg border border-gray-100 hover:shadow-xl transition-all hover:-translate-y-1 group">
                <div class="w-12 h-12 md:w-14 md:h-14 <?php echo esc_attr($c['bg']); ?> rounded-xl flex items-center justify-center mb-3 md:mb-4 <?php echo esc_attr($c['hover_bg'] . ' ' . $c['hover_text']); ?> transition-all">
                    <i data-lucide="<?php echo esc_attr($icon); ?>" class="w-6 h-6 md:w-7 md:h-7 <?php echo esc_attr($c['text']); ?> group-hover:text-white"></i>
                </div>
                <h3 class="text-lg md:text-xl font-bold font-anek-gujarati text-gray-900 mb-1.5 md:mb-2"><?php echo esc_html($svc['title'] ?? ''); ?></h3>
                <p class="text-gray-500 text-xs md:text-sm"><?php echo esc_html($svc['description'] ?? ''); ?></p>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
    </div>
</section>
