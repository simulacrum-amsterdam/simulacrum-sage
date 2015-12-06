<?php use Roots\Sage\Titles; ?>
<?php $page = get_post($post->ID); ?>

<?php
	$backgroundImageSrc = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');
	if (  has_post_thumbnail() == 1 && !has_tag('no-background', $post->ID)) { ?> 
	  	<div class="background-image-wrapper">
	      	<img src="<?php echo $backgroundImageSrc[0]; ?>" alt="">
	  	</div>
<?php } ?>

<div class="about-container">
	<div class="about-description">
		<h3><?= the_title(); ?></h3>
		<?= the_content(); ?>
		<div class="about-people">
			<h3> Redactie </h3>
			<img src="<?php bloginfo('template_directory'); ?>/dist/images/fotos/portret-anne.jpg"/>
			<img src="<?php bloginfo('template_directory'); ?>/dist/images/fotos/portret-franziska.jpg"/>
			<img src="<?php bloginfo('template_directory'); ?>/dist/images/fotos/portret-frederike.jpg"/>
			<img src="<?php bloginfo('template_directory'); ?>/dist/images/fotos/portret-julia.jpg"/>
			<img src="<?php bloginfo('template_directory'); ?>/dist/images/fotos/portret-lindy.jpg"/>
			<img src="<?php bloginfo('template_directory'); ?>/dist/images/fotos/portret-maartje.jpg"/>
			<img src="<?php bloginfo('template_directory'); ?>/dist/images/fotos/portret-mylene.jpg"/>
			<img src="<?php bloginfo('template_directory'); ?>/dist/images/fotos/portret-querine.jpg"/>
			<img src="<?php bloginfo('template_directory'); ?>/dist/images/fotos/portret-sofia.jpg"/>
			<img src="<?php bloginfo('template_directory'); ?>/dist/images/fotos/portret-sofie.jpg"/>
		</div>
	</div>
	<div class="about-news">
		<h3> Nieuws </h3>

		<?php 
			function custom_excerpt_length($length) {
			  return 20;
			}

			add_filter('excerpt_length', 'custom_excerpt_length', 999);
		?>
		<?php $latest = new WP_Query('showposts=5&category_name=bekendmakingen'); ?>
		<?php while ($latest->have_posts()) : $latest->the_post(); ?>
		<?php get_template_part('templates/about/news-post', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
		<?php endwhile; ?>
		<?php wp_reset_query(); ?>
		<div class="about-write">
			<h3> Schrijven </h3>
			<p>De redactie van Simulacrum bestaat uit gemotiveerde studenten en net-afgestudeerden die zich vrijwillig inzetten voor het tijdschrift. Maak hieronder kennis met onze redactieleden door op de foto’s te klikken.</p>
			<p>Heb jij ook spannende ideeën voor de invulling van onze nummers, een passie voor kunst en taal en wil jij een netwerk opbouwen in de Amsterdamse kunstwereld? Stuur dan je CV en motivatie naar info@simulacrum.nl.</p>
			<h4>Contact</h4>
			<div class="contact-gegevens">
				<p>Stichting Simulacrum</p>
				<p>Turfdraagsterpad 9</p>
				<p>1012 XT Amsterdam</p>
		</div>
	</div>
	</div>
</div>
<div class="about-people-container">
	

</div>
	
