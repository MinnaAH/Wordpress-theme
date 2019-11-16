<?php
/*
Template Name: Page
 */

get_header(); ?>

<div class="container my-4">
    <?php while ( have_posts() ) : the_post(); ?>
    <div class="content px-5 py-3">
        <?php the_content(); ?>
    </div>
    <?php endwhile; ?>
</div>

<?php get_footer(); ?>