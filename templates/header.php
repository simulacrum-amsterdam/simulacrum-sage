<div class="layout__main-header">
  <!-- persentational logo -->
  <div class="main-logo-image" style="background-image: url( <?php bloginfo('template_directory'); ?>/dist/images/simulacrum-gif.gif ); background-repeat: no-repeat; background-size: contain; background-position: center center;"></div>
  <h1><?= the_title(); ?></h1>
  <div class="main-logo-description"><?php the_content(); ?></div>
  <!-- navigation -->
  <?php
    get_template_part('templates/navigation');
  ?>
</div>