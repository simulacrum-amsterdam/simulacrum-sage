<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class("single_post"); ?>>
    <button class="toggle-post"><span class="glyphicon glyphicon-menu-up"></span></button>
    <div class="like-options">
        <img class="social-img" src="<?php bloginfo('template_directory'); ?>/dist/images/social/512x512/s-icons_social-media-icons_basic_round_set_gradient-color_512x512_0000_facebook.png"/>    
        <img class="social-img" src="<?php bloginfo('template_directory'); ?>/dist/images/social/512x512/s-icons_social-media-icons_basic_round_set_gradient-color_512x512_0002_twitter.png"/>    
        <img class="social-img" src="<?php bloginfo('template_directory'); ?>/dist/images/social/512x512/s-icons_social-media-icons_basic_round_set_gradient-color_512x512_0001_pinterest.png"/>    
        <img class="social-img" src="<?php bloginfo('template_directory'); ?>/dist/images/social/512x512/s-icons_social-media-icons_basic_round_set_gradient-color_512x512_0003_google+.png"/>    
        <img class="social-img" src="<?php bloginfo('template_directory'); ?>/dist/images/social/512x512/s-icons_social-media-icons_basic_round_set_gradient-color_512x512_0026_linkedin.png"/> 
        <img class="social-img" src="<?php bloginfo('template_directory'); ?>/dist/images/mail.png"/> 
    </div>
    <header>
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <?php get_template_part('templates/single-post/entry-meta'); ?>
    </header>
    <div class="entry-content">
      <?php the_content(); ?>
    </div>
    <div class="export-options">
      <img class="social-img" src="<?php bloginfo('template_directory'); ?>/dist/images/print.png"/> 
      <img class="social-img" src="<?php bloginfo('template_directory'); ?>/dist/images/pdf.jpg"/>
    </div>
    <footer>
      <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>
