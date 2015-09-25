<?php use Roots\Sage\Titles; ?>

<div class="frontpage-header">
	<?php the_content(); ?>
</div>

<div class="frontpage-blog">
	<h1>News and blog</h1>
	<?php $latest = new WP_Query('showposts=5&category_name=print'); ?>
	<?php while( $latest->have_posts() ) : $latest->the_post(); ?>
	<?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
	<?php endwhile; ?>
</div>
<div class="frontpage-issue">
	<h1> Issues</h1>
	<?php $latest = new WP_Query('showposts=5&category_name=animation'); ?>
	<?php while( $latest->have_posts() ) : $latest->the_post(); ?>
	<?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
	<?php endwhile; ?>
</div>



