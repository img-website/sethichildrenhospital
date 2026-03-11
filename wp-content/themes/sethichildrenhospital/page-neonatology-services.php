<?php
/**
 * Template Name: Neonatology Services
 * Neonatology Services page – sections from ACF, template parts.
 */

get_header();

while (have_posts()) :
    the_post();
?>
<main id="main-content">
    <?php get_template_part('template-parts/neonatology/hero'); ?>
    <?php get_template_part('template-parts/neonatology/gallery'); ?>
    <?php get_template_part('template-parts/neonatology/overview'); ?>
    <?php get_template_part('template-parts/neonatology/appointment-banner'); ?>
    <?php get_template_part('template-parts/neonatology/director'); ?>
</main>
<?php
endwhile;
get_footer();

