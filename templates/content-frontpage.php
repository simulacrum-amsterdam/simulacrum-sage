<?php use Roots\Sage\Titles; ?>

<div class="frontpage-blog">
	<h5 class="small-title">Nieuws en Blog:</h5>
	<?php $latest = new WP_Query('showposts=5&category_name=print'); ?>
	<?php while( $latest->have_posts() ) : $latest->the_post(); ?>
	<?php get_template_part('templates/content-frontpage-sub', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
	<?php endwhile; ?>
</div>
<div class="frontpage-issue">
	<h5 class="small-title"> Nummers: </h5>
	<?php $latest = new WP_Query('showposts=1&category_name=animation'); ?>
	<?php while( $latest->have_posts() ) : $latest->the_post(); ?>
	<?php the_content(); ?>
	<?php endwhile; ?>
</div>



