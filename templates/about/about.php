<?php
	$backgroundImageSrc = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');
	if (  has_post_thumbnail() == 1 && !has_tag('no-background', $post->ID)) { ?> 
	  	<div class="background-image-wrapper">
	      	<img src="<?php echo $backgroundImageSrc[0]; ?>" alt="">
	  	</div>
<?php } ?>

<div class="about-container">
	<div class="about-left">
		<div class="about-left__description">
			<h3><?= the_title(); ?></h3>
			<?= the_content(); ?>
		</div>
		<div class="about-left__people">
			<h3> Redactie </h3>
			<img class="person" src="<?php bloginfo('template_directory'); ?>/dist/images/fotos/portret-anne.jpg"/>
			<img class="person" src="<?php bloginfo('template_directory'); ?>/dist/images/fotos/portret-franziska.jpg"/>
			<img class="person" src="<?php bloginfo('template_directory'); ?>/dist/images/fotos/portret-frederike.jpg"/>
			<img class="person" src="<?php bloginfo('template_directory'); ?>/dist/images/fotos/portret-julia.jpg"/>
			<img class="person" src="<?php bloginfo('template_directory'); ?>/dist/images/fotos/portret-lindy.jpg"/>
			<img class="person" src="<?php bloginfo('template_directory'); ?>/dist/images/fotos/portret-maartje.jpg"/>
			<img class="person" src="<?php bloginfo('template_directory'); ?>/dist/images/fotos/portret-mylene.jpg"/>
			<img class="person" src="<?php bloginfo('template_directory'); ?>/dist/images/fotos/portret-querine.jpg"/>
			<img class="person" src="<?php bloginfo('template_directory'); ?>/dist/images/fotos/portret-sofia.jpg"/>
			<img class="person" src="<?php bloginfo('template_directory'); ?>/dist/images/fotos/portret-sofie.jpg"/>
		</div>
	</div>
	<div class="about-right"></div>
		<div class="about-right__news">
			<h3> Nieuws </h3>
			<?php 
				function custom_excerpt_length($length) {
				  return 20;
				}

				add_filter('excerpt_length', 'custom_excerpt_length', 999);
			?>
			<?php $latest = new WP_Query('showposts=3&category_name=bekendmakingen'); ?>
			<?php while ($latest->have_posts()) : $latest->the_post(); ?>
			<?php get_template_part('templates/about/news-post', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
			<?php endwhile; ?>
			<?php wp_reset_query(); ?>
		</div>
		<div class="about-right__write">
			<h3><?= get_post_custom_values('second_page_header')[0]; ?></h3>
			<?= get_post_custom_values('second_page_content')[0]; ?>
		</div>
	</div>
</div>
