<?php
    use Roots\Sage\Titles;
    $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), array(5600,1000), false, '');
?>
<nav class="navigation">
    <div class="nav-item">
        <?php
        if (has_nav_menu('header_navigation-left')) :
            wp_nav_menu([
                'theme_location' => 'header_navigation-left', 
                'menu_class' => 'nav-ul',
                'container' => false
            ]);
        endif;
        ?>
    </div>
    <!-- <h6>Wetenschappelijk tijdschrift voor kunst en cultuur</h6> -->
	<div class="nav-item"> 
        <?php
		if (has_nav_menu('header_navigation-right')) :
            wp_nav_menu([
                'theme_location' => 'header_navigation-right',
                'menu_class' => 'nav-ul, nav-right',
                'container' => false
            ]);
        endif;
        ?>
    </div>
</nav>


