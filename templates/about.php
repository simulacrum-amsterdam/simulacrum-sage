<?php get_template_part('templates/header-feature'); ?>

<div class="sc-content">
	<h3 class="sc-content__title"><?= the_title(); ?></h3>
	<div class="sc-content__content-container"><?= the_content(); ?></div>
</div>

<?php get_template_part('templates/redactie'); ?>

<div class="sc-content">
	<h3> Nieuws </h3>
	<?php 
		function custom_excerpt_length($length) {
		  return 20;
		}

		add_filter('excerpt_length', 'custom_excerpt_length', 999);
	?>
	<?php $latest = new WP_Query(array(
        'posts_per_page' => 3,
        'tag_slug__in' => "on-about"
  	)); ?>

	<?php while ($latest->have_posts()) : $latest->the_post(); ?>
	<?php get_template_part('templates/excerpt-news', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
	<?php endwhile; ?>
	<?php wp_reset_query(); ?>
</div>

<div class="sc-content write">
	<h3><?= get_post_custom_values('about-second__header')[0]; ?></h3>
	<div class="sc-content__content-container"><?= get_post_custom_values('about-second__content')[0]; ?></div>
</div>
