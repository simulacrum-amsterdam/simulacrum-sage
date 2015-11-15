<?php use Roots\Sage\Titles; ?>
<?php $page = get_post($post->ID); ?>
<div class="about-container">
	<div class="about-news">
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
	</div>
	<div class="about-text">
		<h3><?= the_title(); ?></h3>
		<?= the_content(); ?>
	</div>
	<div class="about-people">
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
	<div class="about-topics">
		<h3>Belangrijke onderwerpen</h3>
		<?php
		if (has_nav_menu('about_navigation')) :
            wp_nav_menu([
                'theme_location' => 'about_navigation', 
                'menu_class' => '',
                'container' => false
            ]);
        endif;
        ?>
	</div>
</div>





<!-- <div class="about-top-row">
	
</div> -->
<!-- <div class="about-people-row">
	<div class="about-editorial">
		<h3>Redactie</h3>
		<p>De redactie van Simulacrum bestaat uit gemotiveerde studenten en net-afgestudeerden die zich vrijwillig inzetten voor het tijdschrift. Maak hieronder kennis met onze redactieleden door op de foto’s te klikken.</p>
		<p>Heb jij ook spannende ideeën voor de invulling van onze nummers, een passie voor kunst en taal en wil jij een netwerk opbouwen in de Amsterdamse kunstwereld? Stuur dan je CV en motivatie naar info@simulacrum.nl.</p>
		<div class="contact-gegevens">
			<h4>Postadres</h4>
			<p>Stichting Simulacrum</p>
			<p>Turfdraagsterpad 9</p>
			<p>1012 XT Amsterdam</p>
		</div>
	</div>
</div> -->


