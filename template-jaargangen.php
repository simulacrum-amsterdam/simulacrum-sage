<?php
/**
 * Template Name: Jaargangen Page
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/jaargangen'); ?>
<?php endwhile;