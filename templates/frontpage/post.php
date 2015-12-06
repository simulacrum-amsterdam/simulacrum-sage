<?php $backgroundImageSrc = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');?>

<article <?php post_class('post'); ?> >
    <a href="<?php the_permalink(); ?>">
    	<div class="post-tumbnail">
    		<img src="<?php echo $backgroundImageSrc[0]; ?>">
    	</div>
    </a>
    <div class="frontpage-post-content">
    	<header>
      		<h4 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
    		<h6 class="byline author vcard"><?= __('', 'sage'); ?><?= get_the_author(); ?></h6>
    	</header>
        <div class="entry-summary">
           <!-- <?php echo the_excerpt(); ?> -->
        </div>
    </div>
</article>
