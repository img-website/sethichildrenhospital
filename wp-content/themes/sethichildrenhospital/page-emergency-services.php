<?php
/**
 * Template Name: Emergency Services
 * Emergency Services page – sections from ACF, template parts.
 */

get_header();

while (have_posts()) :
    the_post();
?>
<main id="main-content">
    <?php get_template_part('template-parts/emergency-services/hero'); ?>
    <?php get_template_part('template-parts/emergency-services/gallery'); ?>
    <?php get_template_part('template-parts/emergency-services/emergency-banner'); ?>
    <?php get_template_part('template-parts/emergency-services/overview'); ?>
</main>
<?php
endwhile;
get_footer();
