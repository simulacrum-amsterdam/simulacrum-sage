<div class="layout__header">

  <!-- heading text -->
  <h2 class="sp-header__title"><?php the_title(); ?></h2>

  <!-- post and page header -->
  <?php
  $backgroundImageSrc = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');
  if ( has_post_thumbnail() == 1 && !has_tag('no-background', $post->ID)) { 
  ?>
  <div class="sp-header__image <?php if (has_tag('no-filter', $post->ID)){echo 'no-filter';} ?>" style="background-image: url( <?php echo $backgroundImageSrc[0]; ?> ); background-repeat: no-repeat; background-size: cover; background-position: center center;"></div>
  <?php } ?>

  <!-- navigation -->
  <?php get_template_part('templates/navigation');?>

</div>