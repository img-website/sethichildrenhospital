<?php
/**
 * Services – Grid of service cards
 */

$services = sch_get_field('services_grid');

$color_config = array(
    'primary'   => array('bg' => 'from-primary/10 to-secondary/10', 'icon' => 'text-primary', 'hover' => 'group-hover:text-primary'),
    'secondary' => array('bg' => 'from-secondary/10 to-purple-100', 'icon' => 'text-secondary', 'hover' => 'group-hover:text-secondary'),
    'pink'      => array('bg' => 'from-pink-100 to-orange-100', 'icon' => 'text-pink-600', 'hover' => 'group-hover:text-pink-600'),
    'blue'      => array('bg' => 'from-blue-100 to-cyan-100', 'icon' => 'text-blue-600', 'hover' => 'group-hover:text-blue-600'),
    'green'     => array('bg' => 'from-green-100 to-emerald-100', 'icon' => 'text-green-600', 'hover' => 'group-hover:text-green-600'),
    'red'       => array('bg' => 'from-red-100 to-rose-100', 'icon' => 'text-red-600', 'hover' => 'group-hover:text-red-600'),
);
?>

<section class="overflow-hidden py-12 md:py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <?php if ($services) : ?>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
            <?php
            $delay = 0;
            foreach ($services as $svc) :
                $color_key = !empty($svc['color']) ? $svc['color'] : 'primary';
                $c = isset($color_config[$color_key]) ? $color_config[$color_key] : $color_config['primary'];
                $icon = !empty($svc['icon']) ? $svc['icon'] : 'circle';
                $link = isset($svc['link']) && is_array($svc['link']) ? $svc['link'] : array('url' => '#', 'title' => $svc['title'] ?? '', 'target' => '');
                $title = $svc['title'] ?? '';
            ?>
            <div class="bg-white rounded-2xl shadow-lg border border-gray-200 overflow-hidden hover:shadow-xl transition-all hover:-translate-y-1 group" data-aos="fade-up" data-aos-duration="700" data-aos-delay="<?php echo (int) $delay; ?>">
                <div class="relative h-40 md:h-48 bg-gradient-to-br <?php echo esc_attr($c['bg']); ?> flex items-center justify-center">
                    <div class="w-16 h-16 md:w-24 md:h-24 bg-white rounded-2xl shadow-lg flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                        <i data-lucide="<?php echo esc_attr($icon); ?>" class="w-10 h-10 md:w-12 md:h-12 <?php echo esc_attr($c['icon']); ?>"></i>
                    </div>
                </div>
                <div class="p-4 md:p-6">
                    <h3 class="text-lg md:text-xl lg:text-2xl font-bold font-anek-gujarati text-gray-900 mb-3 <?php echo esc_attr($c['hover']); ?> transition-colors">
                        <?php if (!empty($link['url'])) : ?>
                        <a href="<?php echo esc_url($link['url']); ?>"<?php echo !empty($link['target']) ? ' target="' . esc_attr($link['target']) . '" rel="noopener noreferrer"' : ''; ?>><?php echo esc_html($title); ?></a>
                        <?php else : ?>
                        <?php echo esc_html($title); ?>
                        <?php endif; ?>
                    </h3>
                    <?php if (!empty($svc['description'])) : ?>
                    <p class="text-gray-600 text-sm md:text-base mb-4 line-clamp-3"><?php echo esc_html($svc['description']); ?></p>
                    <?php endif; ?>
                    <div class="flex items-center justify-between">
                        <?php if (!empty($svc['subtitle'])) : ?>
                        <span class="text-xs md:text-sm text-gray-500"><?php echo esc_html($svc['subtitle']); ?></span>
                        <?php endif; ?>
                        <?php if (!empty($link['url'])) : ?>
                        <a href="<?php echo esc_url($link['url']); ?>"<?php echo !empty($link['target']) ? ' target="' . esc_attr($link['target']) . '" rel="noopener noreferrer"' : ''; ?> class="inline-flex items-center gap-1 <?php echo esc_attr($c['icon']); ?> font-semibold text-sm hover:gap-2 transition-all">
                            View Detail <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <?php
            $delay += 100;
            endforeach;
            ?>
        </div>
        <?php endif; ?>
    </div>
</section>
