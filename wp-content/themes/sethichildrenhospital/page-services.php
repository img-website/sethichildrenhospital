<?php
/**
 * Template Name: Services
 * Services page – sections from ACF, template parts.
 */

get_header();

while (have_posts()) :
    the_post();
?>
<main id="main-content">
    <?php get_template_part('template-parts/services/hero'); ?>
    <?php get_template_part('template-parts/services/grid'); ?>
    <?php get_template_part('template-parts/services/appointment-banner'); ?>
    <?php get_template_part('template-parts/services/why-choose'); ?>
    <?php get_template_part('template-parts/services/highlights'); ?>
</main>
<?php
endwhile;
get_footer();
