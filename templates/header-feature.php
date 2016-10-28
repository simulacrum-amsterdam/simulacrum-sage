<?php get_template_part('templates/header');?>

<?php get_template_part('templates/featured-image');?>

<?php
if (has_post_thumbnail() == 1 && !has_tag('no-background', $post->ID)) {
?>
<figcaption class="featured-image__caption">
  <?= get_post_custom_values('post-page__caption')[0]; ?>
</figcaption>
<?php } ?>
