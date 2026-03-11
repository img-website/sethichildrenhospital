<?php
/**
 * 404 Error Page Template
 */

get_header(); ?>

<main id="main-content">
    <section class="error-404">
        <h1>404 - Page Not Found</h1>
        <p>The page you are looking for does not exist.</p>
        <a href="<?php echo esc_url(home_url('/')); ?>">Go Back Home</a>
    </section>
</main>

<?php get_footer(); ?>
