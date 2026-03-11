<?php
/**
 * Super Speciality Clinics – Specialists grid
 */

$badge      = sch_get_field('sc_spec_badge');
$heading    = sch_get_field('sc_spec_heading');
$heading_hl = sch_get_field('sc_spec_heading_highlight');
$specs      = sch_get_field('sc_spec_list');

$border_colors = array(
    'primary'   => 'border-primary/20',
    'secondary' => 'border-secondary/20',
    'purple'    => 'border-purple-200',
    'pink'      => 'border-pink-200',
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
        </div>
        
        <?php if ($specs) : ?>
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6" data-aos="fade-up" data-aos-duration="800">
            <?php foreach ($specs as $spec) :
                $photo = $spec['photo'] ?? '';
                if (!$photo) $photo = sch_img('doctorPlaceholder.webp');
                $name  = $spec['name'] ?? '';
                $role  = $spec['role'] ?? '';
                $extra = $spec['extra'] ?? '';
                $border_key = !empty($spec['border_color']) ? $spec['border_color'] : 'primary';
                $border = isset($border_colors[$border_key]) ? $border_colors[$border_key] : $border_colors['primary'];
            ?>
            <div class="bg-white rounded-xl text-center shadow-lg border border-gray-200 overflow-hidden hover:shadow-xl transition-all hover:-translate-y-1">
                <div class="aspect-square w-full max-w-[8rem] md:max-w-[10rem] mx-auto mt-4 rounded-full overflow-hidden border-2 <?php echo esc_attr($border); ?>">
                    <img src="<?php echo esc_url($photo); ?>" alt="<?php echo esc_attr($name); ?>" class="w-full h-full object-cover">
                </div>
                <div class="p-4">
                    <h3 class="font-bold text-lg md:text-xl font-anek-gujarati text-gray-900"><?php echo esc_html($name); ?></h3>
                    <?php if ($role) : ?><p class="text-xs md:text-sm text-gray-500"><?php echo esc_html($role); ?></p><?php endif; ?>
                    <?php if ($extra) : ?><p class="text-xs text-gray-400 mt-2"><?php echo esc_html($extra); ?></p><?php endif; ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
    </div>
</section>

