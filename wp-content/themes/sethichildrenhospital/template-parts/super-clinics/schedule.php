<?php
/**
 * Super Speciality Clinics – Clinics schedule table
 */

$badge      = sch_get_field('sc_schedule_badge');
$heading    = sch_get_field('sc_schedule_heading');
$heading_hl = sch_get_field('sc_schedule_heading_highlight');
$desc       = sch_get_field('sc_schedule_description');
$rows       = sch_get_field('sc_schedule_rows');
$note       = sch_get_field('sc_schedule_note');
?>

<section class="overflow-hidden py-12 md:py-16 bg-white">
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
        
        <div class="bg-gradient-to-br from-gray-50 to-white p-4 md:p-6 lg:p-8 rounded-2xl shadow-xl border border-gray-200 overflow-x-auto" data-aos="fade-up" data-aos-duration="800">
            <?php if ($rows) : ?>
            <table class="w-full min-w-[600px] border-collapse">
                <thead>
                    <tr class="bg-gradient-to-r from-[#EA5D92] to-[#EA5D92] text-white">
                        <th class="px-4 py-3 md:px-6 md:py-4 text-left text-sm md:text-base font-bold rounded-tl-2xl">Clinics</th>
                        <th class="px-4 py-3 md:px-6 md:py-4 text-left text-sm md:text-base font-bold">Days</th>
                        <th class="px-4 py-3 md:px-6 md:py-4 text-left text-sm md:text-base font-bold rounded-tr-2xl">Timings</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <?php foreach ($rows as $row) : ?>
                    <tr class="hover:bg-primary/5 transition-colors">
                        <td class="px-4 py-3 md:px-6 md:py-4 text-sm md:text-base font-semibold text-gray-800"><?php echo esc_html($row['clinic'] ?? ''); ?></td>
                        <td class="px-4 py-3 md:px-6 md:py-4 text-sm md:text-base text-gray-600"><?php echo esc_html($row['days'] ?? ''); ?></td>
                        <td class="px-4 py-3 md:px-6 md:py-4 text-sm md:text-base text-gray-600"><?php echo esc_html($row['timings'] ?? ''); ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <?php endif; ?>
        </div>
        
        <?php if ($note) : ?>
        <div class="mt-6 bg-primary/5 p-4 md:p-6 rounded-xl border border-primary/20 flex items-center gap-3" data-aos="fade-up" data-aos-duration="700">
            <i data-lucide="info" class="w-5 h-5 text-primary flex-shrink-0"></i>
            <p class="text-sm md:text-base text-gray-600"><?php echo esc_html($note); ?></p>
        </div>
        <?php endif; ?>
    </div>
</section>

