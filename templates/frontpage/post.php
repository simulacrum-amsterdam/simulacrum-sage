<?php $backgroundImageSrc = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');?>

<article <?php post_class('post'); ?> >
    <div class="post-tumbnail" style="background-image: url(<?php echo $backgroundImageSrc[0]; ?>);"></div>
	<header>
  		<h4 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
		<p class="byline author vcard"><?= __('', 'sage'); ?><?= get_the_author(); ?></p>
	</header>
    <div class="entry-summary">
        <!-- <?php echo the_excerpt(); ?> -->
    </div>
</article>
