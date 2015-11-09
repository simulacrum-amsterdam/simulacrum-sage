<?php $includeCatID = get_cat_ID('call-for-papers'); ?>
<?php $latest = new WP_Query(array(
    'showposts' => 1,
    'cat' => $includeCatID
)); ?>
<?php while ($latest->have_posts()) : $latest->the_post(); ?>
<?php // get_template_part('templates/frontpage/issue', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
<?php endwhile; ?>

<div class="call-for-papers-text">
	<h3>CALL FOR</h3>
	<h3 class="call-papers">PAPERS</h3>
</div>

<span class="glyphicon glyphicon-menu-right call-for-papers-arrow" aria-hidden="true"></span>

<?php $includeCatID = get_cat_ID('nummers'); ?>
<?php $latest = new WP_Query(array(
    'showposts' => 4,
    'cat' => $includeCatID
)); ?>
<?php while ($latest->have_posts()) : $latest->the_post(); ?>
<?php get_template_part('templates/frontpage/issue', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
<?php endwhile; ?>

<h1 class="large-background">NUMMERS</h1>