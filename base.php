<?php
use Roots\Sage\Config;
use Roots\Sage\Wrapper;
?>

<!doctype html>
<html class="layout__html" <?php language_attributes(); ?>>
    <?php get_template_part('templates/head'); ?>
  <body <?php body_class('layout__body'); ?>>
      <!-- main content -->
        <?php require Wrapper\template_path(); ?>
      
      <!-- footer -->
        <?php
        do_action('get_footer');
        get_template_part('templates/footer');
        wp_footer();
        ?>
  </body>
</html>
