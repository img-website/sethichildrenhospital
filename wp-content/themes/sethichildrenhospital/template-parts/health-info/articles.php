<?php
/**
 * Health Info – Articles list
 */

$articles = sch_get_field('hi_articles_list');

$tag_colors = array(
    'primary'   => array('bg' => 'bg-primary/10',   'text' => 'text-primary'),
    'secondary' => array('bg' => 'bg-secondary/10', 'text' => 'text-secondary'),
    'orange'    => array('bg' => 'bg-orange-500/10', 'text' => 'text-orange-600'),
    'red'       => array('bg' => 'bg-red-500/10',  'text' => 'text-red-600'),
    'purple'    => array('bg' => 'bg-purple-500/10', 'text' => 'text-purple-600'),
);
?>

<section class="overflow-hidden py-12 md:py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <?php if ($articles) : ?>
        <div class="space-y-8 md:space-y-10">
            <?php
            $delay = 0;
            foreach ($articles as $article) :
                $img   = $article['image'] ?? '';
                $tag   = $article['tag_label'] ?? '';
                $color_key = !empty($article['tag_color']) ? $article['tag_color'] : 'primary';
                $c     = isset($tag_colors[$color_key]) ? $tag_colors[$color_key] : $tag_colors['primary'];
                $title = $article['title'] ?? '';
                $ex1   = $article['excerpt1'] ?? '';
                $ex2   = $article['excerpt2'] ?? '';
                $upd   = $article['updated'] ?? '';
                $link  = isset($article['link']) && is_array($article['link']) ? $article['link'] : array();
                if (!$img) {
                    $img = sch_img('health-placeholder.webp');
                }
            ?>
            <div class="bg-white rounded-2xl shadow-lg border border-gray-200 overflow-hidden hover:shadow-xl transition-all hover:-translate-y-1" data-aos="fade-up" data-aos-duration="700" data-aos-delay="<?php echo (int) $delay; ?>">
                <div class="grid md:grid-cols-12 gap-4 md:gap-6">
                    <div class="md:col-span-4 lg:col-span-3">
                        <div class="h-48 md:h-full w-full overflow-hidden">
                            <img src="<?php echo esc_url($img); ?>"
                                 alt="<?php echo esc_attr($title); ?>"
                                 class="w-full h-full object-cover hover:scale-110 transition-transform duration-500">
                        </div>
                    </div>
                    <div class="md:col-span-8 lg:col-span-9 p-4 md:p-6">
                        <?php if ($tag) : ?>
                        <div class="inline-block px-3 py-1 <?php echo esc_attr($c['bg'] . ' ' . $c['text']); ?> rounded-full text-xs font-bold uppercase tracking-wider mb-3">
                            <?php echo esc_html($tag); ?>
                        </div>
                        <?php endif; ?>
                        <?php if ($title) : ?>
                        <h3 class="text-xl md:text-2xl lg:text-3xl font-bold font-anek-gujarati text-gray-900 mb-3 hover:text-primary transition-colors">
                            <?php if (!empty($link['url'])) : ?>
                            <a href="<?php echo esc_url($link['url']); ?>"<?php echo !empty($link['target']) ? ' target="' . esc_attr($link['target']) . '" rel="noopener noreferrer"' : ''; ?>>
                                <?php echo esc_html($title); ?>
                            </a>
                            <?php else : ?>
                                <?php echo esc_html($title); ?>
                            <?php endif; ?>
                        </h3>
                        <?php endif; ?>
                        <?php if ($ex1) : ?>
                        <p class="text-gray-600 text-sm md:text-base leading-relaxed mb-4">
                            <?php echo esc_html($ex1); ?>
                        </p>
                        <?php endif; ?>
                        <?php if ($ex2) : ?>
                        <p class="text-gray-600 text-sm md:text-base leading-relaxed">
                            <?php echo esc_html($ex2); ?>
                        </p>
                        <?php endif; ?>
                        <div class="mt-4 flex items-center gap-4">
                            <?php if ($upd) : ?><span class="text-xs text-gray-400"><?php echo esc_html($upd); ?></span><?php endif; ?>
                            <?php if (!empty($link['url'])) : ?>
                            <a href="<?php echo esc_url($link['url']); ?>"<?php echo !empty($link['target']) ? ' target="' . esc_attr($link['target']) . '" rel="noopener noreferrer"' : ''; ?> class="inline-flex items-center gap-1 text-primary font-semibold text-sm hover:gap-2 transition-all">
                                Read More <i data-lucide="arrow-right" class="w-4 h-4"></i>
                            </a>
                            <?php endif; ?>
                        </div>
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

