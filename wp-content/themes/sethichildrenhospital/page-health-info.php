<?php
/**
 * Template Name: Health Info
 * Health Information page – sections from ACF, template parts.
 */

get_header();

while (have_posts()) :
    the_post();
?>
<main id="main-content">
    <?php get_template_part('template-parts/health-info/hero'); ?>
    <?php get_template_part('template-parts/health-info/articles'); ?>
    <?php get_template_part('template-parts/health-info/quick-tips'); ?>
    <?php get_template_part('template-parts/health-info/appointment-banner'); ?>
</main>
<?php
endwhile;
get_footer();

