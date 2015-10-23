<?php use Roots\Sage\Titles; ?>

<div class="frontpage-container">
	<div class="post-container">
		<?php $excludeCatID = get_cat_ID('bekendmakingen'); ?>
		<?php $latest = new WP_Query(array(
            'showposts' => 10,
            'category__not_in' => $excludeCatID
        )); ?>
		<?php while ($latest->have_posts()) : $latest->the_post(); ?>
		<?php get_template_part('templates/frontpage/content-frontpage-post', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
		<?php endwhile; ?>
	</div>
	<div class="frontpage-current-issue">
		<img class="issue-image" src="<?php bloginfo('template_directory'); ?>/dist/images/Cover-OEF.jpg"/>
	</div>
</div>


