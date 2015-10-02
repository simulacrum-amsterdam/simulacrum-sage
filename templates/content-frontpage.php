<?php use Roots\Sage\Titles; ?>

<div class="frontpage-blog">
	<h5 class="small-title">Nieuws:</h5>
	<?php $latest = new WP_Query('showposts=5&category_name=News'); ?>
	<?php while( $latest->have_posts() ) : $latest->the_post(); ?>
	<?php get_template_part('templates/content-frontpage-sub', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
	<?php endwhile; ?>
</div>
<div class="frontpage-issue">
	<h5 class="small-title"> Huidige Nummer: </h5>
	<?php $latest = new WP_Query('showposts=1&tag=jrg23-4'); ?>
	<?php Titles\debug_to_console( $latest ) ?>
	<?php while( $latest->have_posts() ) : $latest->the_post(); ?>
	<?php get_template_part('templates/content-frontpage-sub', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
	<?php endwhile; ?>
</div>



