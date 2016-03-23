<article <?php post_class('excerpt-news'); ?>>
  <header>
    <h4 class="excerpt-news__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
  </header>
  <div class="excerpt-news__summery">
    <?php echo the_excerpt(); ?>
  </div>
  <footer class="excerpt-news__footer">
    <time class="excerpt-news__time" datetime="<?= get_post_time('c', true); ?>"><?= get_the_date(); ?></time>
  </footer>
</article>
