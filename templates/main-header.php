<!-- meta -->
<?php
  $page = get_page_by_title("Simulacrum");
  $recent = new WP_Query("page_id=" . $page->ID);
  while ($recent->have_posts()) : $recent->the_post();
  ?>
    <h1 class="main-header-title"><?= the_title(); ?></h1>
    <div class="main-header-description"><?php the_content(); ?></div>
  <?php 
  endwhile;
  wp_reset_postdata();
?>
<!-- navigation -->
<?php get_template_part('templates/navigation');?>
