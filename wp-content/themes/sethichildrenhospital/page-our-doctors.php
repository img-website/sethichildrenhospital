<?php
/**
 * Template Name: Our Doctors
 * Our Doctors page – sections from ACF, template parts.
 */

get_header();

while (have_posts()) :
    the_post();
?>
<main id="main-content">
    <?php get_template_part('template-parts/doctors/hero'); ?>
    <?php get_template_part('template-parts/doctors/appointment-banner'); ?>
    <?php get_template_part('template-parts/doctors/featured'); ?>
    <?php get_template_part('template-parts/doctors/list'); ?>
    <?php get_template_part('template-parts/doctors/visiting-faculty'); ?>
</main>
<?php
endwhile;
get_footer();
