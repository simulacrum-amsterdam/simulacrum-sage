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
        
        <!-- current matrix = #0081C3 = rgb(0 129 195) = [0 * 255][0.50588235 * 255][0.7647059 * 255] -->
        <feColorMatrix type="matrix"
          values="0 0 0 0  0 
                  0.5058824 0 0 0  0  
                  0.7647059 0 0 0  0 
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
