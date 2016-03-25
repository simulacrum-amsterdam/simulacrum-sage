<article <?php post_class('excerpt-news'); ?>>
  <header>
    <a href="<?php the_permalink(); ?>">  
      <h4 class="excerpt-news__title"><?php the_title(); ?></h4>
        <?php
        $backgroundImageSrc = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');
        if (has_post_thumbnail() == 1 && !has_tag('no-background', $post->ID)) { 
        ?>
        <div 
        class="sc__image"
        style="background-image: url( <?php echo $backgroundImageSrc[0]; ?> );">
        </div>
        <?php } ?>
    </a>
  </header>
  <div class="excerpt-news__summery">
    <?php echo the_excerpt(); ?>
  </div>
  <footer class="excerpt-news__footer">
    <time class="excerpt-news__time" datetime="<?= get_post_time('c', true); ?>"><?= get_the_date(); ?></time>
  </footer>
</article>
