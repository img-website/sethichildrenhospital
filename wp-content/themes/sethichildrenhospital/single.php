<?php
/**
 * Single Post Template
 */

get_header(); ?>

<main id="main-content">
    <?php
    while (have_posts()) :
        the_post();
    ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <h1><?php the_title(); ?></h1>
            <div class="post-meta">
                <span><?php echo get_the_date(); ?></span>
                <span><?php the_author(); ?></span>
            </div>
            <div class="post-content">
                <?php the_content(); ?>
            </div>
        </article>
    <?php endwhile; ?>
</main>

<?php get_footer(); ?>
