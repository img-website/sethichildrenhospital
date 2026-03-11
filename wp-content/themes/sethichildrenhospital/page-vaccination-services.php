<?php
/**
 * Template Name: Vaccination Services
 * Vaccination Services page – sections from ACF, template parts.
 */

get_header();

while (have_posts()) :
    the_post();
?>
<main id="main-content">
    <?php get_template_part('template-parts/vaccination-services/hero'); ?>
    <?php get_template_part('template-parts/vaccination-services/gallery'); ?>
    <?php get_template_part('template-parts/vaccination-services/appointment-banner'); ?>
    <?php get_template_part('template-parts/vaccination-services/overview'); ?>
</main>
<?php
endwhile;
get_footer();

