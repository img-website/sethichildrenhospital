<?php
/**
 * Template Name: About Us
 * About Us page – sections loaded via template parts, content from ACF.
 */

get_header();

while (have_posts()) :
    the_post();
?>
<main id="main-content">
    <?php get_template_part('template-parts/about/hero'); ?>
    <?php get_template_part('template-parts/about/content'); ?>
    <?php get_template_part('template-parts/about/services'); ?>
    <?php get_template_part('template-parts/about/appointment-banner'); ?>
    <?php get_template_part('template-parts/about/team'); ?>
</main>
<?php
endwhile;
get_footer();
