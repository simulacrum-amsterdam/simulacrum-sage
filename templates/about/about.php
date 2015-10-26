<?php use Roots\Sage\Titles; ?>

<div class="about-news">
	<?php $latest = new WP_Query('showposts=5&category_name=bekendmakingen'); ?>
	<?php while ($latest->have_posts()) : $latest->the_post(); ?>
	<?php get_template_part('templates/about/news-post', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
	<?php endwhile; ?>
</div>
<div class="about-top-row">
	<div class="about">
		<h3>Over Simulacrum</h3>
		<p> Simulacrum is een wetenschappelijk tijdschrift voor kunst en cultuur, dat dient als laagdrempelig en kwalitatief publicatieplatform voor studenten en deskundigen uit het veld. </p>
		<p>	We brengen vier maal per jaar een nummer uit, iedere keer onder de noemer van een bepaald thema. De onderwerpen worden altijd benaderd vanuit verschillende disciplines binnen de kunst- en cultuurwetenschappen, en zowel in historisch als hedendaags perspectief geplaatst. De redactie bestaat uit studenten, veelal van de Universiteit van Amsterdam.</p> 
		<p>Interesse? Zoek ons op in de boekhandel, word abonnee, schrijf een bijdrage of verrijk de redactie!</p>
	</div>
	<div class="about-topics">
		<h3>Onderwerpen</h3>
		<?php
		if (has_nav_menu('about_navigation')) :
            wp_nav_menu([
                'theme_location' => 'about_navigation', 
                'menu_class' => '',
                'container' => false
            ]);
        endif;
        ?>
<!-- 		<h4>Call for papers</h4>
		<h4>Gids voor auteurs</h4>
		<h4>Wetenschappelijke process</h4>
		<h4>Contact informatie</h4>
		<h4>Advertentie beleid</h4>
		<h4>Privacy beleid</h4>
		<h4>Open Access / Licenties</h4> -->
	</div>
</div>
<div class="about-people-row">
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
	<div class="about-staff">
		<h3>Huidige Redactie</h3>		
		<img class="portret-current" src="<?php bloginfo('template_directory'); ?>/dist/images/fotos/portret-anne.jpg"/>
		<img class="single-member" src="<?php bloginfo('template_directory'); ?>/dist/images/fotos/portret-franziska.jpg"/>		
		<img class="portret-current" src="<?php bloginfo('template_directory'); ?>/dist/images/fotos/portret-frederike.jpg"/>		
		<img class="portret-current" src="<?php bloginfo('template_directory'); ?>/dist/images/fotos/portret-julia.jpg"/>		
		<img class="portret-current" src="<?php bloginfo('template_directory'); ?>/dist/images/fotos/portret-lindy.jpg"/>		
		<img class="portret-current" src="<?php bloginfo('template_directory'); ?>/dist/images/fotos/portret-maartje.jpg"/>		
		<img class="portret-current" src="<?php bloginfo('template_directory'); ?>/dist/images/fotos/portret-mylene.jpg"/>		
		<img class="portret-current" src="<?php bloginfo('template_directory'); ?>/dist/images/fotos/portret-querine.jpg"/>		
		<img class="portret-current" src="<?php bloginfo('template_directory'); ?>/dist/images/fotos/portret-sofia.jpg"/>		
		<img class="portret-current" src="<?php bloginfo('template_directory'); ?>/dist/images/fotos/portret-sofie.jpg"/>		
	</div>
</div>


