<nav class="layout__navigation">
    <?php
    if (has_nav_menu('main-nav')) :
        wp_nav_menu([
            'theme_location' => 'main-nav', 
            'menu_class' => 'main-nav',
            'container' => false
        ]);
    endif;
    ?>
</nav>


