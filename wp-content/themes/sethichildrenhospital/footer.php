<?php
/**
 * Footer Template
 * Dynamic via: ACF Options (Footer Settings)
 */

$logo_url        = sch_get_footer_logo_url();
$about_text      = sch_option('footer_about_text', 'We have been most trusted health care innovators for 25+ years.');
$address         = sch_option('footer_address', 'Sethi Children Hospital, 19 Lajpat Nagar, Vijay Mandir Road, Alwar');
$cta_badge       = sch_option('footer_cta_badge', 'Get in touch');
$cta_heading     = sch_option('footer_cta_heading', "We're Here for Your Child's Health");
$cta_desc        = sch_option('footer_cta_description', 'Have questions about admissions, programs, or emergency care? Our team is available 24/7 to help you.');
$cta_btn1_link   = sch_option('footer_cta_btn1_link', array('title' => 'Book Appointment', 'url' => '#', 'target' => ''));
$cta_btn1_icon   = sch_option('footer_cta_btn1_icon', 'calendar-check');
$cta_btn2_link   = sch_option('footer_cta_btn2_link', array('title' => 'Emergency: +91-9549101235', 'url' => 'tel:+919549101235', 'target' => ''));
$cta_btn2_icon   = sch_option('footer_cta_btn2_icon', 'phone');
$emerg_phone     = sch_option('footer_emergency_phone', '+91 95491 01235');
$appt_phone      = sch_option('footer_appointment_phone', '+91 78914 52498');
$ins_phone       = sch_option('footer_insurance_phone', '+91 97993 46653');
$email           = sch_option('footer_email', 'sethichildrenhospital@gmail.com');
$fax             = sch_option('footer_fax', '+91-144-2335565');
$opening_hours   = sch_get_field('footer_opening_hours', 'option');
$copyright       = sch_option('footer_copyright', 'Copyright © 2017 Sethi Children Hospital. All rights reserved.');
$dev_text        = sch_option('footer_developer_text', 'IMG GLOBAL INFOTECH');
$transport       = sch_option('footer_transport_note', 'We have only exclusive "Hospital to Hospital" Transport services. We do not have "Home to Hospital" transport.');
$disclaimer      = sch_option('footer_disclaimer', 'The intent of this website is purely for information and guidance. It is not meant for marketing or promotion of any kind.');
$quick_links     = sch_option('footer_quick_links', array());
$services_links  = sch_option('footer_services_links', array());
$social_links    = sch_get_field('footer_social_links', 'option');
?>

    <!-- ======= FOOTER SECTION (full, expanded) ======= -->
    <footer class="overflow-hidden relative w-full bg-slate-900 text-white" data-aos="fade-down" data-aos-duration="600">
        <!-- Main footer with gradient background -->
        <div class="absolute inset-0 bg-gradient-to-br from-secondary via-slate-900 to-slate-950 opacity-95 z-0"></div>
        <div class="absolute top-0 right-0 w-[50rem] h-[50rem] bg-primary/10 rounded-full blur-[7.5rem] pointer-events-none z-0 mix-blend-screen"></div>
        <div class="absolute bottom-0 left-0 w-[37.5rem] h-[37.5rem] bg-accent/5 rounded-full blur-[6.25rem] pointer-events-none z-0 mix-blend-screen"></div>
        
        <div class="relative z-10 max-w-7xl mx-auto px-4 pt-12 pb-8">
            <!-- Top CTA card -->
            <div class="mb-12 rounded-2xl p-6 lg:p-8 relative overflow-hidden bg-gradient-to-r from-primary/20 via-secondary/20 to-primary/20 border border-primary/30 shadow-2xl backdrop-blur-sm">
                <div class="absolute inset-0 bg-[url('<?php echo esc_url(sch_img('sethi4.webp')); ?>')] opacity-20"></div>
                <div class="grid lg:grid-cols-2 gap-6 items-center relative z-10">
                    <div>
                        <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-primary/20 border border-primary/30 mb-3">
                            <span class="relative flex h-2 w-2">
                                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-accent opacity-75"></span>
                                <span class="relative inline-flex rounded-full h-2 w-2 bg-accent"></span>
                            </span>
                            <span class="text-xs font-bold text-accent uppercase tracking-wider"><?php echo esc_html($cta_badge); ?></span>
                        </div>
                        <h2 class="text-2xl md:text-3xl font-bold font-anek-gujarati text-white mb-3"><?php echo esc_html($cta_heading); ?></h2>
                        <p class="text-slate-300 text-sm max-w-xl"><?php echo esc_html($cta_desc); ?></p>
                    </div>
                    <div class="flex flex-col sm:flex-row gap-3 lg:justify-end">
                        <a href="<?php echo esc_url($cta_btn1_link['url']); ?>"<?php echo !empty($cta_btn1_link['target']) ? ' target="' . esc_attr($cta_btn1_link['target']) . '" rel="noopener noreferrer"' : ''; ?> class="inline-flex items-center justify-center gap-2 bg-primary text-white px-6 py-3 rounded-full text-sm font-semibold hover:bg-primary/90 transition-all hover:shadow-xl hover:-translate-y-0.5">
                            <i data-lucide="<?php echo esc_attr($cta_btn1_icon); ?>" class="w-4 h-4"></i>
                            <?php echo esc_html($cta_btn1_link['title']); ?>
                        </a>
                        <?php if (!empty($cta_btn2_link['url'])) : ?>
                        <a href="<?php echo esc_url($cta_btn2_link['url']); ?>"<?php echo !empty($cta_btn2_link['target']) ? ' target="' . esc_attr($cta_btn2_link['target']) . '" rel="noopener noreferrer"' : ''; ?> class="inline-flex items-center justify-center gap-2 bg-white/10 backdrop-blur-sm border border-white/30 text-white px-6 py-3 rounded-full text-sm font-semibold hover:bg-white/20 transition-all">
                            <i data-lucide="<?php echo esc_attr($cta_btn2_icon); ?>" class="w-4 h-4"></i>
                            <?php echo esc_html($cta_btn2_link['title']); ?>
                        </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <!-- Main footer grid (expanded) -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-6 lg:gap-8 mb-12">
                <!-- Column 1: About & contact -->
                <div class="lg:col-span-4 space-y-6">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="inline-block">
                        <img src="<?php echo esc_url($logo_url); ?>" 
                             alt="<?php echo esc_attr(get_bloginfo('name')); ?>" class="h-14 brightness-0 invert">
                    </a>
                    <p class="text-slate-400 text-sm">
                        <?php echo esc_html($about_text); ?>
                    </p>
                    <div class="flex items-start gap-4 p-5 rounded-2xl bg-white/5 border border-white/10 hover:border-primary/30 transition-colors">
                        <div class="mt-1">
                            <i data-lucide="map-pin" class="w-6 h-6 text-primary"></i>
                        </div>
                        <div>
                            <h4 class="text-white text-sm font-bold uppercase tracking-wide mb-1 font-anek-gujarati">Location</h4>
                            <p class="text-slate-400 text-sm"><?php echo esc_html($address); ?></p>
                        </div>
                    </div>
                </div>

                <!-- Column 2: Quick Links -->
                <div class="lg:col-span-2">
                    <h3 class="text-white text-sm font-bold uppercase tracking-widest mb-6 flex items-center gap-2 font-anek-gujarati">
                        <span class="w-1 h-5 bg-primary rounded-full"></span>
                        Quick Links
                    </h3>
                    <?php if ($quick_links) : ?>
                    <ul class="space-y-3">
                        <?php foreach ($quick_links as $item) :
                            $link = $item['link'] ?? null;
                            if (empty($link['url'])) continue;
                        ?>
                        <li><a href="<?php echo esc_url($link['url']); ?>"<?php echo !empty($link['target']) ? ' target="' . esc_attr($link['target']) . '" rel="noopener noreferrer"' : ''; ?> class="text-slate-400 hover:text-primary hover:translate-x-1 transition-all duration-300 inline-flex items-center gap-2 text-sm"><?php echo esc_html($link['title']); ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                    <?php endif; ?>
                </div>

                <!-- Column 3: Services -->
                <div class="lg:col-span-2">
                    <h3 class="text-white text-sm font-bold uppercase tracking-widest mb-6 flex items-center gap-2 font-anek-gujarati">
                        <span class="w-1 h-5 bg-primary rounded-full"></span>
                        Our Services
                    </h3>
                    <?php if ($services_links) : ?>
                    <ul class="space-y-3">
                        <?php foreach ($services_links as $item) :
                            $link = $item['link'] ?? null;
                            if (empty($link['url'])) continue;
                        ?>
                        <li><a href="<?php echo esc_url($link['url']); ?>"<?php echo !empty($link['target']) ? ' target="' . esc_attr($link['target']) . '" rel="noopener noreferrer"' : ''; ?> class="text-slate-400 text-sm hover:text-primary transition-colors"><?php echo esc_html($link['title']); ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                    <?php endif; ?>
                </div>

                <!-- Column 4: Contact & Hours -->
                <div class="lg:col-span-4">
                    <h3 class="text-white text-sm font-bold uppercase tracking-widest mb-6 flex items-center gap-2 font-anek-gujarati">
                        <span class="w-1 h-5 bg-primary rounded-full"></span>
                        Contact & Hours
                    </h3>
                    
                    <!-- Contact items -->
                    <div class="space-y-4 mb-6">
                        <div class="flex items-center gap-4 group">
                            <div class="w-12 h-12 rounded-full bg-white/5 border border-white/10 flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-white transition-all">
                                <i data-lucide="phone" class="w-5 h-5"></i>
                            </div>
                            <div>
                                <p class="text-xs text-slate-400 font-bold uppercase tracking-wider">Emergency</p>
                                <a href="tel:<?php echo esc_attr(preg_replace('/[^+0-9]/', '', $emerg_phone)); ?>" class="text-white font-semibold text-sm hover:text-primary transition"><?php echo esc_html($emerg_phone); ?></a>
                            </div>
                        </div>
                        <div class="flex items-center gap-4 group">
                            <div class="w-12 h-12 rounded-full bg-white/5 border border-white/10 flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-white transition-all">
                                <i data-lucide="phone" class="w-5 h-5"></i>
                            </div>
                            <div>
                                <p class="text-xs text-slate-400 font-bold uppercase tracking-wider">Appointment / Insurance</p>
                                <a href="tel:<?php echo esc_attr(preg_replace('/[^+0-9]/', '', $appt_phone)); ?>" class="text-white font-semibold text-sm hover:text-primary transition"><?php echo esc_html($appt_phone); ?></a> / <a href="tel:<?php echo esc_attr(preg_replace('/[^+0-9]/', '', $ins_phone)); ?>" class="text-white font-semibold text-sm hover:text-primary transition"><?php echo esc_html($ins_phone); ?></a>
                            </div>
                        </div>
                        <div class="flex items-center gap-4 group">
                            <div class="w-12 h-12 rounded-full bg-white/5 border border-white/10 flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-white transition-all">
                                <i data-lucide="mail" class="w-5 h-5"></i>
                            </div>
                            <div>
                                <p class="text-xs text-slate-400 font-bold uppercase tracking-wider">Email</p>
                                <a href="mailto:<?php echo esc_attr($email); ?>" class="text-white font-semibold text-sm hover:text-primary transition"><?php echo esc_html($email); ?></a>
                            </div>
                        </div>
                        <div class="flex items-center gap-4 group">
                            <div class="w-12 h-12 rounded-full bg-white/5 border border-white/10 flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-white transition-all">
                                <i data-lucide="phone" class="w-5 h-5"></i>
                            </div>
                            <div>
                                <p class="text-xs text-slate-400 font-bold uppercase tracking-wider">Fax</p>
                                <a href="tel:<?php echo esc_attr(preg_replace('/[^+0-9]/', '', $fax)); ?>" class="text-white font-semibold text-sm hover:text-primary transition"><?php echo esc_html($fax); ?></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Opening Hours -->
            <div class="bg-white/5 rounded-2xl p-5 border border-white/10 w-full">
                <h4 class="text-white font-bold mb-3 flex items-center gap-2 font-anek-gujarati"><i data-lucide="clock" class="w-5 h-5 text-primary"></i> Opening Hours</h4>
                <ul class="space-y-2 text-sm">
                    <?php if ($opening_hours) : ?>
                        <?php foreach ($opening_hours as $row) :
                            $sep_class = !empty($row['separator']) ? ' pt-2 border-t border-white/10' : '';
                            $time_class = 'text-white font-medium';
                            if ($row['highlight'] === 'accent') {
                                $time_class = 'text-accent font-medium';
                            } elseif ($row['highlight'] === 'primary') {
                                $time_class = 'text-primary font-bold';
                            }
                        ?>
                        <li class="flex justify-between<?php echo esc_attr($sep_class); ?>"><span class="text-slate-400"><?php echo esc_html($row['day']); ?></span><span class="<?php echo esc_attr($time_class); ?>"><?php echo esc_html($row['time']); ?></span></li>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <li class="flex justify-between"><span class="text-slate-400">Monday - Friday</span><span class="text-white font-medium">8:00 AM - 9:00 PM</span></li>
                        <li class="flex justify-between"><span class="text-slate-400">Saturday</span><span class="text-white font-medium">9:00 AM - 8:00 PM</span></li>
                        <li class="flex justify-between"><span class="text-slate-400">Sunday</span><span class="text-accent font-medium">Emergency Only</span></li>
                        <li class="flex justify-between pt-2 border-t border-white/10"><span class="text-slate-400">Emergency</span><span class="text-primary font-bold">24/7 Always Open</span></li>
                    <?php endif; ?>
                </ul>
            </div>

            <!-- Social links & copyright -->
            <div class="border-t border-white/10 pt-8 flex flex-col md:flex-row justify-between items-center gap-6">
                <div class="text-center md:text-left">
                    <p class="text-slate-200 text-sm">
                        <?php echo esc_html($copyright); ?>
                    </p>
                    <p class="text-slate-300 text-xs mt-1">
                        Designed & Developed By: <span class="text-slate-400"><?php echo esc_html($dev_text); ?></span>
                    </p>
                </div>
                
                <?php if ($social_links) : ?>
                <div class="flex items-center gap-4">
                    <?php foreach ($social_links as $link) : ?>
                    <a href="<?php echo esc_url($link['url']); ?>" target="_blank" rel="noopener noreferrer" class="w-11 h-11 rounded-full border border-white/10 bg-white/5 flex items-center justify-center text-slate-400 hover:bg-primary hover:text-white hover:border-primary transition-all hover:-translate-y-1">
                        <i data-lucide="<?php echo esc_attr($link['platform']); ?>" class="w-5 h-5"></i>
                    </a>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>
            </div>
            
            <!-- Transport note -->
            <div class="mt-6 text-xs text-slate-200">
                <p><?php echo esc_html($transport); ?></p>
            </div>
        </div>
        <!-- Disclaimer -->
        <div class="w-full bg-gray-800 border-t border-gray-700 py-4 px-4 relative z-10">
            <p class="text-white text-xs max-w-7xl px-4 mx-auto">
                <strong class="text-gray-200">Disclaimer:</strong> <?php echo esc_html($disclaimer); ?>
            </p>
        </div>
    </footer>

    <!-- Back to top button -->
    <a href="#" id="backToTop" class="fixed bottom-6 right-6 w-12 h-12 bg-primary text-white rounded-full flex items-center justify-center opacity-0 invisible transition-all shadow-lg z-50 hover:bg-primary/90 hover:-translate-y-1">
        <i data-lucide="arrow-up" class="w-5 h-5"></i>
    </a>

<?php wp_footer(); ?>
</body>
</html>
