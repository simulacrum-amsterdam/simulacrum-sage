<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class("single_post"); ?>>
    <?php 
      if (  has_post_thumbnail() == 1 && !has_tag('no-background', $post->ID)) { 
        echo '<button class="toggle-post hidden-xs"><span class="glyphicon glyphicon-menu-up"></span></button>';
      } 
    ?>
    <div class="like-options">
        <?php do_action( 'addthis_widget', get_permalink(), get_the_title(), array(
          'type' => 'custom',
          'size' => '32', // size of the icons.  Either 16 or 32
          'services' => 'facebook,twitter,google,email,print,pdfmyurl', // the services you want to always appear
          'preferred' => '0', // the number of auto personalized services
          'more' => false, // if you want to have a more button at the end
          'counter' => false // if you want a counter and the style of it
        )); ?>
       </div>
    <header>
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <?php get_template_part('templates/single-post/entry-meta'); ?>
    </header>
    <div class="entry-content">
      <?php the_content(); ?>
    </div>
    <footer>
      <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
  <?php
    if(!has_tag('no-author', $post->ID)){ ?>
      <div class="usercard">
          <?= get_avatar( get_the_author_meta('ID'), 512); ?>
          <div class="usercard-text">
            <h4><a href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="fn"><?= get_the_author(); ?></a></h4>
            <p><?= the_author_meta( 'description', $userID ); ?></p>
        </div>
      </div>
  <?php } ?>
<?php endwhile; ?>
