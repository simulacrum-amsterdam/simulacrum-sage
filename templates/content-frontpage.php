<?php use Roots\Sage\Titles; ?>

<div class="frontpage-news">
	<h5 class="small-title">Nieuws:</h5>
	<?php $latest = new WP_Query('showposts=5&category_name=News'); ?>
	<?php while ($latest->have_posts()) : $latest->the_post(); ?>
	<?php get_template_part('templates/content-frontpage-sub-news', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
	<?php endwhile; ?>
</div>
<div class="frontpage-issue">
	<div class="frontpage-current-issue">
		<h5 class="small-title"> Huidige Nummer: </h5>
		<img class="issue-image" src="<?php bloginfo('template_directory'); ?>/dist/images/Cover-OEF.jpg"/>
		<h1>OEF!</h1>
		<p> Dit geweldige nieuwe nummer verkent Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa deserunt adipisci tenetur nostrum a libero, et fugit magnam cum. Sunt odio numquam quas earum beatae quaerat commodi, accusamus ducimus velit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad nisi obcaecati molestiae dignissimos, assumenda nemo fuga tempore enim deleniti consequatur animi fugiat doloremque sit natus ullam adipisci perferendis nam incidunt.</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis voluptatem, fuga voluptas velit fugiat modi iusto inventore! Eligendi recusandae optio tenetur, blanditiis, voluptatibus sed quas ut enim similique nostrum explicabo.</p>
	</div>
	<div class="in-between"></div>
	<div class="post-container">
		<h5 class="small-title"> Artikelen: </h5>
		<?php $latest = new WP_Query('showposts=5&tag=jrg23-4'); ?>
		<?php while ($latest->have_posts()) : $latest->the_post(); ?>
		<?php get_template_part('templates/content-frontpage-sub-issue', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
		<?php endwhile; ?>
	</div>
</div>
<div class="frontpage-old-issues">
	<h5 class="small-title"> Oudere nummers: </h5>
	<div class="single-issue">
		<img class="issue-image" src="<?php bloginfo('template_directory'); ?>/dist/images/Cover-OEF.jpg"/>
		<div class="single-issue-text">
			<h4>Let's get digital</h4>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis voluptatem, fuga voluptas velit fugiat modi iusto inventore! Eligendi recusandae optio tenetur, blanditiis, voluptatibus sed quas ut enim similique nostrum explicabo.</p>
		</div>
	</div>
	<div class="single-issue">
		<img class="issue-image" src="<?php bloginfo('template_directory'); ?>/dist/images/Cover-OEF.jpg"/>
		<div class="single-issue-text">
			<h4>Waanzin</h4>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis voluptatem, fuga voluptas velit fugiat modi iusto inventore! Eligendi recusandae optio tenetur, blanditiis, voluptatibus sed quas ut enim similique nostrum explicabo.</p>
		</div>
	</div>
</div>


