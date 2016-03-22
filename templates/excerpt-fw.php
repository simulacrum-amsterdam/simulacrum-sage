<?php $backgroundImageSrc = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');?>

<article <?php post_class('excerpt-fw'); ?> >
  <a href="<?php the_permalink(); ?>">
  	<div class="excerpt-fw__image-container">
  		<img class="excerpt-fw__image"src="<?php echo $backgroundImageSrc[0]; ?>">
  	</div>
  </a>
  <div class="excerpt-fw__meta">
		<a href="<?php the_permalink(); ?>">
      <h3 class="excerpt-fw__title"><?php the_title(); ?></h3>
    </a>
		<h6 class="excerpt-fw__author"><?= get_the_author(); ?></h6>
  </div>
</article>
