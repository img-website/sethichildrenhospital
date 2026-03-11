<?php
/**
 * Search Results Template
 */

get_header(); ?>

<main id="main-content">
    <h1><?php printf('Search Results for: %s', get_search_query()); ?></h1>

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
        echo '<p>No results found. Try a different search.</p>';
    endif;
    ?>
</main>

<?php get_footer(); ?>
