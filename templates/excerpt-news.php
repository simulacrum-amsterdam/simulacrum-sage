<article <?php post_class('blocks-layout__block'); ?>>
  <header>
    <a href="<?php the_permalink(); ?>">  
      <h4 class="blocks-layout__title"><?php the_title(); ?></h4>
    </a>
    <?php
    $backgroundImageSrc = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');
    if (has_post_thumbnail() == 1 && !has_tag('no-background', $post->ID)) {
    ?>
    <div 
    class="blocks-layout__image"
    style="background-image: url( <?php echo $backgroundImageSrc[0]; ?> );">
      <div class="blocks-layout__summery">
        <?php echo the_excerpt(); ?>
      </div>
    </div>
    <?php } else { ?>
      <div class="blocks-layout__summery-unhover">
        <?php echo the_excerpt(); ?>
      </div>
    <?php } ?>
  </header>
 
  <footer class="blocks-layout__footer">
    <time class="blocks-layout__time" datetime="<?= get_post_time('c', true); ?>"><?= get_the_date(); ?></time>
  </footer>
</article>
<?php
  $random = rand(1,100);
  if ($random > 20) {
?>

<div class="blocks-layout__block">
</div>

<?php
  }
?>
