<?php
/**
 * Template Name: Front Page
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/frontpage/content', 'frontpage'); ?>
<?php endwhile; ?>
