<?php use Roots\Sage\Titles; ?>
<h6 class="short-description"><?= get_post_custom_values('frontpage__headline')[0]; ?></h6>

<div class="frontpage-header">
	<img class="simulacrum-logo" src="<?php bloginfo('template_directory'); ?>/dist/images/simulacrum-gif.gif" alt="">
</div>

<div>
	<?php $latest = new WP_Query(array(
	    'showposts' => 1,
	    'tag_slug__in' => "on-issue"
	)); 
	?>
	<?php while ($latest->have_posts()) : $latest->the_post(); ?>
		<h6 class="simulacrum-issue-subtext">Jaargang 24 nr. 2</h6>
		<a href="<?= the_permalink(); ?>"><h4 class="simulacrum-issue"><?= the_title(); ?></h4></a>		
	<?php endwhile; ?>
</div>


<div class="frontpage-post-container">
	<!-- Pages need to increase trough query var -->
	<?php $paged = ( get_query_var('page') ) ? get_query_var('page') : 1; ?>

	<?php 
		$latest = new WP_Query(array(
	        'posts_per_page' => 10,
	        'paged' => $paged,
	        'tag_slug__in' => "on-frontpage"
	    ));
	    $max_pages = $latest->max_num_pages;
    ?>

	<!-- Here the post template gets printed out -->
	<?php while ($latest->have_posts()) : $latest->the_post(); ?>
	<?php get_template_part('templates/frontpage/post', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
	<?php endwhile; ?>

	<!-- Post links -->
	<h6 class="frontpage-post-nav">
		<?php if ($paged !== 1){ ?>
			<a href="?page=<?php echo $paged - 1; ?>"><- Nieuwere posts</a>
		<?php } ?>
		<?php if ($paged && $paged < $max_pages){ ?>
			<a href="?page=<?php echo $paged + 1; ?> " ><span class="oudere-posts">Oudere posts -></span></a>
		<?php } ?>
	</h6>
</div>


