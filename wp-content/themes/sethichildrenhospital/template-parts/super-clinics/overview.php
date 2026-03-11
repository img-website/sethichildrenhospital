<?php
/**
 * Super Speciality Clinics – Overview & features
 */

$about_title = sch_get_field('sc_about_title');
$about_text  = sch_get_field('sc_about_text');
$we_left     = sch_get_field('sc_we_offer_left');
$we_right    = sch_get_field('sc_we_offer_right');
$why_items   = sch_get_field('sc_why_items');
$why_stats   = sch_get_field('sc_why_stats');
?>

<section class="overflow-hidden py-12 md:py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid lg:grid-cols-2 gap-8 lg:gap-12 items-start">
            <div data-aos="fade-right" data-aos-duration="700">
                <div class="bg-white p-4 md:p-6 lg:p-8 rounded-2xl shadow-xl border border-gray-200">
                    <?php if ($about_title) : ?>
                    <h2 class="text-xl md:text-2xl lg:text-3xl font-bold font-anek-gujarati text-gray-900 mb-4 flex items-center gap-3">
                        <span class="w-1 h-8 bg-primary rounded-full"></span>
                        <?php echo esc_html($about_title); ?>
                    </h2>
                    <?php endif; ?>
                    
                    <?php if ($about_text) : ?>
                    <p class="text-gray-600 text-base leading-relaxed mb-6">
                        <?php echo esc_html($about_text); ?>
                    </p>
                    <?php endif; ?>
                    
                    <?php if ($we_left || $we_right) : ?>
                    <div class="bg-gradient-to-br from-primary/5 to-secondary/5 p-4 md:p-6 rounded-xl">
                        <h3 class="text-lg md:text-xl font-bold font-anek-gujarati text-gray-900 mb-4 flex items-center gap-2">
                            <i data-lucide="check-circle" class="w-5 h-5 text-primary"></i>
                            We Offer:
                        </h3>
                        
                        <div class="grid md:grid-cols-2 gap-3">
                            <ul class="space-y-2">
                                <?php if ($we_left) : foreach ($we_left as $item) :
                                    $text = $item['text'] ?? '';
                                    if ($text === '') continue;
                                ?>
                                <li class="flex items-center gap-2 text-sm md:text-base text-gray-700">
                                    <span class="w-1.5 h-1.5 bg-primary rounded-full"></span>
                                    <?php echo esc_html($text); ?>
                                </li>
                                <?php endforeach; endif; ?>
                            </ul>
                            <ul class="space-y-2">
                                <?php if ($we_right) : foreach ($we_right as $item) :
                                    $text = $item['text'] ?? '';
                                    if ($text === '') continue;
                                ?>
                                <li class="flex items-center gap-2 text-sm md:text-base text-gray-700">
                                    <span class="w-1.5 h-1.5 bg-primary rounded-full"></span>
                                    <?php echo esc_html($text); ?>
                                </li>
                                <?php endforeach; endif; ?>
                            </ul>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
            
            <div data-aos="fade-left" data-aos-duration="700">
                <div class="bg-gradient-to-br from-primary to-secondary p-4 md:p-6 lg:p-8 rounded-2xl shadow-xl text-white">
                    <h3 class="text-xl md:text-2xl font-bold font-anek-gujarati mb-6">Why Choose Us?</h3>
                    
                    <?php if ($why_items) : ?>
                    <div class="space-y-4">
                        <?php foreach ($why_items as $card) :
                            $icon = !empty($card['icon']) ? $card['icon'] : 'award';
                        ?>
                        <div class="flex items-start gap-3">
                            <div class="w-8 h-8 md:w-10 md:h-10 bg-white/20 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                                <i data-lucide="<?php echo esc_attr($icon); ?>" class="w-4 h-4 md:w-5 md:h-5 text-white"></i>
                            </div>
                            <div>
                                <h4 class="text-base md:text-lg font-bold font-anek-gujarati"><?php echo esc_html($card['title'] ?? ''); ?></h4>
                                <p class="text-white/80 text-sm md:text-base"><?php echo esc_html($card['description'] ?? ''); ?></p>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>
                    
                    <?php if ($why_stats) : ?>
                    <div class="grid grid-cols-2 gap-4 mt-8 pt-6 border-t border-white/20">
                        <?php foreach ($why_stats as $stat) : ?>
                        <div class="text-center">
                            <span class="text-xl md:text-2xl lg:text-3xl font-bold block"><?php echo esc_html($stat['number'] ?? ''); ?></span>
                            <span class="text-xs md:text-sm text-white/80"><?php echo esc_html($stat['label'] ?? ''); ?></span>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

