<?php
	$backgroundImageSrc = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');
	if (  has_post_thumbnail() == 1 && !has_tag('no-background', $post->ID)) { ?> 
	  	<div class="background-image-wrapper">
	      	<img src="<?php echo $backgroundImageSrc[0]; ?>" alt="">
	  	</div>
<?php } ?>

<div class="about">
	<div class="about__left">
		<div class="description">
			<h3><?= the_title(); ?></h3>
			<?= the_content(); ?>
		</div>
		<div class="people">
			<h3> Redactie </h3>
			<div class="people__people-container">
				

				<div class="people__person-container">
					<img class="people__person" src="<?php bloginfo('template_directory'); ?>/dist/images/fotos/portret-anne.jpg"/>
				</div><div class="people__person-container">
					<img class="people__person" src="<?php bloginfo('template_directory'); ?>/dist/images/fotos/portret-franziska.jpg"/>
				</div><div class="people__person-container">
					<img class="people__person" src="<?php bloginfo('template_directory'); ?>/dist/images/fotos/portret-frederike.jpg"/>
				</div><div class="people__person-container">
					<img class="people__person" src="<?php bloginfo('template_directory'); ?>/dist/images/fotos/portret-julia.jpg"/>
				</div><div class="people__person-container">
					<img class="people__person" src="<?php bloginfo('template_directory'); ?>/dist/images/fotos/portret-lindy.jpg"/>
				</div><div class="people__person-container">
					<img class="people__person" src="<?php bloginfo('template_directory'); ?>/dist/images/fotos/portret-maartje.jpg"/>
				</div><div class="people__person-container">
					<img class="people__person" src="<?php bloginfo('template_directory'); ?>/dist/images/fotos/portret-mylene.jpg"/>
				</div><div class="people__person-container">
					<img class="people__person" src="<?php bloginfo('template_directory'); ?>/dist/images/fotos/portret-querine.jpg"/>
				</div><div class="people__person-container">
					<img class="people__person" src="<?php bloginfo('template_directory'); ?>/dist/images/fotos/portret-sofia.jpg"/>
				</div><div class="people__person-container">
					<img class="people__person" src="<?php bloginfo('template_directory'); ?>/dist/images/fotos/portret-sofie.jpg"/>
				</div>
			</div>
		</div>
	</div>
	<div class="about__right">
		<div class="news">
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
			<?php get_template_part('templates/about/news-post', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
			<?php endwhile; ?>
			<?php wp_reset_query(); ?>
		</div>
		<div class="write">
			<h3><?= get_post_custom_values('about-second__header')[0]; ?></h3>
			<?= get_post_custom_values('about-second__content')[0]; ?>
		</div>
	</div>
</div>
