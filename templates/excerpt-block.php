<?php
$backgroundImageSrc = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');
$imgAvailable = (has_post_thumbnail() == 1 && !has_tag('no-background', $post->ID));
?>

<?php if ($imgAvailable) { ?>
<article <?php post_class('blocks-layout__block'); ?>>
<?php } else { ?>
<article <?php post_class('blocks-layout__block blocks-layout__block--unhover'); ?>>
<?php } ?>
  <header class="blocks-layout__header">
    <h4 class="blocks-layout__title">
      <a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a>
    </h4>
  </header>

  <div>
    <div class="blocks-layout__foreground" onclick="">
      <div class="blocks-layout__summery">
        <?php echo the_excerpt(); ?>
      </div>
    </div>

    <div 
    class="blocks-layout__background"
    style="background-image: url( <?php echo $backgroundImageSrc[0]; ?> );">
    </div>
  </div>

  <div class="blocks-layout__footer">
    <time class="blocks-layout__time" datetime="<?= get_post_time('c', true); ?>"><?= get_the_date(); ?></time>
  </div>
</article>
<?php $rand = rand(1, 100); ?>
<?php if ($rand < 25) { ?>
<div class="blocks-layout__block blocks-layout__block--first-item <?php if (rand(1, 100) < 50) { echo "blocks-layout__block--first-item-white"; }?>"></div>
<?php } else if ($rand < 50) { ?>
<div class="blocks-layout__block blocks-layout__block--first-item <?php if (rand(1, 100) < 50) { echo "blocks-layout__block--first-item-white"; }?>"></div>
<div class="blocks-layout__block blocks-layout__block--first-item <?php if (rand(1, 100) < 50) { echo "blocks-layout__block--first-item-white"; }?>"></div>
<?php } else if ($rand < 75) { ?>
<div class="blocks-layout__block blocks-layout__block--first-item <?php if (rand(1, 100) < 50) { echo "blocks-layout__block--first-item-white"; }?>"></div>
<div class="blocks-layout__block blocks-layout__block--first-item <?php if (rand(1, 100) < 50) { echo "blocks-layout__block--first-item-white"; }?>"></div>
<div class="blocks-layout__block blocks-layout__block--first-item <?php if (rand(1, 100) < 50) { echo "blocks-layout__block--first-item-white"; }?>"></div>
<?php } else if ($rand < 100) { ?>
<div class="blocks-layout__block blocks-layout__block--first-item <?php if (rand(1, 100) < 50) { echo "blocks-layout__block--first-item-white"; }?>"></div>
<div class="blocks-layout__block blocks-layout__block--first-item <?php if (rand(1, 100) < 50) { echo "blocks-layout__block--first-item-white"; }?>"></div>
<div class="blocks-layout__block blocks-layout__block--first-item <?php if (rand(1, 100) < 50) { echo "blocks-layout__block--first-item-white"; }?>"></div>
<div class="blocks-layout__block blocks-layout__block--first-item <?php if (rand(1, 100) < 50) { echo "blocks-layout__block--first-item-white"; }?>"></div>
<?php } ?>