<?php use Roots\Sage\Titles; ?>

<div class="layout__frontpage-header">
	<!-- persentational logo -->
	<div class="fp-logo-image" style="background-image: url( <?php bloginfo('template_directory'); ?>/dist/images/simulacrum-gif.gif ); background-repeat: no-repeat; background-size: contain; background-position: center center;"></div>
	<h1 class="fp-logo-heading"><?= the_title(); ?></h1>
	<div class="fp-logo-description"><?php the_content(); ?></div>
	<!-- navigation -->
	<?php
	  get_template_part('templates/navigation');
	?>
</div>

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
	<?php get_template_part('templates/frontpage/post', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
	<?php endwhile; ?>

	<!-- pagination -->
	<h6 class="fp-pagination">
		<?php if ($paged !== 1){ ?>
			<a href="?page=<?php echo $paged - 1; ?>"><- Nieuwere posts</a>
		<?php } ?>
		<?php if ($paged && $paged < $max_pages){ ?>
			<a href="?page=<?php echo $paged + 1; ?> " ><span class="fp-pagination__old">Oudere posts -></span></a>
		<?php } ?>
	</h6>

</div>


