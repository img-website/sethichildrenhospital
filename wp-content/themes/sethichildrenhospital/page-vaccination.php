<?php
/**
 * Template Name: Vaccination
 * Vaccination page – sections from ACF, template parts.
 */

get_header();

while (have_posts()) :
    the_post();
?>
<main id="main-content">
    <?php get_template_part('template-parts/vaccination/hero'); ?>
    <?php get_template_part('template-parts/vaccination/table'); ?>
    <?php get_template_part('template-parts/vaccination/appointment-banner'); ?>
    <?php get_template_part('template-parts/vaccination/faq'); ?>
    <?php get_template_part('template-parts/vaccination/services'); ?>
</main>
<?php
endwhile;
get_footer();

