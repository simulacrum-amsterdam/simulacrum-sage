<aside class="nav-side" role="banner">
    <div class="wrap-fixed">
      <div class="nav-top">
        <p class="menu-button">MENU</p>
      </div>    
    <!-- this div contains the nav menu, and it out of view on standard sizes -->
      <div class="header-left">
        <nav class="navbar navbar-default" role="navigation">
	        <?php
	        if (has_nav_menu('primary_navigation')) :
	          wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
	        endif;
	        ?>
      	</nav>
      </div>
      <!-- this div contains the logo and the login button -->
      <div class="header-right">
        <a href="<?= esc_url(home_url('/')); ?>"><img class="main-logo hidden-xs" src="<?php bloginfo('template_directory'); ?>/dist/images/logozwart-edged.svg"/></a>
      </div>
    </div>
</aside>