<?php $backgroundImageSrc = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');?>

<article <?php post_class('fp-post'); ?> >
  <a href="<?php the_permalink(); ?>">
  	<div class="fp-post__image-container">
  		<img class="fp-post__image"src="<?php echo $backgroundImageSrc[0]; ?>">
  	</div>
  </a>
  <div class="fp-post__meta">
		<a href="<?php the_permalink(); ?>">
      <h3 class="fp-post__title"><?php the_title(); ?></h3>
    </a>
		<h6 class="fp-post__author"><?= get_the_author(); ?></h6>
  </div>
</article>
