<?php
/**
 * Template part: Hero Slider
 */

$slides = sch_get_field('hero_slides');

if (empty($slides)) {
    return;
}

$themes = [
    'blue-green' => [
        'bg'              => 'bg-gradient-to-br from-blue-50 via-white to-green-50',
        'blob1'           => 'bg-green-300',
        'blob2'           => 'bg-blue-300',
        'badge_bg'        => 'bg-primary/10',
        'badge_text'      => 'text-primary',
        'highlight'       => 'text-primary',
        'btn_bg'          => 'bg-primary',
        'btn2_text'       => 'text-primary',
        'btn2_border'     => 'border-primary',
        'check'           => 'text-primary',
        'float_icon_bg'   => 'bg-primary/10',
        'float_icon_text' => 'text-primary',
        'badge_icon'      => 'heart-pulse',
        'trust_type'      => 'inline',
    ],
    'purple' => [
        'bg'              => 'bg-gradient-to-tr from-purple-50 via-white to-purple-50',
        'blob1'           => 'bg-purple-300',
        'blob2'           => 'bg-purple-200',
        'badge_bg'        => 'bg-secondary/10',
        'badge_text'      => 'text-secondary',
        'highlight'       => 'text-secondary',
        'btn_bg'          => 'bg-secondary',
        'btn2_text'       => 'text-secondary',
        'btn2_border'     => 'border-secondary',
        'check'           => 'text-secondary',
        'float_icon_bg'   => 'bg-secondary/10',
        'float_icon_text' => 'text-secondary',
        'badge_icon'      => 'stethoscope',
        'trust_type'      => 'inline',
    ],
    'pink-orange' => [
        'bg'              => 'bg-gradient-to-tl from-pink-50 via-white to-orange-50',
        'blob1'           => 'bg-pink-300',
        'blob2'           => 'bg-orange-300',
        'badge_bg'        => 'bg-pink-100',
        'badge_text'      => 'text-pink-600',
        'highlight'       => 'text-pink-600',
        'btn_bg'          => 'bg-pink-600',
        'btn2_text'       => 'text-pink-600',
        'btn2_border'     => 'border-pink-600',
        'check'           => 'text-pink-600',
        'float_icon_bg'   => 'bg-pink-100',
        'float_icon_text' => 'text-pink-600',
        'badge_icon'      => 'baby',
        'trust_type'      => 'grid',
    ],
];

$slide_count       = count($slides);
$image_right_count = 0;
?>

<section class="relative pt-16 md:pt-20">
    <div class="swiper hero-swiper" data-slide-count="<?php echo esc_attr($slide_count); ?>">
        <div class="swiper-wrapper !flex !items-stretch">

            <?php foreach ($slides as $i => $slide) :
                $theme_key = $slide['slide_theme'] ?? 'blue-green';
                $t         = $themes[$theme_key] ?? $themes['blue-green'];
                $layout    = $slide['slide_layout'] ?? 'image-right';
                $is_left   = ($layout === 'image-left');

                if ($is_left) {
                    $float_pos   = 'absolute md:-top-4 md:-right-4 top-4 right-4';
                    $text_class  = 'space-y-4 animate-fadeInUp flex-1 order-1 lg:order-2';
                    $image_class = 'relative order-2 lg:order-1 lg:pr-8';
                } else {
                    $float_pos = ($image_right_count % 2 === 0)
                        ? 'absolute md:-bottom-4 md:-left-4 bottom-4 left-4'
                        : 'absolute md:-bottom-4 md:-right-4 bottom-4 right-4';
                    $image_right_count++;
                    $text_class  = 'space-y-4 animate-fadeInUp flex-1';
                    $image_class = 'relative lg:pl-8';
                }

                $badge        = $slide['badge_text'] ?? '';
                $badge_icon   = !empty($slide['badge_icon']) ? $slide['badge_icon'] : $t['badge_icon'];
                $heading      = $slide['heading'] ?? '';
                $heading_hl   = $slide['heading_highlight'] ?? '';
                $desc         = $slide['description'] ?? '';
                $btn1_link    = $slide['btn_primary_link'] ?? array('title' => '', 'url' => '#', 'target' => '');
                $btn2_link    = $slide['btn_secondary_link'] ?? array('title' => '', 'url' => '#', 'target' => '');
                $btn1_icon    = $slide['btn_primary_icon'] ?? '';
                $btn2_icon    = $slide['btn_secondary_icon'] ?? '';
                $image_url    = $slide['image'] ?? '';
                $float_num    = $slide['floating_number'] ?? '';
                $float_label  = $slide['floating_label'] ?? '';
                $float_icon   = $slide['floating_icon'] ?? 'star';
                $stats_style  = $slide['stats_style'] ?? 'inline';
                $trust_badges = $slide['trust_badges'] ?? [];
            ?>

            <div class="swiper-slide !h-auto">
                <div class="relative <?php echo esc_attr($t['bg']); ?> min-h-[calc(100vh-5rem)] h-full flex max-md:flex-col items-center">
                    <!-- Background blobs -->
                    <div class="absolute inset-0 opacity-10">
                        <div class="absolute top-20 right-20 w-64 h-64 <?php echo esc_attr($t['blob1']); ?> rounded-full blur-3xl"></div>
                        <div class="absolute bottom-20 left-20 w-80 h-80 <?php echo esc_attr($t['blob2']); ?> rounded-full blur-3xl"></div>
                    </div>

                    <div class="max-w-7xl mx-auto px-4 py-8 md:py-12 relative z-10 w-full flex-1 max-md:flex">
                        <div class="flex max-lg:flex-col lg:grid lg:grid-cols-2 gap-8 items-center">

                            <!-- Text content -->
                            <div class="<?php echo esc_attr($text_class); ?>">
                                <div class="inline-flex items-center gap-2 <?php echo esc_attr($t['badge_bg'] . ' ' . $t['badge_text']); ?> px-3 py-1.5 rounded-full text-xs md:text-sm font-medium">
                                    <?php if ($badge_icon) : ?><i data-lucide="<?php echo esc_attr($badge_icon); ?>" class="w-3.5 h-3.5"></i><?php endif; ?>
                                    <span><?php echo esc_html($badge); ?></span>
                                </div>

                                <h1 class="text-3xl md:text-4xl lg:text-5xl xl:text-6xl font-bold font-anek-gujarati text-gray-900">
                                    <?php echo esc_html($heading); ?>
                                    <?php if ($heading_hl) : ?>
                                        <span class="<?php echo esc_attr($t['highlight']); ?>"><?php echo esc_html($heading_hl); ?></span>
                                    <?php endif; ?>
                                </h1>

                                <p class="text-base text-gray-600 max-w-lg"><?php echo esc_html($desc); ?></p>

                                <div class="flex flex-wrap gap-3 pt-2">
                                    <?php if (!empty($btn1_link['url'])) : ?>
                                    <a href="<?php echo esc_url($btn1_link['url']); ?>"<?php echo !empty($btn1_link['target']) ? ' target="' . esc_attr($btn1_link['target']) . '" rel="noopener noreferrer"' : ''; ?> class="group inline-flex items-center gap-2 <?php echo esc_attr($t['btn_bg']); ?> text-white px-6 py-3 rounded-full text-sm font-semibold hover:shadow-xl hover:-translate-y-0.5 transition-all">
                                        <?php if ($btn1_icon && $btn1_icon !== 'arrow-right') : ?><i data-lucide="<?php echo esc_attr($btn1_icon); ?>" class="w-4 h-4"></i><?php endif; ?>
                                        <?php echo esc_html($btn1_link['title']); ?>
                                        <?php if ($btn1_icon === 'arrow-right') : ?><i data-lucide="arrow-right" class="w-4 h-4 group-hover:translate-x-1 transition"></i><?php endif; ?>
                                    </a>
                                    <?php endif; ?>
                                    <?php if (!empty($btn2_link['url'])) : ?>
                                    <a href="<?php echo esc_url($btn2_link['url']); ?>"<?php echo !empty($btn2_link['target']) ? ' target="' . esc_attr($btn2_link['target']) . '" rel="noopener noreferrer"' : ''; ?> class="group inline-flex items-center gap-2 bg-white <?php echo esc_attr($t['btn2_text']); ?> px-6 py-3 rounded-full text-sm font-semibold border-2 <?php echo esc_attr($t['btn2_border']); ?> transition-all hover:shadow-lg">
                                        <?php if ($btn2_icon) : ?><i data-lucide="<?php echo esc_attr($btn2_icon); ?>" class="w-4 h-4"></i><?php endif; ?>
                                        <?php echo esc_html($btn2_link['title']); ?>
                                    </a>
                                    <?php endif; ?>
                                </div>

                                <?php if (!empty($trust_badges)) : ?>
                                    <?php if ($stats_style === 'grid') : ?>
                                    <!-- Grid: number + label (slide 3 style) -->
                                    <div class="grid grid-cols-3 gap-3 pt-4">
                                        <?php foreach ($trust_badges as $tb) :
                                            $num = $tb['number'] ?? '';
                                            $lbl = $tb['label'] ?? '';
                                            if ($num === '' && $lbl === '') continue;
                                        ?>
                                        <div>
                                            <div class="text-lg md:text-xl font-bold <?php echo esc_attr($t['highlight']); ?>"><?php echo esc_html($num); ?></div>
                                            <div class="text-xs md:text-sm text-gray-500"><?php echo esc_html($lbl); ?></div>
                                        </div>
                                        <?php endforeach; ?>
                                    </div>
                                    <?php else : ?>
                                    <!-- Inline: icon + text (slide 1 & 2 style) -->
                                    <div class="flex flex-wrap gap-x-6 gap-y-2 pt-4">
                                        <?php foreach ($trust_badges as $tb) :
                                            $txt = $tb['text'] ?? '';
                                            if ($txt === '') continue;
                                            $ico = !empty($tb['icon']) ? $tb['icon'] : 'circle-check';
                                        ?>
                                        <div class="flex items-center gap-2">
                                            <i data-lucide="<?php echo esc_attr($ico); ?>" class="w-4 h-4 <?php echo esc_attr($t['check']); ?>"></i>
                                            <span class="text-sm text-gray-600"><?php echo esc_html($txt); ?></span>
                                        </div>
                                        <?php endforeach; ?>
                                    </div>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </div>

                            <!-- Image -->
                            <div class="<?php echo esc_attr($image_class); ?>">
                                <div class="relative z-10">
                                    <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($heading); ?>" class="rounded-2xl shadow-2xl w-full h-[20rem] md:h-[25rem] object-cover">
                                    <!-- Floating card -->
                                    <div class="<?php echo esc_attr($float_pos); ?> bg-white p-3 rounded-xl shadow-xl flex items-center gap-3">
                                        <div class="w-10 h-10 <?php echo esc_attr($t['float_icon_bg']); ?> rounded-full flex items-center justify-center">
                                            <i data-lucide="<?php echo esc_attr($float_icon); ?>" class="w-5 h-5 <?php echo esc_attr($t['float_icon_text']); ?>"></i>
                                        </div>
                                        <div>
                                            <p class="text-lg font-bold text-gray-900"><?php echo esc_html($float_num); ?></p>
                                            <p class="text-xs text-gray-500"><?php echo esc_html($float_label); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <?php endforeach; ?>

        </div>

        <!-- Navigation arrows -->
        <button class="hero-prev hidden md:flex absolute left-6 top-1/2 -translate-y-1/2 z-20 w-12 h-12 bg-white/90 backdrop-blur rounded-full shadow-xl items-center justify-center text-gray-700 hover:text-primary transition-all hover:scale-110">
            <i data-lucide="chevron-left" class="w-6 h-6"></i>
        </button>
        <button class="hero-next hidden md:flex absolute right-6 top-1/2 -translate-y-1/2 z-20 w-12 h-12 bg-white/90 backdrop-blur rounded-full shadow-xl items-center justify-center text-gray-700 hover:text-primary transition-all hover:scale-110">
            <i data-lucide="chevron-right" class="w-6 h-6"></i>
        </button>

        <!-- Mobile pagination -->
        <div class="hero-pagination relative flex md:hidden items-center justify-center -mt-8 py-4 z-10 [&_.swiper-pagination-bullet]:bg-primary [&_.swiper-pagination-bullet]:!w-3 [&_.swiper-pagination-bullet]:!h-3 [&_.swiper-pagination-bullet]:!rounded-full"></div>

        <!-- Desktop slide counter -->
        <div class="hidden md:block absolute bottom-4 right-4 md:right-8 z-20 bg-white/90 backdrop-blur px-3 py-1.5 rounded-full shadow-lg text-sm font-medium text-gray-700">
            <span class="swiper-pagination-current">1</span> / <span class="swiper-pagination-total"><?php echo esc_html($slide_count); ?></span>
        </div>
    </div>
</section>
