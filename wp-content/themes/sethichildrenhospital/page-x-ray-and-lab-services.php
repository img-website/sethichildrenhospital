<?php
/**
 * Template Name: X-Ray and Lab Services
 * X-Ray and Lab Services page – sections from ACF, template parts.
 */

get_header();

while (have_posts()) :
    the_post();
?>
<main id="main-content">
    <?php get_template_part('template-parts/xray-lab/hero'); ?>
    <?php get_template_part('template-parts/xray-lab/gallery'); ?>
    <?php get_template_part('template-parts/xray-lab/overview'); ?>
    <?php get_template_part('template-parts/xray-lab/appointment-banner'); ?>
</main>
<?php
endwhile;
get_footer();

