<div class="layout__header">
  <!-- main header -->
  <?php get_template_part('templates/main-header');?>

  <!-- post and page header -->
  <?php
  $backgroundImageSrc = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');
  if ( has_post_thumbnail() == 1 && !has_tag('no-background', $post->ID)) { 
  ?>
  <div class="sp-header__image <?php if (has_tag('no-filter', $post->ID)){echo 'no-filter';} ?>" style="background-image: url( <?php echo $backgroundImageSrc[0]; ?> ); background-repeat: no-repeat; background-size: cover; background-position: center center;" />
  <?php } ?>

</div>