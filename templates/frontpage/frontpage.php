<?php use Roots\Sage\Titles; ?>
<div class="frontpage-header">
	<img class="simulacrum-logo" src="<?php bloginfo('template_directory'); ?>/dist/images/logo-sim-designers.svg" alt="">
</div>
<div>
	<h1 class="simulacrum-issue">De Tourist</h1>		
</div>
<div class="post-container">
	<!-- Pages need to increase trough query var -->
	<?php $paged = ( get_query_var('page') ) ? get_query_var('page') : 1; ?>

	<!-- Here the Wordpress Loop is initiated -->
	<!-- Refactor to include tag, instead of exclude categories -->
	<?php $excludeCatID = get_cat_ID('nieuws'); ?>
	<?php $excludeCatIDTwo = get_cat_ID('nummers'); ?>
	<?php $excludeCatIDThree = get_cat_ID('call-for-papers'); ?>

	<?php $latest = new WP_Query(array(
        'posts_per_page' => 10,
        'paged' => $paged,
        'category__not_in' => array($excludeCatID, $excludeCatIDTwo, $excludeCatIDThree)
    )); ?>

	<!-- Here the post template gets printed out -->
	<?php while ($latest->have_posts()) : $latest->the_post(); ?>
	<?php get_template_part('templates/frontpage/post', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
	<?php endwhile; ?>

	<!-- Post links -->
	<h6>
		<?php if ($paged !== 1){ ?>
			<a href="?page=1"><- Nieuwere posts</a>
		<?php } ?>

		<a href="?page=2" ><span class="oudere-posts">Oudere posts -></span></a>
	</h6>
</div>


