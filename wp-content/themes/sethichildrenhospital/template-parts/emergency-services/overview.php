<?php
/**
 * Emergency Services – Overview (About + We Offer)
 */

$title     = sch_get_field('em_overview_title');
$text      = sch_get_field('em_overview_text');
$we_heading = sch_get_field('em_we_offer_heading');
$we_offer  = sch_get_field('em_we_offer');
?>

<section class="py-12 md:py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid lg:grid-cols-2 gap-8 lg:gap-12 items-start">
            <div data-aos="fade-right" data-aos-duration="700">
                <div class="bg-white p-4 md:p-6 lg:p-8 rounded-2xl shadow-xl border border-gray-200">
                    <?php if ($title) : ?>
                    <h2 class="text-xl md:text-2xl lg:text-3xl font-bold font-anek-gujarati text-gray-900 mb-4 flex items-center gap-3">
                        <span class="w-1 h-8 bg-primary rounded-full"></span>
                        <?php echo esc_html($title); ?>
                    </h2>
                    <?php endif; ?>
                    <?php if ($text) : ?>
                    <div class="text-gray-600 text-sm md:text-base space-y-4">
                        <?php echo wp_kses_post($text); ?>
                    </div>
                    <?php endif; ?>
                </div>
            </div>

            <div data-aos="fade-left" data-aos-duration="700" class="lg:sticky top-24">
                <div class="bg-gradient-to-br from-primary to-secondary p-4 md:p-6 lg:p-8 rounded-2xl shadow-xl text-white h-full">
                    <?php if ($we_heading) : ?>
                    <h3 class="text-xl md:text-2xl font-bold font-anek-gujarati mb-6"><?php echo esc_html($we_heading); ?></h3>
                    <?php endif; ?>
                    <?php if ($we_offer) : ?>
                    <div class="grid sm:grid-cols-2 gap-x-6 gap-y-3">
                        <ul class="space-y-3 text-white/90 text-sm md:text-base">
                            <?php
                            $count = count($we_offer);
                            $half  = (int) ceil($count / 2);
                            $left  = array_slice($we_offer, 0, $half);
                            $right = array_slice($we_offer, $half);
                            foreach ($left as $item) :
                                $t = $item['text'] ?? '';
                                if ($t === '') continue;
                            ?>
                            <li class="flex items-start gap-3">
                                <i data-lucide="check-circle" class="w-5 h-5 text-white flex-shrink-0 mt-0.5"></i>
                                <span><?php echo wp_kses_post($t); ?></span>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                        <ul class="space-y-3 text-white/90 text-sm md:text-base">
                            <?php foreach ($right as $item) :
                                $t = $item['text'] ?? '';
                                if ($t === '') continue;
                            ?>
                            <li class="flex items-start gap-3">
                                <i data-lucide="check-circle" class="w-5 h-5 text-white flex-shrink-0 mt-0.5"></i>
                                <span><?php echo wp_kses_post($t); ?></span>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
