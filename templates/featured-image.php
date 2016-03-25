<?php
$backgroundImageSrc = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');
if (has_post_thumbnail() == 1 && !has_tag('no-background', $post->ID)) {
?>
<div 
  class="featured-image 
    <?php if (is_front_page()){echo 'featured-image--fp'; } ?>
    <?php if (has_tag('no-filter', $post->ID)){echo 'no-filter'; } ?>" 
  
  style="background-image: url( <?php echo $backgroundImageSrc[0]; ?> );">
</div>
<?php } ?>