<header class="layout__header">
  <!-- main header -->
  <?php get_template_part('templates/header');?>

  <!-- post and page header -->
    <?php get_template_part('templates/featured-image');?>

</header>

<figcaption class="featured-image__caption">
    <?= get_post_custom_values('post-page__caption')[0]; ?> 
</figcaption>