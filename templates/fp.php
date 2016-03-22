<?php use Roots\Sage\Titles; ?>

<?php get_template_part('templates/fp-header'); ?>

<div class="layout__main">
	<!-- determine current page number -->
	<?php $paged = ( get_query_var('page') ) ? get_query_var('page') : 1; ?>
	<!-- query content -->
	<?php 
		$latest = new WP_Query(array(
	        'posts_per_page' => 5,
	        'paged' => $paged,
	        'tag_slug__in' => "on-frontpage"
	    ));
	    $max_pages = $latest->max_num_pages;
    ?>
	<?php while ($latest->have_posts()) : $latest->the_post(); ?>
	<?php get_template_part('templates/excerpt-fw', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
	<?php endwhile; ?>

	<!-- pagination -->
	<h6 class="pagination">
		<?php if ($paged !== 1){ ?>
			<a href="?page=<?php echo $paged - 1; ?>"><- Nieuwere posts</a>
		<?php } ?>
		<?php if ($paged && $paged < $max_pages){ ?>
			<a href="?page=<?php echo $paged + 1; ?> " >Oudere posts -></a>
		<?php } ?>
	</h6>
</div>