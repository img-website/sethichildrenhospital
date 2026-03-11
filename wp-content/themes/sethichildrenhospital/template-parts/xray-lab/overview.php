<?php
/**
 * X-Ray & Lab – Overview & We Offer
 */

$title       = sch_get_field('xlab_overview_title');
$text        = sch_get_field('xlab_overview_text');
$subsections = sch_get_field('xlab_overview_lists');
$we_left     = sch_get_field('xlab_we_left');
$we_right    = sch_get_field('xlab_we_right');
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

                    <?php if ($subsections) : ?>
                    <div class="mt-4 space-y-4 text-gray-600 text-sm md:text-base">
                        <?php foreach ($subsections as $sec) :
                            $sec_title = $sec['title'] ?? '';
                            $body      = $sec['body'] ?? '';
                            if ($sec_title === '' && $body === '') continue;
                        ?>
                        <?php if ($sec_title) : ?>
                        <p class="font-semibold text-gray-800"><?php echo esc_html($sec_title); ?>:</p>
                        <?php endif; ?>
                        <?php if ($body) : ?>
                        <p class="pl-0"><?php echo esc_html($body); ?></p>
                        <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>
                </div>
            </div>

            <div data-aos="fade-left" data-aos-duration="700" class="lg:sticky top-24">
                <div class="bg-gradient-to-br from-primary to-secondary p-4 md:p-6 lg:p-8 rounded-2xl shadow-xl text-white h-full">
                    <h3 class="text-xl md:text-2xl font-bold font-anek-gujarati mb-6">We Offer</h3>
                    <?php if ($we_left || $we_right) : ?>
                    <div class="grid sm:grid-cols-2 gap-x-6 gap-y-3">
                        <ul class="space-y-3 text-white/90 text-sm md:text-base">
                            <?php if ($we_left) : foreach ($we_left as $item) :
                                $text = $item['text'] ?? '';
                                if ($text === '') continue;
                            ?>
                            <li class="flex items-start gap-3">
                                <i data-lucide="check-circle" class="w-5 h-5 text-white flex-shrink-0 mt-0.5"></i>
                                <span><?php echo esc_html($text); ?></span>
                            </li>
                            <?php endforeach; endif; ?>
                        </ul>
                        <ul class="space-y-3 text-white/90 text-sm md:text-base">
                            <?php if ($we_right) : foreach ($we_right as $item) :
                                $text = $item['text'] ?? '';
                                if ($text === '') continue;
                            ?>
                            <li class="flex items-start gap-3">
                                <i data-lucide="check-circle" class="w-5 h-5 text-white flex-shrink-0 mt-0.5"></i>
                                <span><?php echo esc_html($text); ?></span>
                            </li>
                            <?php endforeach; endif; ?>
                        </ul>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

