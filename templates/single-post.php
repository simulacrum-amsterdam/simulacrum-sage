<?php while (have_posts()) : the_post(); ?>
<article <?php post_class("sp"); ?>>

  <?php get_template_part('templates/single-post-header'); ?>

  <figcaption class="sp__caption">
    <?= get_post_custom_values('post-page__caption')[0]; ?> 
  </figcaption>

  <div class="sp__meta">
    <h2 class="sp__title"><?php the_title(); ?></h2>
    <?php if(!has_tag('no-author', $post->ID)){ ?>
      <h6 class="sp__author"><?= get_the_author(); ?></h6>
    <?php } else { ?>
      <h6 class="sp__author">Redactie</h6>
    <?php } ?>
  </div>
  
  <div class="sp__content-container">
    <?php the_content(); ?>
  </div>

  <footer class="sp__footer">
    <div class="social-media-bar">
      <?php do_action( 'addthis_widget', get_permalink(), get_the_title(), array(
        'type' => 'custom',
        'size' => '32', // size of the icons.  Either 16 or 32
        'services' => 'facebook,twitter,google,email,print', // the services you want to always appear
        'preferred' => '0', // the number of auto personalized services
        'more' => false, // if you want to have a more button at the end
        'counter' => false // if you want a counter and the style of it
      )); ?>
    </div>
    <time class="updated post-updated" datetime="<?= get_post_time('c', true); ?>"><?= get_the_date(); ?></time>
    <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
  </footer>

</article>
<?php endwhile; ?>