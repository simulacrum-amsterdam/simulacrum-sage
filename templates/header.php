<?php
    use Roots\Sage\Titles;
    $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), array(5600,1000), false, '');
?>
<nav class="navigation">
        <?php
        if (has_nav_menu('header_navigation-left')) :
            wp_nav_menu([
                'theme_location' => 'header_navigation-left', 
                'menu_class' => 'navigation-left hidden-xs',
                'container' => false
            ]);
        endif;
        ?>

		<div class="logo-container">
	        <a href="<?= esc_url(home_url('/')); ?>"><img class="small-logo" src="<?php bloginfo('template_directory'); ?>/dist/images/simulacrum-logo-small2.svg"/></a>
		</div>
		<?php
		if (has_nav_menu('header_navigation-right')) :
            wp_nav_menu([
                'theme_location' => 'header_navigation-right', 
                'menu_class' => 'navigation-right hidden-xs',
                'container' => false
            ]);
        endif;
        ?>
</nav>

    <?php if (Titles\title() == "frontpage" || Titles\title() == "frontpage-about") { 
        echo '<div class="issue-container hidden-xs">';
        get_template_part('templates/issues'); 
        echo '</div>';
    } ?>
