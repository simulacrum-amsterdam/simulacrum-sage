<?php
use Roots\Sage\Config;
use Roots\Sage\Wrapper;
?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
      <!-- main content -->
      <?php include Wrapper\template_path(); ?>
      
      <!-- footer -->
      <?php
        do_action('get_footer');
        get_template_part('templates/footer');
        wp_footer();
      ?>
  </body>
</html>
