<?php
/**
 * Template Name: Issues Page
 */
?>

<?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/issues'); ?>
<?php endwhile;