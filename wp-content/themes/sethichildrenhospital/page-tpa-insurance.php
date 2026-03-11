<?php
/**
 * Template Name: Insurance & TPA
 * Insurance & TPA page – sections from ACF, template parts.
 */

get_header();

while (have_posts()) :
    the_post();
?>
<main id="main-content">
    <?php get_template_part('template-parts/insurance/hero'); ?>
    <?php get_template_part('template-parts/insurance/contact-banner'); ?>
    <?php get_template_part('template-parts/insurance/stats-and-partners'); ?>
    <?php get_template_part('template-parts/insurance/support'); ?>
</main>
<?php
endwhile;
get_footer();

