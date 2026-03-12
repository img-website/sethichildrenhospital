<?php
/**
 * Default Page Template
 * Used for Privacy Policy, Terms, etc. – theme-consistent hero + content layout.
 */

get_header();

while (have_posts()) :
    the_post();
    $page_title = get_the_title();
?>
<main id="main-content">
    <!-- Hero / breadcrumb (theme style) -->
    <section class="relative pt-28 lg:pt-32 pb-10 md:pb-12 lg:pb-16 bg-gradient-to-br from-blue-50 via-white to-green-200 overflow-hidden">
        <div class="absolute inset-0 opacity-20">
            <div class="absolute top-20 right-20 w-64 h-64 bg-primary/20 rounded-full blur-3xl"></div>
            <div class="absolute bottom-20 left-20 w-80 h-80 bg-secondary/10 rounded-full blur-3xl"></div>
        </div>
        <div class="max-w-7xl mx-auto px-4 relative z-10 flex flex-col gap-8">
            <div class="flex items-center gap-2 text-xs md:text-sm text-gray-600 mb-4" data-aos="fade-up" data-aos-duration="600">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="hover:text-primary transition-colors flex items-center gap-1">
                    <i data-lucide="home" class="w-4 h-4"></i>
                    <span><?php esc_html_e('Home', 'sethichildrenhospital'); ?></span>
                </a>
                <i data-lucide="chevron-right" class="w-4 h-4 text-gray-400"></i>
                <span class="text-primary font-medium"><?php echo esc_html($page_title); ?></span>
            </div>
            <div class="max-w-3xl" data-aos="fade-up" data-aos-duration="700" data-aos-delay="100">
                <h1 class="text-3xl md:text-4xl lg:text-5xl xl:text-6xl font-bold font-anek-gujarati text-gray-900 leading-tight">
                    <?php echo esc_html($page_title); ?>
                </h1>
            </div>
        </div>
    </section>

    <!-- Page content -->
    <section class="overflow-hidden py-12 md:py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <article id="page-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div class="page-content sch-page-content">
                    <?php the_content(); ?>
                </div>
            </article>
        </div>
    </section>
</main>
<?php
endwhile;
get_footer();
