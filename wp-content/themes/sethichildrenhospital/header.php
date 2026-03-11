<?php
/**
 * Header Template
 * Dynamic via: WP Custom Logo, ACF Options
 */

$logo_url      = sch_get_header_logo_url();
$site_name     = get_bloginfo('name');
$desktop_nav   = sch_option('header_desktop_nav', array());
$overlay_nav   = sch_option('header_overlay_nav', array());
$appt_link     = sch_option('header_overlay_appointment_link', array('title' => 'Appointment', 'url' => '#', 'target' => ''));
$emerg_link    = sch_option('header_overlay_emergency_link', array('title' => 'Emergency', 'url' => 'tel:+919549101235', 'target' => ''));
$contact_email = sch_option('header_contact_email', 'info@sethihospital.com');
$contact_phone = sch_option('header_contact_phone', '+91 98290 20015');
$social_links  = sch_get_field('header_social_links', 'option');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <style>
        ::-webkit-scrollbar { width: 0.375rem; }
        ::-webkit-scrollbar-track { background: #f1f5f9; }
        ::-webkit-scrollbar-thumb { background: #3d348b; border-radius: 0.25rem; }
    </style>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

    <!-- ======= HEADER (logo left, menus right) ======= -->
    <header id="main-header" class="fixed w-full top-0 z-40 transition-all duration-500 h-24 md:h-28 flex items-center border-b border-black/10 text-black bg-white">
        <div class="w-full max-w-7xl mx-auto px-4 flex justify-between items-center">
            <!-- logo (left) -->
            <a href="<?php echo esc_url(home_url('/')); ?>" id="brand-logo" class="flex items-center shrink-0">
                <img src="<?php echo esc_url($logo_url); ?>" 
                     alt="<?php echo esc_attr($site_name); ?>" class="h-10 md:h-16 lg:h-20 w-auto object-contain">
            </a>
            <!-- nav menus (right, desktop) -->
            <nav class="hidden lg:flex items-center space-x-8">
                <?php if ($desktop_nav) : foreach ($desktop_nav as $nav_item) :
                    $link = $nav_item['link'] ?? null;
                    if (empty($link['url'])) continue;
                ?>
                    <a href="<?php echo esc_url($link['url']); ?>"<?php echo !empty($link['target']) ? ' target="' . esc_attr($link['target']) . '" rel="noopener noreferrer"' : ''; ?> class="relative after:absolute after:w-0 after:h-0.5 after:-bottom-1 after:left-0 after:bg-current after:transition-all after:duration-300 after:ease-in-out hover:after:w-full text-sm font-medium tracking-wide uppercase"><?php echo esc_html($link['title']); ?></a>
                <?php endforeach; endif; ?>
                <button onclick="toggleMenu()" class="flex items-center gap-3 ml-4 pl-6 border-l border-current group">
                    <span class="text-xs font-bold tracking-widest uppercase">Menu</span>
                    <div class="space-y-1.5 group-hover:scale-110 transition">
                        <span class="block w-6 h-0.5 bg-current"></span>
                        <span class="block w-4 h-0.5 bg-current ml-auto group-hover:w-6"></span>
                    </div>
                </button>
            </nav>
            <!-- mobile: menu icon (right) -->
            <button onclick="toggleMenu()" class="lg:hidden flex items-center justify-center w-10 h-10 rounded-full hover:bg-black/5">
                <i data-lucide="menu" class="w-5 h-5"></i>
            </button>
        </div>
    </header>

    <!-- Fullscreen overlay menu -->
    <div id="full-menu" class="fixed inset-0 bg-[#0f172a] text-white z-50 transform -translate-y-full transition-transform duration-700 ease-[cubic-bezier(0.77,0,0.175,1)] flex flex-col overflow-y-auto">
        <div class="sticky top-0 py-5 flex justify-between px-4 sm:px-6 container mx-auto bg-[#0f172a] border-b border-[#00a650]/30">
            <span class="font-anek-gujarati text-xl sm:text-2xl italic text-gray-300">Navigation</span>
            <button onclick="toggleMenu()" class="group flex items-center gap-2 sm:gap-3 hover:text-[#00a650]">
                <span class="text-xs font-bold tracking-widest uppercase hidden sm:inline">Close</span>
                <div class="relative w-8 h-8 sm:w-10 sm:h-10 border border-[#3d348b]/40 rounded-full group-hover:border-[#00a650] group-hover:rotate-90 transition-all">
                    <i data-lucide="x" class="w-4 h-4 sm:w-5 sm:h-5 absolute inset-0 m-auto"></i>
                </div>
            </button>
        </div>
        <div class="flex-1 flex items-center justify-center container mx-auto px-4 py-8">
            <div class="grid md:grid-cols-2 gap-8 max-w-5xl w-full">
                <div>
                    <h3 class="text-xs font-bold tracking-[0.2em] text-gray-500 mb-6 uppercase">Explore</h3>
                    <?php if ($overlay_nav) : ?>
                    <ul class="space-y-4">
                        <?php foreach ($overlay_nav as $nav_item) :
                            $link = $nav_item['link'] ?? null;
                            if (empty($link['url'])) continue;
                        ?>
                        <li><a href="<?php echo esc_url($link['url']); ?>"<?php echo !empty($link['target']) ? ' target="' . esc_attr($link['target']) . '" rel="noopener noreferrer"' : ''; ?> class="block font-anek-gujarati text-3xl md:text-4xl hover:text-[#00a650] transition-all hover:translate-x-4"><?php echo esc_html($link['title']); ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                    <?php endif; ?>
                </div>
                <div class="md:border-l border-white/10 md:pl-12 space-y-8">
                    <div>
                        <h3 class="text-xs font-bold tracking-widest text-gray-500 mb-4">Quick actions</h3>
                        <ul class="space-y-3">
                            <li><a href="<?php echo esc_url($appt_link['url']); ?>"<?php echo !empty($appt_link['target']) ? ' target="' . esc_attr($appt_link['target']) . '" rel="noopener noreferrer"' : ''; ?> class="flex items-center gap-3 text-gray-300 hover:text-[#00a650]"><span class="w-1 h-6 bg-[#00a650]/40 group-hover:bg-[#00a650]"></span><?php echo esc_html($appt_link['title']); ?></a></li>
                            <li><a href="<?php echo esc_url($emerg_link['url']); ?>"<?php echo !empty($emerg_link['target']) ? ' target="' . esc_attr($emerg_link['target']) . '" rel="noopener noreferrer"' : ''; ?> class="flex items-center gap-3 text-gray-300 hover:text-[#00a650]"><span class="w-1 h-6 bg-[#00a650]/40"></span><?php echo esc_html($emerg_link['title']); ?></a></li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-xs font-bold tracking-widest text-gray-500 mb-3">Connect</h3>
                        <p class="text-gray-400 text-sm"><?php echo esc_html($contact_email); ?><br><?php echo esc_html($contact_phone); ?></p>
                        <?php if ($social_links) : ?>
                        <div class="flex gap-3 mt-4">
                            <?php foreach ($social_links as $link) : ?>
                            <a href="<?php echo esc_url($link['url']); ?>" target="_blank" rel="noopener noreferrer" class="w-10 h-10 border border-[#3d348b]/40 rounded-full flex items-center justify-center hover:bg-[#00a650] hover:text-white"><i data-lucide="<?php echo esc_attr($link['platform']); ?>" class="w-5 h-5"></i></a>
                            <?php endforeach; ?>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
