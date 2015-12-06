<?php while (have_posts()) : the_post(); ?>
  <?php
    $backgroundImageSrc = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');
    if (  has_post_thumbnail() == 1 && !has_tag('no-background', $post->ID)) { ?> 
      <div class="background-image-wrapper">
          <img src="<?php echo $backgroundImageSrc[0]; ?>" alt="">
      </div>
  <?php } else { ?>
      <div class="no-background"></div>
  <?php } ?>
  
  <article <?php post_class("single_post"); ?>>
    <header>
      <figcaption><?= get_post_custom_values('caption')[0]; ?> </figcaption>
      <h2 class="entry-title"><?php the_title(); ?></h2>
      <?php get_template_part('templates/single-post/entry-meta'); ?>
    </header>
    <div class="entry-content">
      <?php the_content(); ?>
    </div>
    <footer>
      <div class="like-options">
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
    <?php comments_template('/templates/comments.php'); ?>
  </article>


<?php endwhile; ?>
