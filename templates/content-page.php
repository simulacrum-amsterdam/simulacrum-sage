<?php
  $backgroundImageSrc = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');
  if ( has_post_thumbnail() == 1 && !has_tag('no-background', $post->ID)) { ?> 
    <div class="background-image-wrapper <?php if (has_tag('no-filter', $post->ID)){echo 'no-filter';} ?>">
        <img src="<?php echo $backgroundImageSrc[0]; ?>" alt="">
    </div>
<?php } else { ?>
    <div class="no-background"></div>
<?php } ?>

<div class="page__container">
  <?php the_content(); ?>
  <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
</div>
