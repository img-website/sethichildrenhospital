<?php
/**
 * Template Name: Pediatric Intensive Care (PICU)
 * PICU page – sections from ACF, template parts.
 */

get_header();

while (have_posts()) :
    the_post();
?>
<main id="main-content">
    <?php get_template_part('template-parts/picu/hero'); ?>
    <?php get_template_part('template-parts/picu/gallery'); ?>
    <?php get_template_part('template-parts/picu/overview'); ?>
    <?php get_template_part('template-parts/picu/appointment-banner'); ?>
    <?php get_template_part('template-parts/picu/services'); ?>
    <?php get_template_part('template-parts/picu/director'); ?>
</main>
<?php
endwhile;
get_footer();

