<?php

use Roots\Sage\Config;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <svg class="filter-for-images">
      <filter id="monochrome" color-interpolation-filters="sRGB"
              x="0" y="0" height="100%" width="100%">
        <feColorMatrix type="matrix"
          values="0.5137 0 0 0  0 
                  0.6235 0 0 0  0  
                  1.0000 0 0 0  0 
                    0  0 0 1  0" />
      </filter>
    </svg>
    <div class="all-wrapper">
      <!--[if lt IE 9]>
        <div class="alert alert-warning">
          <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
        </div>
      <![endif]-->
      <?php
        do_action('get_header');
        get_template_part('templates/header');
      ?>
      <main class="main content" role="main">
        <?php include Wrapper\template_path(); ?>
      </main>
      <?php
        do_action('get_footer');
        get_template_part('templates/footer');
        wp_footer();
      ?>
    </div>
  </body>
</html>
