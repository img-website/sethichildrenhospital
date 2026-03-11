<?php
/**
 * Template Name: Contact Us
 * Contact Us page – sections from ACF, template parts.
 */

get_header();
while (have_posts()) : the_post(); ?>
<main id="main-content">
    <?php get_template_part('template-parts/contact-us/hero'); ?>
    <?php get_template_part('template-parts/contact-us/quick-banner'); ?>
    <?php get_template_part('template-parts/contact-us/contact-section'); ?>
    <?php get_template_part('template-parts/contact-us/map'); ?>
</main>
<?php endwhile;
get_footer();
