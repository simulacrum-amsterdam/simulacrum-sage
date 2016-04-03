<header class="layout__header layout__header--fp">
  <!-- persentational logo -->
  <?php
    $page = get_page_by_title("Simulacrum");
    $recent = new WP_Query("page_id=" . $page->ID);
    while ($recent->have_posts()) : $recent->the_post();
  ?>
    
    <?php
      $backgroundImageSrc = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');
    ?>
    
    <a  href="<?php the_permalink(); ?>"
        class="featured-image featured-image--fp"
        style="background-image: url( <?php echo $backgroundImageSrc[0]; ?> );"></a>
    
    <!-- meta -->
    <a  href="<?php the_permalink(); ?>">
      <h1 class="header__title"><?= the_title(); ?></h1>
    </a>
    <div class="header__description"><?php echo $page->post_content; ?></div>
  <?php
    endwhile;
    wp_reset_postdata();
  ?>
  <!-- navigation -->
  <?php get_template_part('templates/navigation');?>
</header>


