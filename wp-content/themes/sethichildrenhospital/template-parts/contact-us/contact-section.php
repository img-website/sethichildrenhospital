<?php
/**
 * Contact Us – Contact Form + Contact Info + Emergency Card
 * Form submits via admin-post.php and is sent with wp_mail() (WP Mail SMTP compatible).
 */

$form_heading = sch_get_field('cu_form_heading');
$form_submit  = sch_get_field('cu_form_submit_text');

$info_heading = sch_get_field('cu_info_heading');
$info_phones  = sch_get_field('cu_info_phones');
$info_email   = sch_get_field('cu_info_email');
$info_fax     = sch_get_field('cu_info_fax');
$info_address = sch_get_field('cu_info_address');

$emergency_heading = sch_get_field('cu_emergency_heading');
$emergency_icon   = sch_get_field('cu_emergency_icon') ?: 'ambulance';
$emergency_rows   = sch_get_field('cu_emergency_rows');
$emergency_note   = sch_get_field('cu_emergency_note');

$flash = get_transient('sch_contact_flash');
if ($flash && is_array($flash)) {
    delete_transient('sch_contact_flash');
}
?>

<section class="overflow-hidden py-12 md:py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <?php if ($flash && !empty($flash['message'])) : ?>
        <div class="mb-6 p-4 rounded-xl <?php echo ($flash['status'] === 'success') ? 'bg-primary/10 text-primary border border-primary/20' : 'bg-red-50 text-red-700 border border-red-200'; ?>" role="alert">
            <?php echo esc_html($flash['message']); ?>
        </div>
        <?php endif; ?>
        <div class="grid lg:grid-cols-12 gap-8 lg:gap-12">
            <!-- Left Column - Contact Form -->
            <div class="lg:col-span-7" data-aos="fade-right" data-aos-duration="700">
                <div class="bg-white p-4 md:p-6 lg:p-8 rounded-2xl shadow-xl border border-gray-200">
                    <?php if ($form_heading) : ?>
                    <h2 class="text-xl md:text-2xl lg:text-3xl font-bold font-anek-gujarati text-gray-900 mb-6 flex items-center gap-3">
                        <span class="w-1 h-8 bg-primary rounded-full"></span>
                        <?php echo esc_html($form_heading); ?>
                    </h2>
                    <?php endif; ?>

                    <form id="sch-contact-form" action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post" class="space-y-4 md:space-y-5">
                        <input type="hidden" name="action" value="sch_contact_form">
                        <?php wp_nonce_field('sch_contact_form', 'sch_contact_nonce'); ?>
                        <div>
                            <label class="block text-sm md:text-base font-medium text-gray-700 mb-1.5">Your Name <span class="text-primary">*</span></label>
                            <input type="text" name="sch_contact_name" required class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all outline-none text-sm md:text-base" placeholder="Enter your full name">
                        </div>
                        <div>
                            <label class="block text-sm md:text-base font-medium text-gray-700 mb-1.5">Your Email <span class="text-primary">*</span></label>
                            <input type="email" name="sch_contact_email" required pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" maxlength="100" title="<?php esc_attr_e('Please enter a valid email address (e.g. name@example.com)', 'sethichildrenhospital'); ?>" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all outline-none text-sm md:text-base" placeholder="Enter your email address">
                        </div>
                        <div>
                            <label class="block text-sm md:text-base font-medium text-gray-700 mb-1.5">Subject</label>
                            <input type="text" name="sch_contact_subject" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all outline-none text-sm md:text-base" placeholder="Enter subject">
                        </div>
                        <div>
                            <label class="block text-sm md:text-base font-medium text-gray-700 mb-1.5">Contact No.</label>
                            <input type="tel" name="sch_contact_phone" inputmode="numeric" pattern="[0-9]{10}" maxlength="10" autocomplete="tel" title="<?php esc_attr_e('Enter 10 digits only (numbers only)', 'sethichildrenhospital'); ?>" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all outline-none text-sm md:text-base sch-contact-phone" placeholder="Enter 10-digit mobile number">
                        </div>
                        <div>
                            <label class="block text-sm md:text-base font-medium text-gray-700 mb-1.5">Your Message</label>
                            <textarea name="sch_contact_message" rows="5" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all outline-none text-sm md:text-base resize-none" placeholder="Write your message here..."></textarea>
                        </div>
                        <div>
                            <button type="submit" name="send" class="sch-contact-submit group inline-flex items-center justify-center gap-2 bg-gradient-to-r from-primary to-secondary text-white px-8 py-3.5 rounded-xl text-sm md:text-base font-semibold hover:shadow-xl transition-all hover:-translate-y-0.5 w-full md:w-auto disabled:opacity-75 disabled:pointer-events-none disabled:cursor-not-allowed">
                                <span class="sch-contact-btn-text inline-flex items-center gap-2">
                                    <i data-lucide="send" class="w-4 h-4 group-hover:translate-x-1 transition-transform"></i>
                                    <?php echo esc_html($form_submit ?: 'Send Message'); ?>
                                </span>
                                <span class="sch-contact-btn-loader hidden inline-flex items-center gap-2">
                                    <svg class="animate-spin w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" aria-hidden="true">
                                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                    </svg>
                                    <span><?php esc_html_e('Sending…', 'sethichildrenhospital'); ?></span>
                                </span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Right Column - Contact Info + Emergency Card -->
            <div class="lg:col-span-5 space-y-6" data-aos="fade-left" data-aos-duration="700">
                <!-- Contact Info Card -->
                <div class="bg-gradient-to-br from-gray-50 to-white p-4 md:p-6 lg:p-8 rounded-2xl shadow-xl border border-gray-200">
                    <?php if ($info_heading) : ?>
                    <h2 class="text-xl md:text-2xl lg:text-3xl font-bold font-anek-gujarati text-gray-900 mb-6 flex items-center gap-3">
                        <span class="w-1 h-8 bg-primary rounded-full"></span>
                        <?php echo esc_html($info_heading); ?>
                    </h2>
                    <?php endif; ?>
                    <div class="space-y-5">
                        <?php if ($info_phones) : ?>
                        <div class="flex items-start gap-4 group hover:bg-primary/5 p-3 rounded-xl transition-colors">
                            <div class="w-10 h-10 md:w-12 md:h-12 bg-primary/10 rounded-full flex items-center justify-center flex-shrink-0 group-hover:bg-primary group-hover:text-white transition-colors">
                                <i data-lucide="phone" class="w-5 h-5 md:w-6 md:h-6 text-primary group-hover:text-white"></i>
                            </div>
                            <div>
                                <h3 class="text-sm md:text-base font-bold text-gray-700 mb-1">Phone Numbers</h3>
                                <div class="text-gray-600 text-sm md:text-base"><?php echo wp_kses_post(nl2br($info_phones)); ?></div>
                            </div>
                        </div>
                        <?php endif; ?>
                        <?php if ($info_email) : ?>
                        <div class="flex items-start gap-4 group hover:bg-primary/5 p-3 rounded-xl transition-colors">
                            <div class="w-10 h-10 md:w-12 md:h-12 bg-primary/10 rounded-full flex items-center justify-center flex-shrink-0 group-hover:bg-primary group-hover:text-white transition-colors">
                                <i data-lucide="mail" class="w-5 h-5 md:w-6 md:h-6 text-primary group-hover:text-white"></i>
                            </div>
                            <div>
                                <h3 class="text-sm md:text-base font-bold text-gray-700 mb-1">Email Address</h3>
                                <a href="mailto:<?php echo esc_attr($info_email); ?>" class="text-gray-600 text-sm md:text-base hover:text-primary transition break-all"><?php echo esc_html($info_email); ?></a>
                            </div>
                        </div>
                        <?php endif; ?>
                        <?php if ($info_fax) : ?>
                        <div class="flex items-start gap-4 group hover:bg-primary/5 p-3 rounded-xl transition-colors">
                            <div class="w-10 h-10 md:w-12 md:h-12 bg-primary/10 rounded-full flex items-center justify-center flex-shrink-0 group-hover:bg-primary group-hover:text-white transition-colors">
                                <i data-lucide="printer" class="w-5 h-5 md:w-6 md:h-6 text-primary group-hover:text-white"></i>
                            </div>
                            <div>
                                <h3 class="text-sm md:text-base font-bold text-gray-700 mb-1">Fax</h3>
                                <?php
                                $fax_clean = preg_replace('/\s+/', '', $info_fax);
                                if (preg_match('/^[\d\-+]+$/', $fax_clean)) : ?>
                                <a href="tel:<?php echo esc_attr($fax_clean); ?>" class="text-gray-600 text-sm md:text-base hover:text-primary transition"><?php echo esc_html($info_fax); ?></a>
                                <?php else : ?>
                                <span class="text-gray-600 text-sm md:text-base"><?php echo esc_html($info_fax); ?></span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <?php endif; ?>
                        <?php if ($info_address) : ?>
                        <div class="flex items-start gap-4 group hover:bg-primary/5 p-3 rounded-xl transition-colors">
                            <div class="w-10 h-10 md:w-12 md:h-12 bg-primary/10 rounded-full flex items-center justify-center flex-shrink-0 group-hover:bg-primary group-hover:text-white transition-colors">
                                <i data-lucide="map-pin" class="w-5 h-5 md:w-6 md:h-6 text-primary group-hover:text-white"></i>
                            </div>
                            <div>
                                <h3 class="text-sm md:text-base font-bold text-gray-700 mb-1">Address</h3>
                                <p class="text-gray-600 text-sm md:text-base"><?php echo wp_kses_post(nl2br($info_address)); ?></p>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>

                <!-- Emergency Contacts Card -->
                <?php if ($emergency_heading || $emergency_rows) : ?>
                <div class="bg-gradient-to-br from-primary to-secondary p-4 md:p-6 lg:p-8 rounded-2xl shadow-xl text-white">
                    <?php if ($emergency_heading) : ?>
                    <h3 class="text-lg md:text-xl font-bold font-anek-gujarati mb-4 flex items-center gap-2">
                        <i data-lucide="<?php echo esc_attr($emergency_icon); ?>" class="w-5 h-5"></i>
                        <?php echo esc_html($emergency_heading); ?>
                    </h3>
                    <?php endif; ?>
                    <?php if ($emergency_rows && is_array($emergency_rows)) : ?>
                    <div class="space-y-3">
                        <?php foreach ($emergency_rows as $idx => $row) :
                            $label = $row['label'] ?? '';
                            $link  = $row['link'] ?? array();
                            $link  = is_array($link) ? $link : array();
                            $url   = $link['url'] ?? '';
                            $title = $link['title'] ?? $url;
                            $last  = $idx === count($emergency_rows) - 1;
                        ?>
                        <div class="flex justify-between items-center py-2 <?php echo $last ? '' : 'border-b border-white/20'; ?>">
                            <span class="text-sm md:text-base text-white/90"><?php echo esc_html($label); ?></span>
                            <?php if ($url) : ?>
                            <a href="<?php echo esc_url($url); ?>"<?php echo !empty($link['target']) ? ' target="' . esc_attr($link['target']) . '" rel="noopener noreferrer"' : ''; ?> class="text-white font-semibold text-sm md:text-base hover:underline"><?php echo esc_html($title); ?></a>
                            <?php else : ?>
                            <span class="text-white font-semibold text-sm md:text-base"><?php echo esc_html($title); ?></span>
                            <?php endif; ?>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>
                    <?php if ($emergency_note) : ?>
                    <div class="mt-4 pt-3 border-t border-white/20">
                        <p class="text-xs md:text-sm text-white/80 text-center"><?php echo esc_html($emergency_note); ?></p>
                    </div>
                    <?php endif; ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
