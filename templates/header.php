<?php
    use Roots\Sage\Titles;
    $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), array(5600,1000), false, '');
?>
<nav class="navbar navbar-default">
	<div class="container-fluid">
        <?php
        if (has_nav_menu('header_navigation-left')) :
            wp_nav_menu([
                'theme_location' => 'header_navigation-left', 
                'menu_class' => 'nav navbar-nav hidden-xs',
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
                'menu_class' => 'nav navbar-nav hidden-xs navbar-right',
                'container' => false
            ]);
        endif;
        ?>

	</div>
</nav>
<div class="issue-container">
    <?php if (Titles\title() == "frontpage" || Titles\title() == "frontpage-about") : get_template_part('templates/issues'); endif; ?>
</div>