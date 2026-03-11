<?php
/**
 * Insurance & TPA – Stats + Partners list
 */

$stats      = sch_get_field('ins_stats');
$badge      = sch_get_field('ins_partners_badge');
$heading    = sch_get_field('ins_partners_heading');
$heading_hl = sch_get_field('ins_partners_heading_highlight');
$desc       = sch_get_field('ins_partners_description');
$intro      = sch_get_field('ins_partners_intro');
$partners   = sch_get_field('ins_partners_list');
$total_text = sch_get_field('ins_partners_total');

$stat_colors = array(
    'primary'   => array('bg' => 'from-primary/5',   'border' => 'border-primary/10',   'text' => 'text-primary'),
    'secondary' => array('bg' => 'from-secondary/5', 'border' => 'border-secondary/10', 'text' => 'text-secondary'),
    'accent'    => array('bg' => 'from-accent/5',    'border' => 'border-accent/10',    'text' => 'text-accent-dark'),
    'pink'      => array('bg' => 'from-pink-500/5',  'border' => 'border-pink-500/10',  'text' => 'text-pink-600'),
);
?>

<section class="overflow-hidden py-12 md:py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <?php if ($stats) : ?>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-6 mb-10" data-aos="fade-up" data-aos-duration="700">
            <?php foreach ($stats as $stat) :
                $color_key = !empty($stat['color']) ? $stat['color'] : 'primary';
                $c = isset($stat_colors[$color_key]) ? $stat_colors[$color_key] : $stat_colors['primary'];
            ?>
            <div class="bg-gradient-to-br <?php echo esc_attr($c['bg']); ?> to-transparent p-4 md:p-6 rounded-xl border <?php echo esc_attr($c['border']); ?> text-center">
                <span class="text-2xl md:text-3xl lg:text-4xl font-bold <?php echo esc_attr($c['text']); ?> block"><?php echo esc_html($stat['number'] ?? ''); ?></span>
                <span class="text-xs md:text-sm text-gray-600"><?php echo esc_html($stat['label'] ?? ''); ?></span>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
        
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
        
        <?php if ($partners) : ?>
        <div class="bg-gradient-to-br from-gray-50 to-white p-6 md:p-8 lg:p-10 rounded-2xl shadow-xl border border-gray-200" data-aos="fade-up" data-aos-duration="800">
            <div class="flex items-center gap-3 mb-6 pb-4 border-b border-gray-200">
                <div class="w-10 h-10 md:w-12 md:h-12 bg-primary/10 rounded-full flex items-center justify-center">
                    <i data-lucide="shield-check" class="w-5 h-5 md:w-6 md:h-6 text-primary"></i>
                </div>
                <?php if ($intro) : ?>
                <h3 class="text-lg md:text-xl lg:text-2xl font-bold font-anek-gujarati text-gray-900"><?php echo esc_html($intro); ?></h3>
                <?php endif; ?>
            </div>
            
            <?php
            $count = count($partners);
            $half  = (int) ceil($count / 2);
            $left  = array_slice($partners, 0, $half);
            $right = array_slice($partners, $half);
            $i = 1;
            ?>
            <div class="grid md:grid-cols-2 gap-x-8 gap-y-3">
                <div class="space-y-3">
                    <?php foreach ($left as $p) : ?>
                    <div class="flex items-start gap-3 group hover:bg-primary/5 p-2 rounded-lg transition-colors">
                        <span class="w-6 h-6 bg-primary/10 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5 group-hover:bg-primary group-hover:text-white transition-colors">
                            <span class="text-xs font-bold"><?php echo esc_html($i); ?></span>
                        </span>
                        <span class="text-sm md:text-base text-gray-700"><?php echo esc_html($p['name'] ?? ''); ?></span>
                    </div>
                    <?php $i++; endforeach; ?>
                </div>
                
                <div class="space-y-3">
                    <?php foreach ($right as $p) : ?>
                    <div class="flex items-start gap-3 group hover:bg-primary/5 p-2 rounded-lg transition-colors">
                        <span class="w-6 h-6 bg-primary/10 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5 group-hover:bg-primary group-hover:text-white transition-colors">
                            <span class="text-xs font-bold"><?php echo esc_html($i); ?></span>
                        </span>
                        <span class="text-sm md:text-base text-gray-700"><?php echo esc_html($p['name'] ?? ''); ?></span>
                    </div>
                    <?php $i++; endforeach; ?>
                </div>
            </div>
            
            <?php if ($total_text) : ?>
            <div class="mt-6 pt-4 border-t border-gray-200 flex justify-end">
                <div class="bg-primary/10 px-4 py-2 rounded-full">
                    <span class="text-sm md:text-base font-medium text-primary"><?php echo esc_html($total_text); ?></span>
                </div>
            </div>
            <?php endif; ?>
        </div>
        <?php endif; ?>
    </div>
</section>

