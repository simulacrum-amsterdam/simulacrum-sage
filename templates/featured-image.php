<?php
$backgroundImageSrc = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');
if (has_post_thumbnail() == 1 && !has_tag('no-background', $post->ID)) {
?>
<a
  href="<?php the_permalink(); ?>"
  class="featured-image"
  style="background-image: url( <?php echo $backgroundImageSrc[0]; ?> );">
</a>
<?php } ?>
