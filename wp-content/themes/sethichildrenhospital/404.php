<?php
/**
 * 404 Template
 * Content is dynamic from Sethi Hospital → 404 Page in admin.
 */

get_header();
?>
<main id="main-content" class="page-404">
    <?php get_template_part('template-parts/404/content'); ?>
</main>
<?php
get_footer();
