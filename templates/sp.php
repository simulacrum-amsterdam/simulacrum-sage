<?php while (have_posts()) : the_post(); ?>

<?php get_template_part('templates/header-feature'); ?>

<article <?php post_class("sc"); ?>>

  <header class="sc__meta">
    <h2 class="sc__title"><?php the_title(); ?></h2>
    <?php if (!has_tag('no-author', $post->ID)) { ?>
      <h6 class="sc__author"><?= get_the_author(); ?></h6>
    <?php } else { ?>
      <h6 class="sc__author">Redactie</h6>
    <?php } ?>
  </header>
  
  <div class="sc__content-container">
    <?php the_content(); ?>
  </div>

  <footer class="sc__footer">
    <div class="social-media-bar">
        <?php do_action(
            'addthis_widget',
            get_permalink(),
            get_the_title(),
            array(
            'type' => 'custom',
            'size' => '32', // size of the icons.  Either 16 or 32
            'services' => 'facebook,twitter,google,email,print', // the services you want to always appear
            'preferred' => '0', // the number of auto personalized services
            'more' => false, // if you want to have a more button at the end
            'counter' => false // if you want a counter and the style of it
            )
        ); ?>
    </div>
    <time datetime="<?= get_post_time('c', true); ?>"><?= get_the_date(); ?></time>
  </footer>

</article>
<?php endwhile; ?>