<div class="issue-container">
	<?php 
		if (has_nav_menu('issue_navigation')) {
	            wp_nav_menu([
                'theme_location' => 'issue_navigation', 
                'menu_class' => 'issue-nav',
                'container' => false
            ]);
    	} 
    ?>
	<div class="hidden-xs">
		<?php $includeCatID = get_cat_ID('nummers'); ?>
		<?php $latest = new WP_Query(array(
		    'showposts' => 1,
		    'cat' => $includeCatID
		)); 
		?>
		<?php while ($latest->have_posts()) : $latest->the_post(); ?>
		<?php get_template_part('templates/frontpage/issue', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
		<?php endwhile; ?>
	</div>
</div>

