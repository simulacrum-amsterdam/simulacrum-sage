<?php use Roots\Sage\Titles; ?>

<div class="frontpage-container">
	<div class="post-container">
		<?php $excludeCatID = get_cat_ID('bekendmakingen'); ?>
		<?php $excludeCatIDTwo = get_cat_ID('nummers'); ?>
		<?php $latest = new WP_Query(array(
            'showposts' => 10,
            'category__not_in' => array($excludeCatID, $excludeCatIDTwo)
        )); ?>
		<h1 class="large-background-blog">BLOG</h1>
		<?php while ($latest->have_posts()) : $latest->the_post(); ?>
		<?php get_template_part('templates/frontpage/post', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
		<?php endwhile; ?>
	</div>
</div>


