<?php
/**
 * Template Name: Super Speciality Clinics
 * Super Speciality Clinics page – sections from ACF, template parts.
 */

get_header();

while (have_posts()) :
    the_post();
?>
<main id="main-content">
    <?php get_template_part('template-parts/super-clinics/hero'); ?>
    <?php get_template_part('template-parts/super-clinics/gallery'); ?>
    <?php get_template_part('template-parts/super-clinics/overview'); ?>
    <?php get_template_part('template-parts/super-clinics/schedule'); ?>
    <?php get_template_part('template-parts/super-clinics/appointment-banner'); ?>
    <?php get_template_part('template-parts/super-clinics/specialists'); ?>
</main>
<?php
endwhile;
get_footer();

