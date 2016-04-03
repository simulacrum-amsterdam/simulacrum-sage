<?php get_template_part('templates/header');?>

<?php get_template_part('templates/featured-image');?>

<figcaption class="featured-image__caption">
  <?= get_post_custom_values('post-page__caption')[0]; ?> 
</figcaption>