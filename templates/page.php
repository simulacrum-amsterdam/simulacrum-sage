<?php get_template_part('templates/main-header-feature'); ?>
<main class="s-column-content">
  <?php the_content(); ?>
  <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
</main>
