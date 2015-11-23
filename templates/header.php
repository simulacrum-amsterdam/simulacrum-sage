<?php
    use Roots\Sage\Titles;
    $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), array(5600,1000), false, '');
?>
<nav class="navigation">
    <div class="nav-item hidden-xs">
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
	<div class="logo-container">
        <a href="<?= esc_url(home_url('/')); ?>">
            <img class="small-logo" src="<?php bloginfo('template_directory'); ?>/dist/images/simulacrum-logo-small2.svg"/>
        </a>
        <h4 class="identificatie-simu">Wetenschappelijk&nbsp;tijdschrift&nbsp;voor&nbsp;kunst&nbsp;en&nbsp;cultuur</h4>
        <?php 
        if (has_nav_menu('issue_navigation')) {
                wp_nav_menu([
                'theme_location' => 'issue_navigation', 
                'menu_class' => 'center-nav',
                'container' => false
            ]);
        } 
        ?>
	</div>
	<div class="nav-item hidden-xs"> 
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

