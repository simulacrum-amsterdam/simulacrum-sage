<?php
/**
 * Template Name: News Page
 */
?>

<?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/newspage'); ?>
<?php endwhile;