<header class="banner" role="banner">
  <div class="container header-nav-container">
    <a class="brand" href="<?= esc_url(home_url('/')); ?>"><img class="main-logo hidden-xs" src="<?php bloginfo('template_directory'); ?>/dist/images/logozwart-edged.svg"/></a>
    <a href="<?= esc_url(home_url('/')); ?>"><button class="btn menu-button">MENU</button></a>
    <!-- <a class="brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a> -->

    <nav role="navigation">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
      endif;
      ?>
    </nav>
  </div>
</header>
