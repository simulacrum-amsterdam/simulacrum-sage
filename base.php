<?php

use Roots\Sage\Config;
use Roots\Sage\Wrapper;

?>

<?php $backgroundImageSrc = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');?>

<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <!--[if lt IE 9]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>

    <?php if ( is_single() ) { 
      echo '<div class="background-image-wrapper">';
      echo '<img src="<?php echo ' + $backgroundImageSrc[0]; + '">'; 
      echo '</div>';
    } ?>
    
     
    
    <?php
      get_template_part('templates/nav-side');
    ?>
    <div class="main-wrapper" role="document">
      <main class="main container-fluid content" role="main">
        <?php include Wrapper\template_path(); ?>
      </main><!-- /.main -->
    </div>
    <?php
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>
  </body>
</html>
