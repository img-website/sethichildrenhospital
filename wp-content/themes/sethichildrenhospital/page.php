<?php
/**
 * Default Page Template
 */

get_header(); ?>

<main id="main-content">
    <?php
    while (have_posts()) :
        the_post();
    ?>
        <article id="page-<?php the_ID(); ?>" <?php post_class(); ?>>
            <h1><?php the_title(); ?></h1>
            <div class="page-content">
                <?php the_content(); ?>
            </div>
        </article>
    <?php endwhile; ?>
</main>

<?php get_footer(); ?>
