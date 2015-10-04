<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class("single_post"); ?>>
    <header>
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <?php get_template_part('templates/entry-meta'); ?>
    </header>
    <div class="entry-content">
      <?php the_content(); ?>
    </div>
    <footer>
      <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
  <div class="side-bar">
    <div class="author">
      <h5>Auteur</h5>
      <h4>Naam Auteur</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis neque voluptas optio eveniet minima aut quis consequatur, temporibus enim. Error debitis maiores maxime fuga recusandae temporibus consequuntur, iste delectus sapiente.</p>
    </div>
    <div class="editors">
      <h5>Toetsende Redacteur</h5>
    </div>
    <div class="version-info">
      <h5>Versie</h5>
      <p>Ingezonden: 10 september 2015</p>
      <p>Gepubliceerd: 30 oktober 2015</p>
      <p>Laatste verandering: 31 oktober 2015</p>
    </div>
    <div class="license">
      <h5>Licentie</h5>
      <p>Dit werk is beschikbaar onder de: <a rel="license" href="http://creativecommons.org/licenses/by/4.0/">
        Creative Commons Attribution 4.0 International License
      </a></p>
      <a rel="license" href="http://creativecommons.org/licenses/by/4.0/">
        <img alt="Creative Commons License" src="https://i.creativecommons.org/l/by/4.0/88x31.png" />
      </a>
    </div>
    <div class="export-options">
        <h5>Share</h5>
        <img class="social-img" src="<?php bloginfo('template_directory'); ?>/dist/images/social/512x512/s-icons_social-media-icons_basic_round_set_gradient-color_512x512_0000_facebook.png"/>    
        <img class="social-img" src="<?php bloginfo('template_directory'); ?>/dist/images/social/512x512/s-icons_social-media-icons_basic_round_set_gradient-color_512x512_0002_twitter.png"/>    
        <img class="social-img" src="<?php bloginfo('template_directory'); ?>/dist/images/social/512x512/s-icons_social-media-icons_basic_round_set_gradient-color_512x512_0001_pinterest.png"/>    
        <img class="social-img" src="<?php bloginfo('template_directory'); ?>/dist/images/social/512x512/s-icons_social-media-icons_basic_round_set_gradient-color_512x512_0003_google+.png"/>    
        <img class="social-img" src="<?php bloginfo('template_directory'); ?>/dist/images/social/512x512/s-icons_social-media-icons_basic_round_set_gradient-color_512x512_0026_linkedin.png"/> 
        <h5>Export</h5>
        <img class="social-img" src="<?php bloginfo('template_directory'); ?>/dist/images/print.png"/> 
        <img class="social-img" src="<?php bloginfo('template_directory'); ?>/dist/images/pdf.jpg"/>
        <img class="social-img" src="<?php bloginfo('template_directory'); ?>/dist/images/mail.png"/> 

    </div>
  </div>
<?php endwhile; ?>
