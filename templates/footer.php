<footer class="footer">
  <?php
  $page = get_page_by_title("Simulacrum");
  $recent = new WP_Query("page_id=" . $page->ID);
  while ($recent->have_posts()) : $recent->the_post();
    ?>
    <?php get_template_part('templates/featured-image');?>
    <?php 
  endwhile;
    wp_reset_postdata();
    ?>
</footer>