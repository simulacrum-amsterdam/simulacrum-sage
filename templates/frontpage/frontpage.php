<?php use Roots\Sage\Titles; ?>

<!-- Frontpage header and presentational logo -->
<div class="layout__frontpage-header">
	<img class="logo-big" src="<?php bloginfo('template_directory'); ?>/dist/images/simulacrum-gif.gif" alt="">
	<h1 class="logo-description"><?= the_title(); ?></h1>
	<?php the_content(); ?>
	</div>
</div>

<!-- navigation -->
<?php
  do_action('get_header');
  get_template_part('templates/header');
?>

<div class="layout__main">

	<!-- Conditional to determine page -->
	<?php $paged = ( get_query_var('page') ) ? get_query_var('page') : 1; ?>

	<!-- Query for main content -->
	<?php 
		$latest = new WP_Query(array(
	        'posts_per_page' => 10,
	        'paged' => $paged,
	        'tag_slug__in' => "on-frontpage"
	    ));
	    $max_pages = $latest->max_num_pages;
    ?>
	<?php while ($latest->have_posts()) : $latest->the_post(); ?>
	<?php get_template_part('templates/frontpage/post', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
	<?php endwhile; ?>

	<!-- Pagination -->
	<h6 class="frontpage-post-nav">
		<?php if ($paged !== 1){ ?>
			<a href="?page=<?php echo $paged - 1; ?>"><- Nieuwere posts</a>
		<?php } ?>
		<?php if ($paged && $paged < $max_pages){ ?>
			<a href="?page=<?php echo $paged + 1; ?> " ><span class="oudere-posts">Oudere posts -></span></a>
		<?php } ?>
	</h6>

</div>


