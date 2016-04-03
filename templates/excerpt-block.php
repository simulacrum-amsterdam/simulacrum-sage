<article <?php post_class('blocks-layout__block'); ?>>
  <header>
    <h4 class="blocks-layout__title">
      <a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a>
    </h4>
  </header>
  
  <div>
    <?php
    $backgroundImageSrc = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');
    if (has_post_thumbnail() == 1 && !has_tag('no-background', $post->ID)) {
    ?>
    <div class="blocks-layout__summery"><?php echo the_excerpt(); ?></div>
    <img class="blocks-layout__image" src="<?php echo $backgroundImageSrc[0]; ?>" alt="">
    <?php } else { ?>
    <div class="blocks-layout__summery blocks-layout__summery--unhover">
      <?php echo the_excerpt(); ?>
    </div>
    <?php } ?>
  </div>
  
  <footer class="blocks-layout__footer">
    <time class="blocks-layout__time" datetime="<?= get_post_time('c', true); ?>"><?= get_the_date(); ?></time>
  </footer>
</article>

<div class="blocks-layout__block blocks-layout__block--empty"></div>