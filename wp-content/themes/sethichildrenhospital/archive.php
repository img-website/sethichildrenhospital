<?php
/**
 * Archive Template (category, tag, date archives)
 */

get_header(); ?>

<main id="main-content">
    <h1><?php the_archive_title(); ?></h1>

    <?php
    if (have_posts()) :
        while (have_posts()) :
            the_post();
        ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <div class="post-excerpt">
                    <?php the_excerpt(); ?>
                </div>
            </article>
        <?php endwhile;

        the_posts_pagination();
    else :
        echo '<p>No posts found.</p>';
    endif;
    ?>
</main>

<?php get_footer(); ?>
