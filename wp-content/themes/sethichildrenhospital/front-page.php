<?php
/**
 * Front Page Template (Homepage)
 * Corresponds to: html-template/index.html
 *
 * Each section is a separate template part for maintainability.
 * ACF fields are organized in section-wise tabs under "Homepage Sections".
 */

get_header(); ?>

<main id="main-content">

    <?php // Section 1: Hero Slider ?>
    <?php get_template_part('template-parts/home/hero-slider'); ?>

    <?php // Section 2: Appointment Banner ?>
    <?php get_template_part('template-parts/home/appointment-banner'); ?>

    <?php // Section 3: Mission & Overview ?>
    <?php get_template_part('template-parts/home/mission'); ?>

    <?php // Section 4: Legacy & Vision ?>
    <?php get_template_part('template-parts/home/legacy'); ?>

    <?php // Section 5: Core Values ?>
    <?php get_template_part('template-parts/home/core-values'); ?>

    <?php // Section 6: Health Tips ?>
    <?php get_template_part('template-parts/home/health-tips'); ?>

    <?php // Section 7: Emergency Services ?>
    <?php get_template_part('template-parts/home/emergency-services'); ?>

    <?php // Section 8: CTA (Call to Action) ?>
    <?php get_template_part('template-parts/home/cta'); ?>

    <?php // Section 9: Our Doctors / Team ?>
    <?php get_template_part('template-parts/home/team'); ?>

</main>

<?php get_footer(); ?>
