<div class="issue-container">
	<?php $includeCatID = get_cat_ID('nummers'); ?>
	<?php $latest = new WP_Query(array(
	    'showposts' => 1,
	    'cat' => $includeCatID
	)); 
	?>
	<h4 class="abonneren">Abonneren</h4>
	<?php while ($latest->have_posts()) : $latest->the_post(); ?>
	<?php get_template_part('templates/frontpage/issue', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
	<?php endwhile; ?>
</div>

