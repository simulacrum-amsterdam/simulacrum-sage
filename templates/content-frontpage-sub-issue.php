<article <?php post_class(); ?>>
	<header>
  	<h4 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
	</header>
	<div class="entry-summary">
    	<?php echo the_excerpt(); ?>
  </div>
</article>
