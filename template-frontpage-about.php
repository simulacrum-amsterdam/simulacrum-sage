<?php
/**
 * Template Name: About Front Page
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/about/content', 'frontpage-about'); ?>
<?php endwhile;